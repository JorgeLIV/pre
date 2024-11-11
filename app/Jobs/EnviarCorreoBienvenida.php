<?php

namespace App\Jobs;

use App\Mail\Email;  // Importa tu clase Mailable
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class EnviarCorreoBienvenida implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $usuario;

    /**
     * Crear una nueva instancia del Job.
     *
     * @param $usuario
     * @return void
     */
    public function __construct($usuario)
    {
        $this->usuario = $usuario;  // Guardamos el usuario para usarlo más adelante
    }

    /**
     * Ejecutar el Job.
     *
     * @return void
     */
    public function handle()
    {
        // Enviar el correo de bienvenida al usuario usando la clase Email
        Mail::to($this->usuario->email)->send(new Email());
    }
}
