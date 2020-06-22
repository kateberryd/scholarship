<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $thisUser;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($thisUser)
    {
         $this->thisUser = $thisUser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.activation');
    }
}
