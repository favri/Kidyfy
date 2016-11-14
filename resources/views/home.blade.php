@extends('layouts.app')
@section('titulo')
  Inicio
@endsection

@section('content')
<div class="container">
<div class="row">
  <div class="col-sm-3 well">
    <div class="well">
      <p><a href="#">My Profile</a></p>
      {{\Auth::user()->name}}
      <br>
      <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
    </div>
    <div class="well">
      <h4><a href="#">Grupos</a></h4>
      <label for="establecimientos"><span class="icon"><i class="fa fa-hospital-o "></i></span></label><a href="#"> Establecimientos Medicos</a>
      <br>
      <label for="establecimientos"><span class="icon"><i class="fa fa-stethoscope"></i></span></label><a href="#"> Medicos</a>
      <br>
      <label for="establecimientos"><span class="icon"><i class="fa fa-briefcase"></i></span></label><a href="#"> Indumentaria</a>
      <br>
      <label for="establecimientos"><span class="icon"><i class="fa fa-graduation-cap"></i></span></label><a href="#"> Colegios</a>
      <br>
      <label for="establecimientos"><span class="icon"><i class="fa fa-life-ring "></i></span></label><a href="#"> Colonias</a>
    </div>
    <div class="alert alert-success fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <p><strong>Ey!</strong></p>
      People are looking at your profile. Find out who.
    </div>
    <p><a href="#">Link</a></p>
    <p><a href="#">Link</a></p>
    <p><a href="#">Link</a></p>
  </div>
  <div class="col-sm-7">

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 commentbox">
           <p>¿Qué estas pensando {{\Auth::user()->name}}?</p>
           <img src="Auth::user()->image()" class="img-circle" height="55" width="55" alt="Avatar">
           <textarea name="userpost" cols="80" placeholder="¿Listo para Kidyfycarte?"> </textarea>
           <input type="button" name="send" value="Enviar">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 commentbox">
           <p>Anja</p>
           <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
           <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 commentbox">
           <p>Anja</p>
           <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
           <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 commentbox">
           <p>Anja</p>
           <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
           <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 commentbox">
           <p>Anja</p>
           <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
           <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
        </div>
    </div>
  </div>
  <div class="col-sm-2 well">
    <div class="thumbnail">
      <p>Upcoming Events:</p>
      <img src="paris.jpg" alt="Paris" width="400" height="300">
      <p><strong>Paris</strong></p>
      <p>Fri. 27 November 2015</p>
      <button class="btn btn-primary">Info</button>
    </div>
    <div class="">
      <p>ADS</p>
    </div>
    <div class="">
      <p>ADS</p>
    </div>
  </div>
</div>
</div>
<!-- Finish MainContainer -->
@endsection
