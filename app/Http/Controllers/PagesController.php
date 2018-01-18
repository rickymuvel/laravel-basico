<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

    public function home()
    {
    	return view('home');
    }

    public function contact()
    {
    	return view('contactos');
    }

    public function saludos($nombre = "Invitado")
    {
    	$html = "<h2>Contenido HTML</h2>";
		// $script = "<script> alert('Problema XSS - Cross Site Scripting!');</script>";
		$script = "Script modificado";

		$consolas = [
			// "Play Station 4",
			// "Xbox One",
			// "Wii U"
		];   

		return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
    }

    public function mensajes(CreateMessageRequest $request)
    {
        // Ahora la validación se hará usando la clase CreateMessageRequest
        // Si la condicion no se cumple, Laravel automáticamente reenviará al formulario.
        return $request->all();
    }
}
