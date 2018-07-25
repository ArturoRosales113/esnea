<div class=" fixed-top">
 <div class="row justify-content-end align-items-center bg2 py-2 d-none pr-5 d-md-flex">
  <span class="mr-3 text-white"><i class="fa fa-envelope">&nbsp;contacto@esnea.com.mx</i></span>
  <span class="mr-3 text-white"><i class="fa fa-phone">&nbsp;(228) 8-17-17-17</i></span>
  <a href="#" class="text-white mr-3"><i class="fab fa-facebook"></i></a>
  <a href="#" class="text-white mr-3"><i class="fab fa-twitter-square"></i></a>
  <a href="#" class="text-white mr-3"><i class="fab fa-instagram"></i></a>
  <a href="#" class="text-white mr-3"><i class="fab fa-youtube-square"></i></a>
 </div>
<nav class="navbar navbar-expand-lg bg1 w-100 d-flex p-0">
 <div class="navbar-collapse d-flex justify-content-center" id="navbarNav">
    <ul class="navbar-nav d-none d-lg-flex justify-content-around w-100 align-items-center">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('front.nosotros') }}">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('front.plan_de_estudios') }}">Planes de estudio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('front.inscripciones') }}">Costos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('front.campo_laboral') }}">Campo laboral</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('front.index') }}"><img src="{{asset('img/logo-esnea-bn.png')}}" height="55px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('front.diplomados') }}">Diplomados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('front.becas') }}">Becas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('front.noticias') }}">Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('front.galeria') }}">Galería</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('front.contacto') }}">Contacto</a>
      </li>
    </ul>
  </div>
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler d-lg-none text-white align-self-end" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
     <img src="{{ asset('img/icono-esnea-bn.png') }}" height="45px" class="" alt="...">
     <i class="fas fa-ellipsis-v"></i>

   </button>

</nav>
<div class="collapse" id="navbarToggleExternalContent">
 <div class="bg1 p-4">
   <h5 class="text-white h4">Collapsed content</h5>
   <span class="text-white">Toggleable via the navbar brand.</span>
 </div>
</div>
</div>
