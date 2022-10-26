<?php

namespace LaravelFCM;

use GuzzleHttp\Client;
use Illuminate\Support\Manager;

class FCMManager extends Manager
{
    public function getDefaultDriver(): string
    {
        return $this->getContainer()['config']['fcm.driver'];
    }

    protected function createHttpDriver(): Client
    {
        $config = $this->getContainer()['config']->get('fcm.http', []);
        return new Client(['timeout' => $config['timeout']]);
    }
}
