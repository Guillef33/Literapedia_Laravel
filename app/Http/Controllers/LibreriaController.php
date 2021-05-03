<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LibreriaController extends Controller
{
    public function index () {
        return view ('librerias');
    }

    public function create () {
        return "Aca vas a poder crear una libreria";
    }

    public function show ($libreria) {
        return "Bienvenido a la libreria $libreria";
    }



}
