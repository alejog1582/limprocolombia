<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CotizacionAdministrador extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Nueva Cotizacion Solicitada';


    public $cotizacion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cotizacion)
    {
        $this->cotizacion = $cotizacion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.CotizacionAdministrador');
    }
}
