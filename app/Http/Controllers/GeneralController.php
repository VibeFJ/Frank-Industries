<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Ruta raiz.
     *
     * @return raiz
     */
    public function raiz(){
        return redirect()->route('login');
    }

    /**
     * Ruta index.
     *
     * @return view index
     */
    public function index(){
        return view('index');
    }

    /**
     * Ruta contacto.
     *
     * @return view contacto
     */
    public function contacto(){
        return view('contact');
    }

    /**
     * Ruta acerca.
     *
     * @return view acerca
     */
    public function acerca(){
        return view('about');
    }
}
