<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ServicioAdministrador extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Nuevo Servicio';


    public $servicio;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($servicio)
    {
        $this->servicio = $servicio;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.ServicioAdministrador');
    }
}
