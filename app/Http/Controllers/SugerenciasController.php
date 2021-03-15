<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SugerenciasMailable;
use Illuminate\Support\Facades\Mail;

class SugerenciasController extends Controller
{
    public function index(){
        return view("sugerencias.index");
    }

    /**
     * Procesa y envia el correo electronico
     */
    public function store(Request $request){

        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "suggestion" => "required"
        ]);

        $correo = new SugerenciasMailable($request->all());



        Mail::to("j.cristian.2daw@gmail.com")->send($correo);
        return redirect()->route("sugerencias.index")->with("info","Mensaje enviado");
    }
}
