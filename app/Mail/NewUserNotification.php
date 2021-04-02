<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Auth\User;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->subject('Welcome to My Dashboard');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('laravel@localhost.com')->view('emails.welcome-new-user');
    }
}
