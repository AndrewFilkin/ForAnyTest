<?php

namespace App\Http\Controllers\RabbitMQ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RabbitMqController extends Controller
{
    public function index()
    {
        dispatch(new \App\Jobs\SendMessageToRabbitMQJob());
        return 'ok';
    }
}
