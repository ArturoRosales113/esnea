@extends('frontend.layouts.app')
@section('page_title') Campo Laboral
@endsection
@section('page_banner')
@include('frontend.layouts.slices.banner')
@endsection
@section('content')
 <!-- Introduccion Campo Laboral -->
 <div class="row justify-content-around align-items-center py-5 my-5" id="welcome">
  <div class="col-10 col-lg-5  order-1 order-lg-0">
   <h1 class="font1">
     <span class="color1">Un futuro asegurado</span>
    </h1>
   <p class="text-justify">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia
    quisquam odio atque maiores corporis. Minima incidunt veritatis optio placeat nesciunt omnis asperiores illo beatae numquam sed doloribus sequi quo autem ex et delectus nam, nisi deserunt laborum fugit fuga? Necessitatibus at mollitia maxime cumque
    ullam vitae deserunt distinctio cupiditate consectetur corporis error impedit deleniti sit ad, consequuntur magnam, quo quibusdam debitis veniam neque. Consequuntur, aliquid sapiente!
   </p>
  </div>
  <div class="col-6 col-lg-3 text-center order-0 order-lg-1 mb-4 mb-lg-0">
   <div class="image">
    <img src="{{asset('img/campo1.jpg')}}" class="img-fluid" alt="">
   </div>
 </div>
 </div>
 <!-- Fin Introduccion Campo Laboral -->
 <!-- Administrador de hoteles -->
 <div class="row justify-content-around align-items-center mb-4 mb-lg-0">
  <div class="col-8 col-lg-6 text-center imagen-campo mb-4 m-lg-0" style="background-image:url('{{asset('img/campo2.jpg')}}');">

  </div>
  <div class="col-8 col-lg-6 order-1 order-lg-0">
    <div class="row justify-content-center">
     <div class="col-md-10">
      <h2 class="font1">
        <span class="color1">Administrador de hoteles</span>
       </h2>
       <h3 class="color2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, illo.</h3>
      <p class="text-justify">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia
       quisquam odio atque maiores corporis.
      </p>
     </div>
    </div>
   </div>
 </div>
 <!-- Fin administrador de hoteles -->
 <!-- Sservidor Público -->
 <div class="row justify-content-around align-items-center">
  <div class="col-8 col-lg-6 order-1 order-lg-0">
   <div class="row justify-content-center">
    <div class="col-md-10">
     <h2 class="font1">
       <span class="color1">Servidor Público</span>
      </h2>
      <h3 class="color2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, illo.</h3>
     <p class="text-justify">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia
      quisquam odio atque maiores corporis.
     </p>
    </div>
   </div>
  </div>
  <div class="col-8 col-lg-6 text-center imagen-campo mb-4 m-lg-0" style="background-image:url('{{asset('img/campo2.jpg')}}');">
 </div>
 </div>
 <!-- Fin Servidor Público -->
 <!-- Administrador de hoteles -->
 <div class="row justify-content-around align-items-center mb-4 mb-lg-0">
  <div class="col-8 col-lg-6 text-center imagen-campo mb-4 m-lg-0" style="background-image:url('{{asset('img/campo2.jpg')}}');">

  </div>
  <div class="col-8 col-lg-6 order-1 order-lg-0">
    <div class="row justify-content-center">
     <div class="col-md-10">
      <h2 class="font1">
        <span class="color1">Administrador de hoteles</span>
       </h2>
       <h3 class="color2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, illo.</h3>
      <p class="text-justify">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia
       quisquam odio atque maiores corporis.
      </p>
     </div>
    </div>
   </div>
 </div>
 <!-- Fin administrador de hoteles -->
 <!-- Sservidor Público -->
 <div class="row justify-content-around align-items-center">
  <div class="col-8 col-lg-6 order-1 order-lg-0">
   <div class="row justify-content-center">
    <div class="col-md-10">
     <h2 class="font1">
       <span class="color1">Servidor Público</span>
      </h2>
      <h3 class="color2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, illo.</h3>
     <p class="text-justify">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia
      quisquam odio atque maiores corporis.
     </p>
    </div>
   </div>
  </div>
  <div class="col-8 col-lg-6 text-center imagen-campo mb-4 m-lg-0" style="background-image:url('{{asset('img/campo2.jpg')}}');">
 </div>
 </div>
 <!-- Fin Servidor Público -->

@endsection
