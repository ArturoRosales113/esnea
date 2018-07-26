<div class="row justify-content-center">
 @foreach($planes as $p)
    <div class="col-md-5">

       <div class="card article container">
           <div class="card-header">
             <div class="row justify-content-between align-items-center d-flex">
               <h4 class="">{{ $p->title }}</h4>
             </div>
           </div>
           <div class="card-body">
            <div class="row justify-content-center">
             <div class="col-md-12">
               <div class="image" style="height:400px;">
                <img src="{{ url($p->front_pic) }}" alt="{{ $p->title }}">
               </div>
             </div>
            </div>
             {{--<p>{!! $p->content !!}</p>--}}
            {{--
            <div class="row justify-content-center">
             <div class="col-md-5">
               <p>Categorías:</p>
               <small>{{ $p->categories->pluck('name')->implode(', ') }}</small>
             </div>
             <div class="col-md-5">
               <p>Subcategorías:</p>
               <small>{{ $p->subcategories->pluck('name')->implode(', ') }}</small>
             {{ <p><a href="{{ url('/related/'.$p->categories) }}">Ver en sitio</a></p> }}
             </div>
            </div>
            --}}
           </div>
           <div class="card-footer">
            <div class="row justify-content-around align-items-center d-flex">
             <!-- ver en sitio -->
             <a class="btn btn-primary" href="{{-- url('/product/view/'.$p->slug) --}}"><i class="fas fa-globe"></i> Ver en sitio</a>
             <!-- ver en backend -->
             {{--<a class="btn btn-info" href="{{ route('planes.show',$p->id) }}"><i class="fa fa-search"></i></a>--}}
             <!-- editar -->
              <a class="btn btn-warning" href="{{ route('planes.edit',$p->id) }}"><i class="fa fa-edit"></i></a>
              <!-- borrar -->
              <form action="planes/{{ $p->id }}" method="POST" class="no-margin">
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
