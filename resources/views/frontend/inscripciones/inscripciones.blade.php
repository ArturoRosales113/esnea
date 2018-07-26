@extends('frontend.layouts.app')
@section('page_title') Costos e Inscripciones
@endsection
@section('page_banner')
@include('frontend.layouts.slices.banner')
@endsection
@section('content')
<!-- Introduccion Costos -->
<div class="row justify-content-around align-items-center py-5 my-5" id="welcome">
 <div class="col-10 col-lg-5  order-1 order-lg-0">
  <h1 class="font1">
    <span class="color1">La mejor inversión de tu vida</span>
   </h1>
  <p class="text-justify">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia
   quisquam odio atque maiores corporis. Minima incidunt veritatis optio placeat nesciunt omnis asperiores illo beatae numquam sed doloribus sequi quo autem ex et delectus nam, nisi deserunt laborum fugit fuga? Necessitatibus at mollitia maxime cumque
   ullam vitae deserunt distinctio cupiditate consectetur corporis error impedit deleniti sit ad, consequuntur magnam, quo quibusdam debitis veniam neque. Consequuntur, aliquid sapiente!
  </p>
 </div>
 <div class="col-6 col-lg-3 text-center order-0 order-lg-1 mb-4 mb-lg-0">
  <div class="image">
   <img src="{{asset('img/costos1.jpg')}}" class="img-fluid" alt="">
  </div>
</div>
</div>
<!-- Fin Introduccion Costos -->
<!-- Costos Licenciaturas -->
<div class="row justify-content-around align-items-center py-5 my-5" id="welcome">
 <div class="col-10 col-lg-5">
  <h2 class="font1">
    <span class="color1">Costos Licenciaturas</span>
   </h2>
   <h3 class="color2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
  <p class="text-justify">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia
   quisquam odio atque maiores corporis. Minima incidunt veritatis optio placeat nesciunt omnis asperiores illo beatae numquam sed doloribus sequi quo autem ex et delectus nam, nisi deserunt laborum fugit fuga? Necessitatibus at mollitia maxime cumque
   ullam vitae deserunt distinctio cupiditate consectetur corporis error impedit deleniti sit ad, consequuntur magnam, quo quibusdam debitis veniam neque. Consequuntur, aliquid sapiente!
  </p>
 </div>
 <div class="col-10 col-lg-5 text-center">
  <div class="row bg1 p-5 text-white rounded my-3 justify-content-center">
   <div class="col-12 col-md-5 text-center">
     <span class="rem2 font1">$4,500.00</span><br>
     <span>Inscripción semestral</span>
   </div>
   <div class="col-12 col-md-5 text-center">
     <span class="rem2 font1">$2,950.00</span><br>
     <span>Colegiatura a 5 meses</span>
   </div>
  </div>
  <a href="{{route('front.becas')}}" class="btn btn-outline-secondary">Conoce nuestro plan de becas</a>
 </div>
</div>
<!-- Fin Costos Licenciaturas -->
<!-- Costos Licenciaturas -->
<div class="row justify-content-around align-items-center py-5 my-5" id="welcome">
 <div class="col-10 col-lg-5">
  <h2 class="font1">
    <span class="color1">Costos Diplomado</span>
   </h2>
   <h3 class="color2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
  <p class="text-justify">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia
   quisquam odio atque maiores corporis. Minima incidunt veritatis optio placeat nesciunt omnis asperiores illo beatae numquam sed doloribus sequi quo autem ex et delectus nam, nisi deserunt laborum fugit fuga? Necessitatibus at mollitia maxime cumque
   ullam vitae deserunt distinctio cupiditate consectetur corporis error impedit deleniti sit ad, consequuntur magnam, quo quibusdam debitis veniam neque. Consequuntur, aliquid sapiente!
  </p>
 </div>
 <div class="col-10 col-lg-5 text-center">
  <div class="row bg1 p-5 text-white rounded my-3 justify-content-center">
   <div class="col-12 col-md-5 text-center">
     <span class="rem2 font1">$4,500.00</span><br>
     <span>Inscripción semestral</span>
   </div>
   <div class="col-12 col-md-5 text-center">
     <span class="rem2 font1">$2,950.00</span><br>
     <span>Colegiatura a 5 meses</span>
   </div>
  </div>
  <a href="{{route('front.becas')}}" class="btn btn-outline-secondary">Conoce nuestro plan de becas</a>
 </div>
</div>
</div>
<!-- Fin Costos Licenciaturas -->
@endsection
