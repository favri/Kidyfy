@extends('layouts.app')
@section('titulo')
  Ingresar
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 fixed-top">
            <div class="panel panel-default">
              <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="row">
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">
                      <span class="icon mgtop10"><i class="fa fa-user"></i></span>
                      <input id="email" type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="control-label">
                        <span class="icon mgtop10"><i class="fa fa-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="contraseña" required>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </label>
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 checkbox">
                      <label>
                          <input type="checkbox" name="remember"> Recordarme
                      </label>
                      </div>
                      <div class="col-md-6 text-right">
                      <button type="submit" class="btn btn-primary">
                          Login
                      </button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">


                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>
                </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
@extends('partials.footerkdf')
