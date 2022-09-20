<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FranchiseMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $franchise;
    public function __construct($franchise)
    {
        $this->franchise = $franchise;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@stillforce.tech')
            ->subject('Nouvelle demande de franchise, Youdom Care')
            ->view('mail.franchise-mail');
    }
}
