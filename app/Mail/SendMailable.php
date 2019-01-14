<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($send)
    {
        $this->name = $send['name'];
        $this->subject = $send['subject'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('User.pages.sendMessage');
    }
}
