<?php

use TruMobileLaravelFCM\Facades\FCM;
use TruMobileLaravelFCM\Message\Exceptions\InvalidOptionsException;
use TruMobileLaravelFCM\Message\OptionsBuilder;
use TruMobileLaravelFCM\Message\PayloadDataBuilder;
use TruMobileLaravelFCM\Message\PayloadNotificationBuilder;

class FCMSendNotification extends FCMTestCase
{
    public function createApplication()
    {
        $app = require __DIR__ . '/../vendor/laravel/laravel/bootstrap/app.php';

        $serverKey = 'AAAAxV3mjS4:APA91bFh2uyi_RZO9OqPkkuVKACgHR5OhIWPDtluapLI2UDXGT2GbmexekPbKvIdpGUvF70__hS7XhpYmW4ZAPr61k2b3EAQ7UtyMrT971JLh2m5uwBCaV4X8ZsMCDO5oJb9IsYTOR2x';
        $serverId = '847683947822';
        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
        $app->register(TruMobileLaravelFCM\FCMServiceProvider::class);

        $app['config']['fcm.driver'] = 'http';
        $app['config']['fcm.http.timeout'] = 20;
        $app['config']['fcm.http.server_send_url'] = 'https://fcm.googleapis.com/fcm/send';
        $app['config']['fcm.http.server_key'] = "$serverKey";
        $app['config']['fcm.http.sender_id'] = $serverId;
        return $app;
    }

    /**
     * @throws InvalidOptionsException
     * @throws Exception
     */
    public function test_send_notification()
    {
        $event = (object)[
            'message' => [
                'subject' => 'Test Laravel Fcm Upgrade',
                'badge' => 1,
                'body' => 'Test Laravel Fcm Upgrade',
                'notificationTokens' => [
                    'fj5euWIGf2ayD-Jz2BdKYi:APA91bHQnuHzV_GBNCgQQLPF-OOPs6ah65JXSHdieot8y1nVC7g2G_BQL2r_284rBulWnG8y8eDQeK-PRG7AaXb6_feOyKBB8NzovulANa-VwOmy3rpJlqSNOQNrIiHOvWvvXZ9FVE7o'
                ]
            ],
        ];

        if (!$event->message) {
            return false;
        }


        $request = $event->message;
        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60 * 20);

        $subject = $request['subject'];
        $badge = $request['badge'];

        $notificationBuilder = new PayloadNotificationBuilder();
        $notificationBuilder->setTitle($subject)
            ->setBody($request['body'])
            ->setBadge($badge)
            ->setSound('default');

        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData(['a_data' => 'my_data']);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();

        $tokens = $event->message['notificationTokens'];

        if (empty($tokens)) {
            throw new Exception("FAIL SEND NOTIFICATION TO EMPTY TOKENS");
        }


        $downstreamResponse = FCM::sendTo($tokens, $option, $notification, $data);

        $numberSuccess = $downstreamResponse->numberSuccess();
        $numberFailure = $downstreamResponse->numberFailure();
        $tokensToDelete = $downstreamResponse->tokensToDelete();
        $tokensWithError = $downstreamResponse->tokensWithError();
        $tokensSuccess = array_diff($tokens, array_merge($tokensToDelete, $tokensWithError));
        $this->assertEquals(1, $numberSuccess);
        $this->assertEquals(0, $numberFailure);
    }

    public function test_normal_http_request()
    {
        $serverKey = 'AAAAxV3mjS4:APA91bFh2uyi_RZO9OqPkkuVKACgHR5OhIWPDtluapLI2UDXGT2GbmexekPbKvIdpGUvF70__hS7XhpYmW4ZAPr61k2b3EAQ7UtyMrT971JLh2m5uwBCaV4X8ZsMCDO5oJb9IsYTOR2x';
        $data = [
            'headers' => [
                'Authorization' => "key=$serverKey",
                'Accept' => "application/json",
                'Content-Type' => "application/json",
            ],
            'url' => 'https://fcm.googleapis.com/fcm/send',
            'message' => [
                'notification' => [
                    'title' => 'Test Laravel Fcm Upgrade',
                    'body' => 'Test Laravel Fcm Upgrade',
                ],
                'registration_ids' => ['fj5euWIGf2ayD-Jz2BdKYi:APA91bHQnuHzV_GBNCgQQLPF-OOPs6ah65JXSHdieot8y1nVC7g2G_BQL2r_284rBulWnG8y8eDQeK-PRG7AaXb6_feOyKBB8NzovulANa-VwOmy3rpJlqSNOQNrIiHOvWvvXZ9FVE7o']
            ],
        ];
//        $response = $this->post($data['url'], $data['message'], $data['headers']);
        $response = \Illuminate\Support\Facades\Http::withHeaders($data['headers'])->post($data['url'],$data['message']);
        dd($response->json());
    }
}
