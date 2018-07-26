@extends('frontend.layouts.app')
@section('page_title')
Contacto
@endsection
@section('page_styles')
 <style>
  #map {
   height: 550px;
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
 <div class="row justify-content-center align-items-center bg1">
  <div class="col-12 p-0">
   <div id="map"></div>
  </div>
 </div>
@endsection
@section('content')
 <!-- Nuestra Historia -->
 <div class="row justify-content-around py-5" id=welcomeContacto>
  <div class="col-10 col-md-5 col-lg-6">
   <h3 class="font1 color1">Contáctanos</h3>
   <br>
   <p class="text-justify">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quidem distinctio saepe enim provident tenetur consectetur qui est repellat similique aut praesentium tempore ex id rerum porro sint hic illum dolorum, exercitationem assumenda aperiam placeat. Minima, obcaecati consequatur quam eum consectetur est, doloribus nihil aliquam porro cumque, fugit nostrum, similique.
   </p>
   <div class="row justify-content-start py-3">
    <div class="col-md-10 text-left">
     <span class="rem1"><i class="fa fa-phone color1"></i>&nbsp;(228)817-17-17</span>
     <br>
     <span class="rem1"><i class="fa fa-envelope color1"></i>&nbsp;contacto@esnea.com.mx</span><br>
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
 <!-- Fin Nuestra Historia -->
@endsection

@section('page_scripts')
 <!-- Ajax -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <!-- Mapa ESNEA -->
 <script src="{{ asset('js/esneamap.js') }}"></script>
 <!-- Google Maps -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeUYbUAo57Oi4JRj-ipXKkQxN8hN6K59g&libraries=places,geometry&callback=initMap" async defer></script>
@endsection
