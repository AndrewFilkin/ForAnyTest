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
//        setting - sail artisan rabbitmq:setting
        $obj = new RabbitMqService();
        $obj->sendMessage();
    }

    public function getMessage()
    {

//      get data with command - sail artisan rabbitmq:get
        $obj = new RabbitMqService();
        $obj->getMessage();

    }

}
