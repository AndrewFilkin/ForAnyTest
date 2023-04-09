<?php


namespace App\Services\TestQueue;

use App\Models\testQueue;


class SendMessage
{
    public function sendMessage($message)
    {
        testQueue::create([
            'message' => $message,
        ]);
    }

}
