@extends('layouts.app')
@section('titulo')
  Grupos
@endsection
@section('content')
  <div class="container">
  <div class="row">
    <div class="col-sm-3 well">
      <div class="">
        <p><a href="#">My Perfil</a></p>
        {{\Auth::user()->name}}
        <br>
        @if (is_object(\Auth::user()->image))
          <img src="/img/{{\Auth::user()->image->src}}" class="img-square" height="65" width="65" alt="Avatar">
        @endif
      </div>
      <div class="">
        <p>
          -----
        </p>
        <h4><a href="{{ url('home/grupo')}}">Grupos</a></h4>
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
      <div id="content"></div>
    </div>
  </div>
  </div>
  <!-- Finish MainContainer -->
@endsection
@extends('partials.footerkdf')
