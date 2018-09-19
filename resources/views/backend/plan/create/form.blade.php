<div class="row justify-content-center">
 <div class="col-md-8">
  <div class="panel panel-default card">
   <div class="panel-body card-body pt-5">
    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('planes.store') }}">
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

     {{-- SUBTITLE --}}
     <div class="form-group row justify-content-center">
      <label for="subtitle" class="col-md-10 text-left control-label">Subtítulo</label>
      @if ($errors->has('subtitle'))
      <span class="help-block">
          <small class="text-danger">{{ $errors->first('subtitle') }}</small>
      </span>
      @endif
      <div class="col-md-10">
       <input id="subtitle" type="text" class="form-control" name="subtitle" value="{{ old('subtitle') }}" required>
      </div>
     </div>

     {{-- BODY --}}
     <div class="form-group row justify-content-center">
      <label for="body" class="col-md-10 text-left  control-label">Contenido</label>
      @if ($errors->has('body'))
      <span class="help-block">
          <small class="text-danger">{{ $errors->first('body') }}</small>
      </span>
      @endif
      <div class="col-md-10">
       <textarea id="body" type="text" class="form-control ckeditor" name="body">{{ old('body') }}</textarea>
      </div>
     </div>

     {{-- FRONT PICTURE --}}
     <div class="form-group-file py-4 row justify-content-center">
      <label for="front_pic" class="col-md-10 text-left control-label">Imagen de portada:</label>
      @if ($errors->has('front_pic'))
      <span class="help-block">
          <small class="text-danger">{{ $errors->first('front_pic') }}</small>
      </span>
      @endif
      <input id="front_pic" name="front_pic" type="file" class="file" placeholder="Subir imagen de portada"/>
     </div>

     {{-- BANNER PICTURE --}}
     <div class="form-group-file py-4 row justify-content-center">
      <label for="banner_pic" class="col-md-10 text-left control-label">Imagen de banner:</label>
      @if ($errors->has('banner_pic'))
      <span class="help-block">
          <small class="text-danger">{{ $errors->first('banner_pic') }}</small>
      </span>
      @endif
      <input id="banner_pic" name="banner_pic" type="file" class="file" placeholder="Subir imagen de banner"/>
     </div>

     {{-- PROFILE TITLE --}}
     <div class="form-group row justify-content-center">
      <label for="profile_title" class="col-md-10 text-left control-label">Título del perfil</label>
      @if ($errors->has('profile_title'))
      <span class="help-block">
          <small class="text-danger">{{ $errors->first('profile_title') }}</small>
      </span>
      @endif
      <div class="col-md-10">
       <input id="profile_title" type="text" class="form-control" name="profile_title" value="{{ old('profile_title') }}" required>
      </div>
     </div>

     {{-- PROFILE BODY --}}
     <div class="form-group row justify-content-center">
      <label for="profile_body" class="col-md-10 text-left  control-label">Contenido del perfil</label>
      @if ($errors->has('profile_body'))
      <span class="help-block">
          <small class="text-danger">{{ $errors->first('profile_body') }}</small>
      </span>
      @endif
      <div class="col-md-10">
       <textarea id="profile_body" type="text" class="form-control ckeditor" name="profile_body" value="{{ old('profile_body') }}">{{ old('profile_body') }}</textarea>
      </div>
     </div>

     {{-- PROFILE PICTURE --}}
     <div class="form-group-file py-4 row justify-content-center">
      <label for="profile_pic" class="col-md-10 text-left control-label">Imagen de perfil:</label>
      @if ($errors->has('profile_pic'))
      <span class="help-block">
          <small class="text-danger">{{ $errors->first('profile_pic') }}</small>
      </span>
      @endif
      <input id="profile_pic" name="profile_pic" type="file" class="file" placeholder="Subir imagen de perfil"/>
     </div>

     {{-- CAMPOS LABORALES RELACIONADOS --}}
     <div class="form-group row justify-content-center">
      <label for="categoria" class="col-md-10 text-left control-label">Selecciona campos laborales relacionados con este plan:</label>
      <div class="col-md-10">
       @foreach($campos as $c)
       <div class="col-md-3 category-list p-2">
         <input name="campos[]" type="checkbox" value="{{ $c->id }}">
         <small>  {{ $c->title }}  </small></div>
       @endforeach
      </div>
     </div>

     {{-- PLAN DE ESTUDIOS PDF --}}
     <div class="form-group-file py-4 row justify-content-center">
      <label for="plan_pdf" class="col-md-10 text-left control-label">Plan de Estudios (PDF):</label>
      @if ($errors->has('plan_pdf'))
      <span class="help-block">
          <small class="text-danger">{{ $errors->first('plan_pdf') }}</small>
      </span>
      @endif
      <input id="plan_pdf" name="plan_pdf" type="file" class="file" placeholder="Subir plan de estudios"/>
     </div>

     {{-- ES DIPLOMADO --}}
     <div class="form-group row justify-content-center">
       <label for="isDiplomado" class="col-md-10 text-left control-label">Es diplomado?</label>
       <div class="col-md-10 row">
        <div class="col-md-3 subcategory-list p-2"><input type="checkbox" name="isDiplomado" value="true"><small>  Es Diplomado  </small></div>
      </div>
      </div>

     {{-- END --}}
     <div class="form-group row justify-content-center">
      <div class="col-md-8 text-center">
       <button type="submit" class="btn btn-info">
        Guardar Plan
       </button>
      </div>
     </div>

    </form>
   </div>
  </div>
 </div>
</div>
