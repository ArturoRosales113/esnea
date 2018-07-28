<div class="row justify-content-center">
 <div class="col-md-8">
  <div class="panel panel-default card">
   <div class="panel-body card-body pt-5">
    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('campos.store') }}">
     {{ csrf_field() }}

     {{-- TITLE --}}
     <div class="form-group row justify-content-center">
      <label for="title" class="col-md-10 text-left control-label">Título</label>
      @if ($errors->has('title'))
      <span class="help-block">
          <small class="text-danger">{{ $errors->first('title') }}</small>
      </span>
      @endif
      <div class="col-md-10">
       <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
      </div>
     </div>

     {{-- DESCRIPTION --}}
     <div class="form-group row justify-content-center">
      <label for="description" class="col-md-10 text-left control-label">Descripción</label>
      @if ($errors->has('description'))
      <span class="help-block">
          <small class="text-danger">{{ $errors->first('description') }}</small>
      </span>
      @endif
      <div class="col-md-10">
       <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>
      </div>
     </div>

     {{-- BODY --}}
     <div class="form-group row justify-content-center">
      <label for="body" class="col-md-10 text-left  control-label">Contenido: </label>
      @if ($errors->has('body'))
      <span class="help-block">
          <small class="text-danger">{{ $errors->first('body') }}</small>
      </span>
      @endif
      <div class="col-md-10">
       <textarea id="body" type="text" class="form-control ckeditor" name="body" value="{{ old('body') }}">{{ old('body') }}</textarea>
      </div>
     </div>

     <div class="form-group-file py-4 row justify-content-center">
      <label for="pic" class="col-md-10 text-left control-label">Imagen:</label>
      @if ($errors->has('pic'))
      <span class="help-block">
          <small class="text-danger">{{ $errors->first('pic') }}</small>
      </span>
      @endif
      <input id="image" name="pic" type="file" class="file" placeholder="Subir Archivos"/>
     </div>

     <div class="form-group row justify-content-center">
      <div class="col-md-8 text-center">
       <button type="submit" class="btn btn-info">
            Guardar Campo Laboral
        </button>
      </div>
     </div>

    </form>
   </div>
  </div>
 </div>
</div>
