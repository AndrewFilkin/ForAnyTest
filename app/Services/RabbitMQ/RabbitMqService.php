<?php


namespace App\Services\RabbitMQ;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitMqService
{
    public function sendMessage()
    {
        $connection = new AMQPStreamConnection('rabbitmq', 5672, 'sail', 'password');
        $channel = $connection->channel();

//        use command sail artisan rabbitmq:setting
//        Выполнить команду либо создать в самом rabbitmq
//        $channel->exchange_declare('laravel', 'fanout', false, true, false);
//        $channel->queue_declare('laravel', false, true, false, false);
//        $channel->queue_bind('laravel', 'laravel');

        $msg = new AMQPMessage('Hello World!');
        $channel->basic_publish($msg, 'laravel');

        echo " [x] Sent 'Hello World!'\n";

        $channel->close();
        $connection->close();
    }

    public function getMessage()
    {
        $connection = new AMQPStreamConnection('rabbitmq', 5672, 'sail', 'password');

        // Создаем канал
        $channel = $connection->channel();

        // Определяем queue
        $channel->queue_declare('laravel', false, true, false, false);

        $frame = $channel->basic_get('laravel');

        if ($frame !== null) {
            // Сообщение было получено
            $messageBody = $frame->getBody();

            // Обработайте сообщение по вашему усмотрению
            echo "Received message: $messageBody\n";
        } else {
            echo "No messages in the queue.\n";
        }
        $channel->close();
        $connection->close();

    }

}
