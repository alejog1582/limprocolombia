<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EntrevistaAspirante extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Solicitud de Entrevista de Trabajo Limpro Colombia';

    public $funcionaria;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($funcionaria)
    {
        $this->funcionaria = $funcionaria;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.EntrevistaAspirante');
    }
}
