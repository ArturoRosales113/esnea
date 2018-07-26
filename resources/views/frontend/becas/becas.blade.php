@extends('frontend.layouts.app')
@section('page_title') Becas
@endsection
@section('page_banner')
@include('frontend.layouts.slices.banner')
@endsection
@section('content')
<!-- Introduccion Costos -->
<div class="row justify-content-around align-items-center py-5 my-5" id="welcome">
 <div class="col-10 col-lg-5  order-1 order-lg-0">
  <h1 class="font1">
    <span class="color1">Sistema de Becas</span>
   </h1>
  <p class="text-justify">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia
   quisquam odio atque maiores corporis. Minima incidunt veritatis optio placeat nesciunt omnis asperiores illo beatae numquam sed doloribus sequi quo autem ex et delectus nam, nisi deserunt laborum fugit fuga?
  </p>
 </div>
 <div class="col-6 col-lg-3 text-center order-0 order-lg-1 mb-4 mb-lg-0">
  <div class="image">
   <img src="{{asset('img/becas1.jpg')}}" class="img-fluid" alt="">
  </div>
</div>
</div>
<!-- Fin Introduccion Costos -->

<!-- Beca Deportiva -->
<div class="row justify-content-around align-items-center py-5 my-5" id="welcome">
 <div class="col-10 col-lg-5  order-1">
  <h1 class="font1">
    <span class="color1">Beca Deportiva</span>
   </h1>
  <p class="text-justify">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia
   quisquam odio atque maiores corporis. Minima incidunt veritatis optio placeat nesciunt omnis asperiores illo beatae numquam sed doloribus sequi quo autem ex et delectus nam, nisi deserunt laborum fugit fuga?
  </p>
 </div>
 <div class="col-6 col-lg-3 text-center order-0 mb-4 mb-lg-0">
  <div class="image">
   <img src="{{asset('img/becas2.jpg')}}" class="img-fluid" alt="">
  </div>
</div>
</div>
<!-- Fin Beca Deportiva -->

<!-- Programa una cita -->
<div class="row justify-content-around align-items-center py-5 my-5" id="welcome">
 <div class="col-10 col-lg-5  order-1 order-lg-0">
  <h1 class="font1">
    <span class="color1">Programa una Cita</span>
   </h1>
  <p class="text-justify">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia
   quisquam odio atque maiores corporis. Minima incidunt veritatis optio placeat nesciunt omnis asperiores illo beatae numquam sed doloribus sequi quo autem ex et delectus nam, nisi deserunt laborum fugit fuga?
  </p>
 </div>
 <div class="col-6 col-lg-3 text-center order-0 order-lg-1 mb-4 mb-lg-0">
  <div class="image">
   <img src="{{asset('img/becas3.jpg')}}" class="img-fluid" alt="">
  </div>
</div>
</div>
<!-- Fin Programa una cita -->
@include('frontend.layouts.slices.info')
@include('frontend.layouts.slices.subscribe')
@endsection
