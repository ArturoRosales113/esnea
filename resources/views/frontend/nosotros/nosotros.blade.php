@extends('frontend.layouts.app')
@section('page_title')
Nosotros
@endsection
@section('page_banner')
@include('frontend.layouts.slices.banner')
@endsection
@section('content')
 <!-- Nuestra Historia -->
 <div class="row justify-content-center align-items-center py-5 my-5" id="welcome">
  <div class="col-10 col-lg-5 text-center">
   <div class="image">
    <img src="{{asset('img/logo-esnea-color.png')}}" class="img-fluid" alt="">
   </div>
  </div>
  <div class="col-10 col-lg-5">
   <h1 class="font1">
    <span class="color1">Nuestra Historia</span>
   </h1>
   <p class="text-justify">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia quisquam odio atque maiores corporis. Minima incidunt veritatis optio placeat nesciunt omnis asperiores illo beatae numquam sed doloribus sequi quo autem ex et delectus nam, nisi deserunt laborum fugit fuga? Necessitatibus at mollitia maxime cumque ullam vitae deserunt distinctio cupiditate consectetur corporis error impedit deleniti sit ad, consequuntur magnam, quo quibusdam debitis veniam neque. Consequuntur, aliquid sapiente!
   </p>
  </div>
 </div>
 <!-- Fin Nuestra Historia -->
 <!-- Banner -->
 <div class="row align-items-center justify-content-end" style="height:100vh; background-image:url('{{asset('img/testimonio2.jpg')}}');background-size:cover;background-repeat:no-repeat;;">
  <div class="col-md-7">
   <span class="rem3 font1 text-white text-uppercase">
    “Grandes Líderes<br>
    Mejores personas”
   </span>
  </div>
 </div>
 <!-- Fin Banner -->
 <!-- Misión Visión -->
 <div class="row justify-content-center align-items-center py-5 my-5">
  <div class="col-10 col-lg-5 order-1 order-lg-0">
   <h1 class="font1">
    <span class="color2">Misión</span>
   </h1>
   <p class="text-justify">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia quisquam odio atque maiores corporis. Minima incidunt veritatis optio placeat nesciunt omnis asperiores illo beatae numquam sed doloribus sequi quo autem ex et delectus nam, nisi deserunt laborum fugit fuga? Necessitatibus at mollitia maxime cumque ullam vitae deserunt distinctio cupiditate consectetur corporis error impedit deleniti sit ad, consequuntur magnam, quo quibusdam debitis veniam neque. Consequuntur, aliquid sapiente!
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
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia quisquam odio atque maiores corporis. Minima incidunt veritatis optio placeat nesciunt omnis asperiores illo beatae numquam sed doloribus sequi quo autem ex et delectus nam, nisi deserunt laborum fugit fuga? Necessitatibus at mollitia maxime cumque ullam vitae deserunt distinctio cupiditate consectetur corporis error impedit deleniti sit ad, consequuntur magnam, quo quibusdam debitis veniam neque. Consequuntur, aliquid sapiente!
   </p>
  </div>
 </div>

 <!-- Fin Misión visión -->
@endsection
