<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpAmqpLib\Connection\AMQPStreamConnection;

class RabbiSettingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rabbitmq:setting';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $connection = new AMQPStreamConnection('rabbitmq', 5672, 'sail', 'password');
        $channel = $connection->channel();

        $channel->exchange_declare('laravel', 'fanout', false, true, false);
        $channel->queue_declare('laravel', false, true, false, false);
        $channel->queue_bind('laravel', 'laravel');

        echo 'Setting ok';
    }
}
