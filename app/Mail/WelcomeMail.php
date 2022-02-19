<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
     public $emailcontent;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailcontent)
    {
        $this->emailcontent = $emailcontent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Registration successful')
                     ->view('mail.register_user');
    }
}
