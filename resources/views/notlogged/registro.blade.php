@extends('master')

@section('titulo')
  Registro
@endsection

@section('contenido')

  <!-- Empieza Contenedor Principal  -->
   <div class="container-fluid">
     <div class="row">
       <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4">
         <div class="bkg-forms">
           @if (count($errors) > 0)
             <div class="alert alert-danger">
               <ul>
                 @foreach ($errors->all() as $error)
                   <li>{{$error}}</li>
                 @endforeach
               </ul>
             </div>
          @endif
           <h2 class="text-center">Registro</h2>
           <h6 id="tit-form" class="text-center"></h6>
           <form class="form" action="registro" method="post"  id="form-registro" enctype="multipart/form-data">
            {{csrf_field()}}

             <div class="ingreso1">
               <span class="icon"><i class="ion-ios-person"></i></span>
               <input type="text" id="nombre" name="nombre" placeholder="nombre" value="{{old('nombre')}}">
             </div>
             <div class="ingreso1">
               <span class="icon"><i class="ion-ios-person"></i></span>
               <input type="text" name="apellido" placeholder="apellido" value="{{old('apellido')}}">
             </div>
             <div class="ingreso1">
               <span class="icon"><i class="ion-ios-email"></i></span>
               <input type="email" name="email" placeholder="usuario@sucorreo.com" value="{{old('email')}}">
             </div>
             <div class="ingreso1">
               <span class="icon"><i class="ion-ios-email"></i></span>
               <input type="email" name="email_confirmation" placeholder="Confirme su correo" value="{{old('email_confirmation')}}">
              </div>
             <div class="ingreso1">
               <span class="icon"><i class="ion-ios-locked-outline"></i></span>
               <input type="password" name="password" placeholder="contrasena" value="">
              </div>
             <div class="ingreso1">
               <label  class="registertext">Fecha de Nacimiento: </label>
               <input class="" type="date" name="fecha_de_nacimiento" value="{{old('fecha_de_nacimiento')}}">
              </div>
             {{-- <div class="ingreso1">
               <label class="registertext">Femenino
               <input type="radio" name="genero" value"F" class="gender" checked></label>

               <label class="registertext">Masculino
               <input type="radio" name="genero" value="M" class="gender"></label>
             </div> --}}
             <!-- <div>
                 <label for="avatar">Avatar</label>
                 <input type="file" name="avatar" id="avatar"/>
             </div> -->

             <div class="form-group ingreso text-center">
               <input type="submit" class="btn btn-primary btn-md submit" name="registro" id="boton" value="Registrarse">
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>

@endsection
