@extends('master')

@section('titulo')
  Inicio
@endsection

@section('contenido')
      <div class="row">
      <!-- Columna Izquierda  -->
      <div class="col-sm-8">
        <h1>Nuestos hijos, nuestro mundo</h1>
        <h3>La red social donde consultamos, sacamos dudas y aconsejamos</h3>
      </div>
      <!-- Termina Columna Izquierda  -->
      <!-- Columna Derecha -->
      <div class="col-sm-3 col-sm-offset-1">
        <!-- Empieza Form -->
        <div class="bkg-forms">

          <form class="form-login" action="login" method="POST" id="form-login">
            {{csrf_field()}}

    				<div class="ingreso1">
    						<span class="icon"><i class="ion-ios-person"></i></span>
              <input type="text" name="email" value="" placeholder="usuario">

            </div>
    				<div class="ingreso1">
    						<span class="icon"><i class="ion-ios-locked-outline"></i></span>
              <input type="password" name="password" value="" placeholder="contraseña">

            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-default btn-sm" name="login">Enviar</button>
              <label style="padding-left: 20px">
                <input type="checkbox" name="recordame"> Recordarme
              </label>
            </div>
            <div class="form-group font-white text-center">
              <label>
                <a href="#">Olvidé mi contraseña</a>
              </label>
            </div>
          </form>
        </div>
        <!-- Termina Form-->
      </div>
      <!-- Termina Columna Derecha -->
    </div>

@endsection
