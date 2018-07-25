@extends('frontend.layouts.app')
@section('page_title')
 Home
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
  @mediaonly screen and (max-width:768px) {
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
  @include('frontend.index.banner')
@endsection
@section('content')
 <!-- Texto Bienvendia -->
 @include('frontend.index.welcome')
 <!-- Testimonios -->
 @include('frontend.index.testimonios')
 <!-- Noticias -->
 @include('frontend.index.noticias')
 <!-- Contacto -->
 @include('frontend.index.contacto')
@endsection
@section('page_scripts')
 <!-- Ajax -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <!-- Mapa ESNEA -->
 <script src="{{ asset('js/esneamap.js') }}"></script>
 <!-- Google Maps -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeUYbUAo57Oi4JRj-ipXKkQxN8hN6K59g&libraries=places,geometry&callback=initMap" async defer></script>
@endsection
