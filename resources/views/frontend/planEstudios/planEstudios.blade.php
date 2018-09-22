@extends('frontend.layouts.app')
@section('page_title') Planes de estudio
@endsection
@section('page_banner')
@include('frontend.layouts.slices.banner')
@endsection
@section('content')
<!-- Introduccion planes -->
<div class="row justify-content-center align-items-center py-5 my-5" id="welcome">
 <div class="col-10 col-lg-5">
  <h1 class="font1">
    <span class="color1">Carreras y cursos para ciclo 2018</span>
   </h1>
  <p class="text-justify">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi aspernatur reprehenderit suscipit eius tempora, mollitia facilis impedit velit nesciunt eligendi, beatae possimus voluptate autem provident. Odit officiis impedit quo culpa sunt quia
   quisquam odio atque maiores corporis. Minima incidunt veritatis optio placeat nesciunt omnis asperiores illo beatae numquam sed doloribus sequi quo autem ex et delectus nam, nisi deserunt laborum fugit fuga? Necessitatibus at mollitia maxime cumque
   ullam vitae deserunt distinctio cupiditate consectetur corporis error impedit deleniti sit ad, consequuntur magnam, quo quibusdam debitis veniam neque. Consequuntur, aliquid sapiente!
  </p>
 </div>
 <div class="col-10 col-lg-5 text-center">
  <div class="image align-items-end">
   <img src="{{asset('img/planes1.jpg')}}" class="img-fluid" alt="">
  </div>
  <p class="bg2 p-4 text-white text-justify">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat esse animi totam officia odit ea optio explicabo fugit eaque quibusdam in et sint facere commodi, nostrum? Voluptate cumque consectetur saepe suscipit quisquam optio accusamus non maxime
   molestias beatae, est repellat, laboriosam iste, iusto sunt. Tenetur quae veniam incidunt earum expedita.
  </p>
 </div>
</div>
<!-- Fin Introduccion planes -->
<!-- Planes -->
<div class="row justify-content-center align-items-center py-3">
 <div class="col-lg-10">
  <div class="row">
   <!-- Carta 1 -->
   <div class="col-lg-4 my-3 my-lg-0">
    <div class="row align-items-center justify-content-center">
     <div class="col-10 col-md-5 col-lg-12 text-center">
      <div class="image">
       <img class="img-fluid" src="{{asset('img/carrera1.jpg')}}" alt="Card image cap">
      </div>
     </div>
     <div class="col-9 col-md-5 col-lg-12 text-center">
      <div class="p-2">
       <h4 class="font1 color1 text-left mt-3">
       <span class="color1">Programas</span> <br>
       <small class="text-secondary font2">Formamos profesionales</small>
      </h4>
       <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
       <a href="#" class="btn btn-outline-secondary">Ver Programa completo</a>
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
       <img class="img-fluid" src="{{asset('img/carrera2.jpg')}}" alt="Card image cap">
      </div>
     </div>
     <div class="col-9 col-md-5 col-lg-12 text-center">
      <div class="p-2">
       <h4 class="font1 color1 text-left mt-3">
      <span class="color1">Inscripciones</span> <br>
      <small class="text-secondary font2">Formamos profesionales</small>
     </h4>
       <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
       <a href="#" class="btn btn-outline-secondary">Ver Programa completo</a>
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
       <img class="img-fluid" src="{{asset('img/carrera3.jpg')}}" alt="Card image cap">
      </div>
     </div>
     <div class="col-9 col-md-5 col-lg-12 text-center">
      <div class="p-2">
       <h4 class="font1 color1 text-left mt-3">
     <span class="color1">Becas</span> <br>
     <small class="text-secondary font2">Formamos profesionales</small>
    </h4>
       <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
       <a href="#" class="btn btn-outline-secondary">Ver Programa completo</a>
      </div>
     </div>
    </div>
   </div>
   <!-- Fin Carta 3 -->
  </div>
 </div>
</div>
<div class="row justify-content-center align-items-center py-3">
 <div class="col-lg-10">
  <div class="row">
   <!-- Carta 1 -->
   <div class="col-lg-4 my-3 my-lg-0">
    <div class="row align-items-center justify-content-center">
     <div class="col-10 col-md-5 col-lg-12 text-center">
      <div class="image">
       <img class="img-fluid" src="{{asset('img/carrera4.jpg')}}" alt="Card image cap">
      </div>
     </div>
     <div class="col-9 col-md-5 col-lg-12 text-center">
      <div class="p-2">
       <h4 class="font1 color1 text-left mt-3">
       <span class="color1">Programas</span> <br>
       <small class="text-secondary font2">Formamos profesionales</small>
      </h4>
       <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
       <a href="#" class="btn btn-outline-secondary">Ver Programa completo</a>
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
       <img class="img-fluid" src="{{asset('img/carrera5.jpg')}}" alt="Card image cap">
      </div>
     </div>
     <div class="col-9 col-md-5 col-lg-12 text-center">
      <div class="p-2">
       <h4 class="font1 color1 text-left mt-3">
      <span class="color1">Inscripciones</span> <br>
      <small class="text-secondary font2">Formamos profesionales</small>
     </h4>
       <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
       <a href="#" class="btn btn-outline-secondary">Ver Programa completo</a>
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
       <img class="img-fluid" src="{{asset('img/carrera6.jpg')}}" alt="Card image cap">
      </div>
     </div>
     <div class="col-9 col-md-5 col-lg-12 text-center">
      <div class="p-2">
       <h4 class="font1 color1 text-left mt-3">
     <span class="color1">Becas</span> <br>
     <small class="text-secondary font2">Formamos profesionales</small>
    </h4>
       <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
       <a href="#" class="btn btn-outline-secondary">Ver Programa completo</a>
      </div>
     </div>
    </div>
   </div>
   <!-- Fin Carta 3 -->
  </div>
 </div>
</div>
<!-- Fin Planes -->
<!-- Banner Capacitacion -->
<div class="row align-items-center justify-content-center" style="height:100vh; background-image:url('{{asset('img/capacitacion.jpg')}}');background-size:cover;background-repeat:no-repeat;;">
 <div class="col-md-4">
  <div class="image">
   <img src="{{ asset('img/logo-esnea-bn.png') }}" class="img-fluid" alt="">
  </div>
 </div>
 <div class="col-md-5">
  <span class="rem2 font1 text-white text-uppercase">
   Continua capacitación
  </span>
  <p class="text-white text-justify">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate error id, quibusdam nesciunt ad veniam sed eius dolor similique in deleniti quaerat non eveniet recusandae, dolore alias culpa voluptatum distinctio. Nulla porro aspernatur dicta sunt laboriosam dolor, reiciendis totam doloribus commodi quod dolorem error quisquam odit velit, fugit magnam. Obcaecati doloremque quod veritatis neque voluptatem iusto ad repellat dignissimos unde suscipit ipsa sint possimus iure fugiat, commodi quae harum at dicta dolor, natus, ducimus itaque. Expedita qui sit fuga, culpa quia, soluta dolores cupiditate corporis. Enim harum consequuntur odit porro voluptatibus consequatur incidunt, est ad tenetur quia ipsa labore dolorum necessitatibus autem, debitis odio, maxime. Aliquam expedita, in et. Possimus maxime, illo. Ipsa delectus perferendis suscipit velit cumque dolores ut.
  </p>
 </div>
</div>
<!-- Fin Banner Capacitación -->
@endsection
