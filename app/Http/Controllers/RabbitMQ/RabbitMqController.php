<?php

namespace App\Http\Controllers\RabbitMQ;

use App\Http\Controllers\Controller;
use App\Services\RabbitMQ\SendMessageToRabbitMqService;

class RabbitMqController extends Controller
{
    public function index()
    {
//        SendMessageToRabbitMQJob::dispatch()->onConnection('rabbitmq');
//        return 'ok';
        $obj = new SendMessageToRabbitMqService();
        $obj->sendMessage();
        return 'ok';
    }

    public function getMessage()
    {
        $obj = new SendMessageToRabbitMqService();
        $obj->receive();
    }

}
