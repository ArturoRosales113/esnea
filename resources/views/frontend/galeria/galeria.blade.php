@extends('frontend.layouts.app')
@section('page_title') Galería
@endsection
@section('page_banner')
@include('frontend.layouts.slices.banner')
@endsection
@section('content')
<!-- Introduccion Costos -->
<div class="row justify-content-around align-items-center py-5 my-5" id="welcome">
<div class="col-10">

 <div class="row py-4">
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria1.jpg')}}" alt="">
   </div>
  </div>
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria2.jpg')}}" alt="">
   </div>
  </div>
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria3.jpg')}}" alt="">
   </div>
  </div>
 </div>

 <div class="row py-4">
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria4.jpg')}}" alt="">
   </div>
  </div>
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria5.jpg')}}" alt="">
   </div>
  </div>
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria6.jpg')}}" alt="">
   </div>
  </div>
 </div>

 <div class="row py-4">
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria1.jpg')}}" alt="">
   </div>
  </div>
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria2.jpg')}}" alt="">
   </div>
  </div>
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria3.jpg')}}" alt="">
   </div>
  </div>
 </div>

 <div class="row py-4">
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria4.jpg')}}" alt="">
   </div>
  </div>
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria5.jpg')}}" alt="">
   </div>
  </div>
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria6.jpg')}}" alt="">
   </div>
  </div>
 </div>

 <div class="row py-4">
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria1.jpg')}}" alt="">
   </div>
  </div>
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria2.jpg')}}" alt="">
   </div>
  </div>
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria3.jpg')}}" alt="">
   </div>
  </div>
 </div>

 <div class="row py-4">
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria4.jpg')}}" alt="">
   </div>
  </div>
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria5.jpg')}}" alt="">
   </div>
  </div>
  <div class="col-4">
   <div class="image">
    <img src="{{asset('img/galeria6.jpg')}}" alt="">
   </div>
  </div>
 </div>


 </div>
</div>
</div>
<!-- Fin Introduccion Costos -->
@include('frontend.layouts.slices.info')
@include('frontend.layouts.slices.subscribe')
@endsection
