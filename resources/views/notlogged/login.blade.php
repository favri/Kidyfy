@extends('master')

@section('titulo')
  Ingresar
@endsection

@section('contenido')

  <div class="container-fluid">
   <div class="row">
  <!-- Columna Derecha  -->
     <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4">
  		 <div class="bkg-forms">


  			 <h2 class="text-center">Ingreso</h2>
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
  	        <div class="form-group ingreso text-center">
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
     </div>
   </div>
  </div>

@endsection
