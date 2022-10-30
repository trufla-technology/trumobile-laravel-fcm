TruMobileLaravelFCM\Sender\FCMSender
===============

Class FCMSender




* Class name: FCMSender
* Namespace: TruMobileLaravelFCM\Sender
* Parent class: [TruMobileLaravelFCM\Sender\BaseSender](TruMobileLaravelFCM-Sender-BaseSender.md)



Constants
----------


### MAX_TOKEN_PER_REQUEST

    const MAX_TOKEN_PER_REQUEST = 1000





Properties
----------


### $client

    protected \Illuminate\Foundation\Application $client

Guzzle Client



* Visibility: **protected**


### $config

    protected array $config

configuration



* Visibility: **protected**


### $url

    protected mixed $url

url



* Visibility: **protected**


Methods
-------


### sendTo

    \TruMobileLaravelFCM\Response\DownstreamResponse|null TruMobileLaravelFCM\Sender\FCMSender::sendTo(String|array $to, \TruMobileLaravelFCM\Message\Options|null $options, \TruMobileLaravelFCM\Message\PayloadNotification|null $notification, \TruMobileLaravelFCM\Message\PayloadData|null $data)

send a downstream message to

- a unique device with is registration Token
- or to multiples devices with an array of registrationIds

* Visibility: **public**


#### Arguments
* $to **String|array**
* $options **[TruMobileLaravelFCM\Message\Options](TruMobileLaravelFCM-Message-Options.md)|null**
* $notification **[TruMobileLaravelFCM\Message\PayloadNotification](TruMobileLaravelFCM-Message-PayloadNotification.md)|null**
* $data **[TruMobileLaravelFCM\Message\PayloadData](TruMobileLaravelFCM-Message-PayloadData.md)|null**



### sendToGroup

    \TruMobileLaravelFCM\Response\GroupResponse TruMobileLaravelFCM\Sender\FCMSender::sendToGroup($notificationKey, \TruMobileLaravelFCM\Message\Options|null $options, \TruMobileLaravelFCM\Message\PayloadNotification|null $notification, \TruMobileLaravelFCM\Message\PayloadData|null $data)

Send a message to a group of devices identified with them notification key



* Visibility: **public**


#### Arguments
* $notificationKey **mixed**
* $options **[TruMobileLaravelFCM\Message\Options](TruMobileLaravelFCM-Message-Options.md)|null**
* $notification **[TruMobileLaravelFCM\Message\PayloadNotification](TruMobileLaravelFCM-Message-PayloadNotification.md)|null**
* $data **[TruMobileLaravelFCM\Message\PayloadData](TruMobileLaravelFCM-Message-PayloadData.md)|null**



### sendToTopic

    \TruMobileLaravelFCM\Response\TopicResponse TruMobileLaravelFCM\Sender\FCMSender::sendToTopic(\TruMobileLaravelFCM\Message\Topics $topics, \TruMobileLaravelFCM\Message\Options|null $options, \TruMobileLaravelFCM\Message\PayloadNotification|null $notification, \TruMobileLaravelFCM\Message\PayloadData|null $data)

Send message devices registered at a or more topics



* Visibility: **public**


#### Arguments
* $topics **[TruMobileLaravelFCM\Message\Topics](TruMobileLaravelFCM-Message-Topics.md)**
* $options **[TruMobileLaravelFCM\Message\Options](TruMobileLaravelFCM-Message-Options.md)|null**
* $notification **[TruMobileLaravelFCM\Message\PayloadNotification](TruMobileLaravelFCM-Message-PayloadNotification.md)|null**
* $data **[TruMobileLaravelFCM\Message\PayloadData](TruMobileLaravelFCM-Message-PayloadData.md)|null**



### getUrl

    string TruMobileLaravelFCM\Sender\BaseSender::getUrl()

get the url



* Visibility: **protected**
* This method is **abstract**.
* This method is defined by [TruMobileLaravelFCM\Sender\BaseSender](TruMobileLaravelFCM-Sender-BaseSender.md)




### __construct

    mixed TruMobileLaravelFCM\Sender\BaseSender::__construct()

BaseSender constructor.



* Visibility: **public**
* This method is defined by [TruMobileLaravelFCM\Sender\BaseSender](TruMobileLaravelFCM-Sender-BaseSender.md)



