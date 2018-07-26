<div class="panel-header panel-header-lg">

 <div class="header text-center">
  <h2 class="title">Planes de Estudio</h2>
  <div class="row justify-content-center align-items-center">
   <div class="col-md-4 mb-4 m-md-0">
    <p class="category">
     <a class="" href="{{ route('planes.create') }}"><i class="fa fa-plus"></i>  Agregar plan de estudios</a>
    </p>
   </div>
   <div class="col-10 col-md-4">
      <h6 class="text-left text-white">Buscar plan de estudio</h6>
    <form class="form-horizontal " method="POST" enctype="multipart/form-data" action="#{{-- route('planes.search') --}}">
     {{ csrf_field() }}
     <div class="input-group no-border">

      <input type="text" value="" class="form-control text-white" name="title" placeholder="Buscar" autocomplete="off">
      <div class="input-group-append">
       <div class="input-group-text text-white">
        <i class="fas fa-search"></i>
       </div>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
