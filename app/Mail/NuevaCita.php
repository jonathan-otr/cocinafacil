<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NuevaCita extends Mailable
{
  use Queueable, SerializesModels;

  public $nombre;
  public $correo;
  public $telefono;


  public function __construct($nombre,$correo,$telefono)
  {
    $this->nombre = $nombre;
    $this->correo = $correo;
    $this->telefono = $telefono;
  }


  public function build()
  {
      return $this->view('mails.NuevaCita');
  }
}
