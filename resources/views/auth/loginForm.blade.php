<form class="form-horizontal" method="POST" action="{{ route('login') }}">
  {{ csrf_field() }}

  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">E-Mail</label>

    <div class="col-md-12">
      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

      @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
      @endif
    </div>
  </div>

  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">Contraseña</label>

    <div class="col-md-12">
      <input id="password" type="password" class="form-control" name="password" required>

      @if ($errors->has('password'))
        <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
      @endif
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-12 text-left">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar datos
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6 text-center">
        <button type="submit" class="btn btn-secondary">Iniciar Sesión</button>
      </div>
      <div class="col-md-6 text-center">
        <a class="" href="{{ url('/register') }}">
          <button class="btn btn-primary">Registrate</button>
        </a>
      </div>
      <div class="">
        <div class="col-md-12">
          <a class="btn-link text-secondary" href="{{ route('password.request') }}">
            <small> Olvidé mi contraseña</small>
          </a>
        </div>
      </div>
    </div>
  </div>
</form>
