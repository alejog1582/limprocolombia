<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AsignacionCliente extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Asignacion de Funcionaria Limpro Colombia';


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
        return $this->view('emails.AsignacionCliente');
    }
}
