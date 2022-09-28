<?php

namespace App\Mail\Join;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRegistration extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $user;
     public $password;
    public function __construct($user,$password)
    {
        $this->user=$user;
        $this->password=$password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@stillforce.tech')
        ->subject('Nouvel utilisateur créer')
        ->view('mail.joins.UserRegistration');
    }
}
