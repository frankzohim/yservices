<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class NeedEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
      /**
     * Product Data as an Array
     * @var array
     */
    public $product=[];
     public $need;
    public function __construct($need)
    {
        $this->need=$need;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Youdom care: Nouveau besoin')
        ->markdown('mail.need-email');
    }
}
