<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class SendMessageToRabbitMQJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
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
}
