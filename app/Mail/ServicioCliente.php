<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ServicioCliente extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Servicio de Limpieza Solicitado';


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
        return $this->view('emails.ServicioCliente');
    }
}
