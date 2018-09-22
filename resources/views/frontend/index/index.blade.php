@extends('frontend.layouts.app')
@section('page_title') Home
@endsection
@section('page_styles')
<style>
 #map {
  height: 400px;
  width: 100%;
 }

 #pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 300px;
 }

 #pac-input:focus {
  border-color: #4d90fe;
 }

 .pac-container {
  font-family: Roboto;
 }

 @mediaonlyscreenand (max-width:768px) {
  #pac-input {
   width: calc(50%);
  }
  .controls {
   display: block;
  }
 }
</style>
@endsection
@section('page_banner')
@include('frontend.layouts.slices.banner')
@endsection
@section('content')
<!-- Texto Bienvendia -->
<div class="row justify-content-center align-items-center py-5 my-5" id="welcome">
 <div class="col-10 col-lg-5 text-center">
  <div class="image">
   <img src="{{asset('img/logo-esnea-color.png')}}" class="img-fluid" alt="">
  </div>
 </div>
 <div class="col-10 col-lg-5">
  <h1 class="font1">
    <small class="text-secondary">Bienvenidos</small><br>
    <span class="color1">ESCUELA SUPERIOR DE NEGOCIOS ECOTURÍSTICOS</span>
   </h1>
  <p class="text-justify">
   La formación de Negocios en Ecoturismo más completa, ¡al alcance de todos!Transformamos soñadores en emprendedores nosotros te damos las herramientas.
  </p>
  <a href="{{ route('front.nosotros') }}" class="btn btn-outline-secondary">Sobre Nosotros</a>
 </div>
</div>
<!-- Fin bienvenida -->

<div class="row justify-content-center align-items-center">
 <div class="col-lg-10">
  <div class="row">
   <!-- Carta 1 -->
   <div class="col-lg-4 my-3 my-lg-0">
    <div class="row align-items-center justify-content-center">
     <div class="col-10 col-md-5 col-lg-12 text-center">
      <div class="image">
       <img class="img-fluid" src="{{asset('img/foto1.jpg')}}" alt="Card image cap">
      </div>
     </div>
     <div class="col-9 col-md-5 col-lg-12 text-center">
      <div class="p-2">
       <h4 class="font1 color1 text-left mt-3">
        <span class="color1">Programas</span> <br>
        <small class="text-secondary font2">!Prepárate para tu futuro!</small>
       </h4>
       <p class="card-text text-justify">Aprovecha los diplomas curriculares que incluye la licenciatura de Administración de Negocios en Ecoturismo.</p>
       <a href="{{route('front.plan_de_estudios')}}" class="btn btn-outline-secondary">Saber Más</a>
      </div>
     </div>
    </div>
   </div>
   <!-- Fin Carta 1 -->

   <!-- Carta 2 -->
   <div class="col-lg-4 my-3 my-lg-0">
    <div class="row align-items-center justify-content-center">
     <div class="col-10 col-md-5 col-lg-12 text-center">
      <div class="image">
       <img class="img-fluid" src="{{asset('img/foto2.jpg')}}" alt="Card image cap">
      </div>
     </div>
     <div class="col-9 col-md-5 col-lg-12 text-center">
      <div class="p-2">
       <h4 class="font1 color1 text-left mt-3">
       <span class="color1">Inscripciones</span> <br>
       <small class="text-secondary font2">Formamos profesionales</small>
      </h4>
       <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
       <a href="#" class="btn btn-outline-secondary">Saber Más</a>
      </div>
     </div>
    </div>
   </div>
   <!-- Fin Carta 2 -->

   <!-- Carta 3 -->
   <div class="col-lg-4 my-3 my-lg-0">
    <div class="row align-items-center justify-content-center">
     <div class="col-10 col-md-5 col-lg-12 text-center">
      <div class="image">
       <img class="img-fluid" src="{{asset('img/foto3.jpg')}}" alt="Card image cap">
      </div>
     </div>
     <div class="col-9 col-md-5 col-lg-12 text-center">
      <div class="p-2">
       <h4 class="font1 color1 text-left mt-3">
      <span class="color1">Becas</span> <br>
      <small class="text-secondary font2">Formamos profesionales</small>
     </h4>
       <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
       <a href="#" class="btn btn-outline-secondary">Saber Más</a>
      </div>
     </div>
    </div>
   </div>
   <!-- Fin Carta 3 -->
  </div>
 </div>
</div>

<!-- /Texto Bienvendia -->

<!-- Testimonios -->
<div class="row py-5 bg2 mt-5 align-items-center" style="min-height:25vh;">
 <div class="col-lg-6 text-center">
  <h2 class="font1">
   <small class="text-white">Ciclo 2018-2019</small><br>
   <span class="color1">Incio de clases</span>
  </h2>
 </div>
 <div class="col-lg-6 text-center text-white">
  <p>Infórmate a tiempo y descarga la convocatorioa para el nuevo ciclo escolar</p>
  <a href="#" class="btn btn-outline-light">Descargar PDF</a>
 </div>
</div>
<!-- <div class="row align-items-center justify-content-end" style="height:100vh; background-image:url('{{asset('img/testimonio.jpg')}}');background-size:cover;background-repeat:no-repeat;;">
 <div class="col-md-7">
  <span class="rem3 font1 text-white text-uppercase">
   “APRENDÍ A UTILIZAR LOS RECURSOS <br>
PARA BENEFICIO DE LA COMUNIDAD”
  </span>
  <br>
  <span class="font1 text-white rem2">Alexis Jímenes</span>
  <br>
  <small class="text-white">Egresada 2015 de la carrera de Ecoturismo <br> y Administradora del Eco-Hotel "La Ruta"</small>
 </div>
</div> -->

<!-- Testimonios -->

<!-- Noticias -->
<div class="row justify-content-center ">
 <div class="col-md-10">
  <div class="py-5">
   <h2 class="font1 text-uppercase">
   <span class="text-secondary">últimas</span>
   <span class="color1">Noticias</span>
  </h2>
  </div>
 </div>
</div>
<div class="row justify-content-center">
 <div class="col-11 col-lg-8 my-3 my-lg-0 order-1 order-lg-0">
  @foreach ($articles as $ar)
   <!-- Carta 1 -->
   <div class="row align-items-center justify-content-center my-3">
    <div class="col-11 col-md-4 text-center img-noticia" style="background-image:url('{{asset('img/noticia1.jpg')}}');">
    </div>
    <div class="col-11 col-md-8 text-center">
     <div class="p-2">
      <h4 class="font1 color1 text-left mt-3">
      <span class="text-secondary">La fotografía de paisajes</span>
     </h4>
      <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <a href="#" class="btn btn-link text-muted">Seguir leyendo</a>
     </div>
    </div>
   </div>
   <!-- Fin Carta 1 -->
  @endforeach
 </div>
</div>
@include('frontend.layouts.slices.subscribe')

<!-- Noticias -->

<!-- Contacto -->
<div class="row justify-content-around py-5" id=welcomeContacto>
 <div class="col-10 col-md-5 col-lg-6">
  <h3 class="font1 color1">Contáctanos</h3>
  <br>
  <p class="text-justify">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quidem distinctio saepe enim provident tenetur consectetur qui est repellat similique aut praesentium tempore ex id rerum porro sint hic illum dolorum, exercitationem assumenda aperiam placeat. Minima, obcaecati consequatur quam eum consectetur est, doloribus nihil aliquam porro cumque, fugit nostrum, similique.
  </p>
  <div class="row justify-content-start py-3">
   <div class="col-md-10 text-left">


    <a href="tel:2288526954" class="rem1 text-secondary"><i class="fab fa-whatsapp color1"></i>&nbsp;22-88-52-69-54</i></a>
    <br>
    <a href="mailto:contacto@esnea.com.mx" class="rem1 text-secondary"><i class="fa fa-envelope color1">&nbsp;contacto@esnea.com.mx</i></a><br>
    <hr>
    <h6 class="font1 color1">Síguenos</h6>
    <a href="#" class="text-secondary"><i class="color1 fab fa-facebook"></i> facebook/esnea</a><br>

    <a href="#" class="text-secondary"><i class="color1 fab fa-twitter-square"></i>&nbsp;@ESNEA</a><br>

    <a href="#" class="text-secondary"><i class="color1 fab fa-instagram"></i>&nbsp;@ESNEA</a><br>

    <a href="#" class="text-secondary"><i class="color1 fab fa-youtube-square"></i>&nbsp;youtube.com/profile/esnea</a><br>

   </div>
  </div>

 </div>
 <div class="col-10 col-md-5 col-lg-4 d-flex align-items-center">
   @include('frontend.layouts.slices.contacto')
 </div>
</div>
<div class="row justify-content-center align-items-center bg1">
 <div class="col-12 col-md-5 col-lg-4 text-white">
  <div class="row justify-content-center py-5">
   <div class="col-10 col-lg-6">
    <h4 class="font1">ESNEA</h4>
    <span>Calle Libertad #24</span> <br>
    <span> Col. Campo viejo,CP 91540</span><br>
    <span>Coatepec,Veracruz.</span>
   </div>
  </div>
 </div>
 <div class="col-12 col-md-5 col-lg-8 p-0">
  <div id="map"></div>
 </div>
</div>

<!-- Contacto -->

@endsection
@section('page_scripts')
<!-- Ajax -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Mapa ESNEA -->
<script src="{{ asset('js/esneamap.js') }}"></script>
<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeUYbUAo57Oi4JRj-ipXKkQxN8hN6K59g&libraries=places,geometry&callback=initMap" async defer></script>
@endsection
