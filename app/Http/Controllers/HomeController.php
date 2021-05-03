<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
use Illuminate\Http\Support\Facades\Auth;
*/

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       /* $user=Auth::user();
        return view('home', compact('user')); */

        return view('home');
    }

    public function profile()
    {
       /* $user=Auth::user();
        return view('home', compact('user')); */

        return view('profile');
    }


    public function favorites()
    {
       /* $user=Auth::user();
        return view('home', compact('user')); */

        return view('favorites');
    }


    public function settings()
    {
       /* $user=Auth::user();
        return view('home', compact('user')); */

        return view('settings');
    }


    /* public function create () {
        return "Aca vas a poder editar tu perfil";
    }

    */





    public function autores()
    {
       /* $user=Auth::user();
        return view('home', compact('user')); */

        return view('autores');
    }

    public function libros()
    {
       /* $user=Auth::user();
        return view('home', compact('user')); */

        return view('libros');
    }
}
