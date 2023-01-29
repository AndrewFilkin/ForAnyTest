<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmaiForTest extends Mailable
{
    use Queueable, SerializesModels;

    public $messageData;

    public function __construct($messageData)
    {

        $this->messageData = $messageData;

    }

    public function build()
    {

        $messageData = $this->messageData;
        return $this->subject('This is Testing Mail')
            ->view('SendEmail.emailsTemplate', compact('messageData'));
    }

}
