<?php

namespace App\Http\Controllers\RabbitMQ;

use App\Http\Controllers\Controller;
use App\Services\RabbitMQ\SendMessageToRabbitMqService;
use App\Services\RabbitMQ\RabbitMqService;

class RabbitMqController extends Controller
{

    public function index()
    {
        return view('RabbitMQ.index');
    }

    public function sendMessage()
    {
//        SendMessageToRabbitMQJob::dispatch()->onConnection('rabbitmq');

//        $obj = new SendMessageToRabbitMqService();
//        $obj->sendMessage();
//        return 'Send message...';

//        $this->dispatch(new \App\Jobs\SendMessageToRabbitMQJob());
//        return 'Send message...';

        $obj = new RabbitMqService();
        $obj->sendMessage();

    }

    public function getMessage()
    {
        $obj = new RabbitMqService();
        $obj->getMessage();

    }

}
