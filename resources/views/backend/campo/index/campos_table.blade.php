<div class="row justify-content-center">
 @foreach($campos as $c)
    <div class="col-md-5">

       <div class="card article container">
           <div class="card-header">
             <div class="row justify-content-between align-items-center d-flex">
               <h4 class="">{{ $c->title }}</h4>
             </div>
           </div>
           <div class="card-body">
            <div class="row justify-content-center">
             <div class="col-md-12">
               <div class="image" style="height:400px;">
                <img src="{{ url($c->pic) }}" alt="{{ $c->title }}">
               </div>
             </div>
            </div>
            <div class="row justify-content-center">
             <div class="col-md-12">
               <div class="description">
                <p>{{ $c->description}}</p>
               </div>
             </div>
            </div>
            <div class="row justify-content-center">
             <div class="col-md-12">
               <div class="description">
                <p>{!! $c->body !!}</p>
               </div>
             </div>
            </div>
           </div>
           <div class="card-footer">
            <div class="row justify-content-around align-items-center d-flex">
             <!-- ver en sitio -->
             <a class="btn btn-primary" href="{{-- url('/campos/view/'.$c->slug) --}}"><i class="fas fa-globe"></i> Ver en sitio</a>
             <!-- ver en backend -->
             {{--<a class="btn btn-info" href="{{ route('articles.show',$c->id) }}"><i class="fa fa-search"></i></a> --}}
             <!-- editar -->
              <a class="btn btn-warning" href="{{ route('campos.edit',$c->id) }}"><i class="fa fa-edit"></i></a>
              <!-- borrar -->
              <form action="admin/campos/{{ $c->id }}" method="POST" class="no-margin">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE" />
              <button class="btn btn-danger" type="submit"><i class="fa fa-trash" /></i></button>
              </form>
            </div>
           </div>
       </div>
    </div>
    @endforeach
</div>
