@extends('frontend.layouts.app')
@section('page_title')
Nosotros
@endsection
@section('page_banner')
@include('frontend.layouts.slices.banner')
@endsection
@section('content')
 <!-- Nuestra Historia -->
 <div class="row justify-content-center align-items-center py-5 my-5">
  <div class="col-10 col-lg-5 text-center">
   <div class="image">
    <img src="{{asset('img/logo-esnea-color.png')}}" class="img-fluid" alt="">
   </div>
  </div>
  <!-- <div class="col-10 col-lg-5">
   <h1 class="font1">
    <span class="color1">Nuestra Historia</span>
   </h1>
   <p class="text-justify">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia quisquam odio atque maiores corporis. Minima incidunt veritatis optio placeat nesciunt omnis asperiores illo beatae numquam sed doloribus sequi quo autem ex et delectus nam, nisi deserunt laborum fugit fuga? Necessitatibus at mollitia maxime cumque ullam vitae deserunt distinctio cupiditate consectetur corporis error impedit deleniti sit ad, consequuntur magnam, quo quibusdam debitis veniam neque. Consequuntur, aliquid sapiente!
   </p>
  </div> -->
 </div>
 <!-- Fin Nuestra Historia -->
 <!-- Banner -->
 <!-- <div class="row align-items-center justify-content-end" style="height:100vh; background-image:url('{{asset('img/testimonio2.jpg')}}');background-size:cover;background-repeat:no-repeat;;">
  <div class="col-md-7">
   <span class="rem3 font1 text-white text-uppercase">
    “Grandes Líderes<br>
    Mejores personas”
   </span>
  </div>
 </div> -->
 <!-- Fin Banner -->
 <!-- Misión Visión -->
 <div class="row justify-content-center align-items-center py-5 my-5">
  <div class="col-10 col-lg-5 order-1 order-lg-0">
   <h1 class="font1">
    <span class="color2">Misión</span>
   </h1>
   <p class="text-justify">
    Formar profesionistas con un profundo respeto por el medio ambiente y la diversidad cultural, así como con aquellas actividades que conlleven a la sustentabilidad de estos rubros. Al mismo tiempo, sembrar en ellos una ideología empresarial que les permita ser capaces de entender la integración de los negocios administrados por si mismos o por terceros, lo cual deberá verse reflejado en beneficios sociales, culturales y eocnómicos de  los diversos actores involucrados en los proyectos.
   </p>
  </div>
  <div class="col-10 col-lg-5 text-center order-0 order-lg-1">
   <div class="image">
    <img src="{{asset('img/mision.png')}}" class="img-fluid" alt="">
   </div>
  </div>

 </div>
 <div class="row justify-content-center align-items-center py-5 my-5">
  <div class="col-10 col-lg-5 text-center">
   <div class="image">
    <img src="{{asset('img/vision.png')}}" class="img-fluid" alt="">
   </div>
  </div>
  <div class="col-10 col-lg-5">
   <h1 class="font1">
    <span class="color2">Visión</span>
   </h1>
   <p class="text-justify">
    Consolidarnos como la Universidad de Ecoturismo más importante del Estado de Veracruz, a partir de la permanente reflexión y actualización sobre los cambios cuyo tema central sea el ecoturismo así como los estudios ambientales, adecuándose a las necesidades emergentes, demandadas por la sociedad.<br><br>
    Asegurar una formación a partir de una ensñanza integral partiendo de un enfoque por competencias que fortalezca habilidades, conocimientos, actitudes y los valores de nuestros alumnos.<br><br>
    Propocionar al alumnos una formación humanística-sociocultural, lógico-matemática apoyada en la ciencia, la tecnología y los estudios ambientales que contibuya a su mejor inserción en el mercado Laboral.

   </p>
  </div>
 </div>

 <!-- Fin Misión visión -->
@endsection
