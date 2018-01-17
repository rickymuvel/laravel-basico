<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function mensajes(Request $request)
    {
        // return $this->request->all();
        if($request->has('nombre')){
            return 'El nombre es '. $request->input('nombre');
        }else{
            return 'No tiene nombre';
        }
    }
}
