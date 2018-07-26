@extends('frontend.layouts.app')
@section('page_title') Noticias
@endsection
@section('page_banner')
@include('frontend.layouts.slices.banner')
@endsection
@section('content')
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
  <!-- Carta 1 -->
 <div class="row align-items-center justify-content-center  my-3">
  <div class="col-11 col-md-4 text-center img-noticia" style="background-image:url('{{asset('img/noticia2.jpg')}}');">

  </div>
  <div class="col-11 col-md-8 text-center">
   <div class="p-2">
    <h4 class="font1 color1 text-left mt-3">
      <span class="text-secondary">Jornada de exámenes</span>
    </h4>
    <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
   <a href="#" class="btn btn-link text-muted">Seguir leyendo</a>
   </div>
  </div>
 </div>
 <!-- Fin Carta 1 -->
 <!-- Carta 3 -->
 <div class="row align-items-center justify-content-center  my-3">
  <div class="col-11 col-md-4 text-center img-noticia" style="background-image:url('{{asset('img/noticia3.jpg')}}');">

  </div>
 <div class="col-11 col-md-8 text-center">
  <div class="p-2">
   <h4 class="font1 color1 text-left mt-3">
     <span class="text-secondary">Gastronomía veracruzana</span>
   </h4>
   <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
  <a href="#" class="btn btn-link text-muted">Seguir leyendo</a>
  </div>
 </div>
 </div>
 <!-- Fin Carta 3 -->
 <div class="row justify-content-center py-5">
  <div class="col-10 text-center">
   <a href="{{ route('front.noticias') }}" class="btn btn-outline-secondary px-5">VER TODAS LAS NOTICIAS</a>
  </div>
 </div>
 </div>
 </div>
@include('frontend.layouts.slices.subscribe')
@endsection
