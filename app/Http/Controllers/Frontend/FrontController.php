<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
     return view('frontend.index.index');
    }
    public function nosotros()
    {
     return view('frontend.nosotros.nosotros');
    }
    public function planDeEstudios()
    {
     return view('fronend.planEstudios.planEstudios');
    }
    public function inscripciones()
    {
     return view('frontend.inscripciones.inscripciones');
    }
    public function campoLaboral()
    {
     return view('frontend.campoLaboral.campoLaboral');
    }
    public function diplomados()
    {
     return view('frontend.diplomados.diplomados');
    }
    public function becas()
    {
     return view('frontend.becas.becas');
    }
    public function noticias()
    {
     return view('frontend.noticias.noticias');
    }
    public function contacto()
    {
     return view('frontend.contacto.contacto');
    }
}
