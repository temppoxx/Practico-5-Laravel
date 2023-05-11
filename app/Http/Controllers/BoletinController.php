<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoletinController extends Controller
{
    function mostrarBoletin (Request $request){
            $nombre = $request -> post("nombre");
            $nota = $request -> post("nota");
            $juicio = $request -> post("juicio");
            $numerodelista = $request -> post("numerodelista");

            return view("mostrarBoletin", [ 
                "nombre" => $nombre,
                "nota" => $nota, 
                "juicio" => $juicio,
                "numerodelista" => $numerodelista
            ]);
        }
}
