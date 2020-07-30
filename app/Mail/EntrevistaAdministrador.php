<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EntrevistaAdministrador extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Nueva Solicitud de Entrevista';

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
        return $this->view('emails.EntrevistaAdministrador');
    }
}
