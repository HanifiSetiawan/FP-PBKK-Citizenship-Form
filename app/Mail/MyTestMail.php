<?php

// app/Mail/MyTestMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $emailMessage;

    /**
     * Create a new message instance.
     *
     * @param  string  $message
     */
    public function __construct($message)
    {
        $this->emailMessage = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('My Test Mail')
            ->markdown('emails.mytestmail');
    }
}
