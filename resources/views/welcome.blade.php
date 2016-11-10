@extends('layouts.app')

@section('content')
  <div class="container">
  <div class="row">
  <!-- Columna Izquierda  -->
  <div class="col-sm-8">
    <h1>Nuestos hijos, nuestro mundo</h1>
    <h3>La red social donde consultamos, sacamos dudas y aconsejamos</h3>
  </div>
  <!-- Termina Columna Izquierda  -->
  <!-- Columna Derecha -->
  <div class="col-sm-3 col-sm-offset-1">

    <div class="panel panel-default">
        <div class="panel-heading">Ingresar</div>
        <div class="panel-body">
            {{-- Empieza Form --}}
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <label for="email" class="col-md-2 control-label"><span class="icon"><i class="ion-ios-person"></i></span></label>

                    <div class="col-md-10">
                        <input id="email" type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                    <label for="password" class="col-md-2 control-label"><span class="icon"><i class="ion-ios-locked-outline"></i></span></label>

                    <div class="col-md-10">
                        <input id="password" type="password" class="form-control" name="password" placeholder="contraseña" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 checkbox">
                      <label>
                          <input type="checkbox" name="remember"> Remember Me
                      </label>
                      </div>
                      <div class="col-md-6 text-right">
                      <button type="submit" class="btn btn-primary">
                          Login
                      </button>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2">
                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- Termina Form --}}
  </div>
  <!-- Termina Columna Derecha -->
  </div>
  </div>
@endsection
