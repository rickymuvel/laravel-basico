<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
	protected $request;

	public function __construct(){
        // Accedemos a la propiedad middleware que heredamos de nuestro Controller base.
		$this->middleware('example', ['only' => ['home']]); // Este middleware se aplica a todos los métodos de se controlador. 
        // La forma de arriba ha fallado, y no encuentro la razón.
	}

    public function home()
    {
    	return view('home');
        // return response('Contenido de la respuesta', 201)
        //                     ->header('X-TOKEN', 'secret')
        //                     ->header('X-TOKEN2', 'secret2')
        //                     ->cookie('X-COOKIE', 'cookie');
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
        $data = $request->all();
        // Ahora la validación se hará usando la clase CreateMessageRequest
        // Si la condicion no se cumple, Laravel automáticamente reenviará al formulario.
        // return $request->all();
        // return redirect('/');
        // return redirect()
        //             ->route('contactos')
        //             ->with('info', 'Tu mensaje ha sido enviado correctamente');
        return back()->with('info', 'Tu mensaje ha sido enviado correctamente');
        // return response()->json(['data' => $data ], 202)->header('TOKEN', 'secret');

    }
}
