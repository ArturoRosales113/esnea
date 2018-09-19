<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\CampoLaboral;
use App\Slider;
use App\PlanEstudio;


class FrontController extends Controller
{
    public function index()
    {
     $articles = Article::all()->take(4);
     return view('frontend.index.index',[
      'articles' => $articles
     ]);
    }
    public function nosotros()
    {
     return view('frontend.nosotros.nosotros');
    }
    public function planDeEstudios()
    {
     return view('frontend.planEstudios.planEstudios');
    }
    public function inscripciones()
    {
     return view('frontend.inscripciones.inscripciones');
    }
    public function campoLaboral()
    {
     $campos = CampoLaboral::all();
     return view('frontend.campoLaboral.campoLaboral',[
      'campos' => $campos
     ]);
    }
    public function diplomados()
    {
     $diplomados = PlanEstudio::all()->where('isDiplomado',1);
     return view('frontend.diplomados.diplomados',[
      'diplomados' => $diplomados
     ]);
    }
    public function becas()
    {
     return view('frontend.becas.becas');
    }
    public function noticias()
    {
     $articles = Article::all();
     //dd($articles);
     return view('frontend.noticias.noticias',[
      'articles' => $articles
     ]);
    }
    public function galeria()
    {
     return view('frontend.galeria.galeria');
    }
    public function contacto()
    {
     return view('frontend.contacto.contacto');
    }
}
