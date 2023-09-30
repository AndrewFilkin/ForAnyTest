<?php

namespace App\Services\RabbitMQ;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class SendMessageToRabbitMqService
{
    public function sendMessage()
    {
        // Подключаемся к серверу RabbitMQ
        $connection = new AMQPStreamConnection(
            config('queue.connections.rabbitmq.host'),
            config('queue.connections.rabbitmq.port'),
            config('queue.connections.rabbitmq.login'),
            config('queue.connections.rabbitmq.password'),
            config('queue.connections.rabbitmq.vhost')
        );

        // Создаем канал
        $channel = $connection->channel();

        // Определяем обменник
        $channel->exchange_declare('exchanges-test', 'fanout', false, true, false);

        // Определяем сообщение
        $messageBody = 'Hello, RabbitMQ!';
        $message = new AMQPMessage($messageBody);

        // Публикуем сообщение в обменник
        $channel->basic_publish($message, 'exchanges-test');

        // Закрываем канал и соединение
        $channel->close();
        $connection->close();
    }

    public function receive()
    {
// Подключаемся к серверу RabbitMQ
        $connection = new AMQPStreamConnection(
            config('queue.connections.rabbitmq.host'),
            config('queue.connections.rabbitmq.port'),
            config('queue.connections.rabbitmq.login'),
            config('queue.connections.rabbitmq.password'),
            config('queue.connections.rabbitmq.vhost')
        );

        // Создаем канал
        $channel = $connection->channel();

        // Определяем queue
        $channel->queue_declare('queue-test', false, true, false, false);

//        $channel->basic_consume('queue-test', '', false, false, false, false, $callback);

        $frame = $channel->basic_get('queue-test');

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
