@extends('layouts.app')
@section('titulo')
  Grupos
@endsection

@section('content')
  <div class="container">
  <div class="row">
    <div class="row">
      
      @include('partials.leftnavbar')

     <div class="col-sm-7 fixed-top">
       <div class="row">
          <a href="/establecimientos">
            <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white img-establecimientos">
              <span class="icon pull-left icon-group"><i class="fa fa-hospital-o"></i></span>
            <div class="group-box">
              <h3>Establecimientos</h3>
              <p>
                Dónde cuidar a nuestros hijos.
              </p>
            </div>
          </div>
          </a>
          <a href="/medicos">
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white img-medicos">
            <span class="icon pull-left icon-group"><i class="fa fa-stethoscope"></i></span>
            <div class="group-box">
              <h3>Médicos</h3>
              <p>
                Un médico es una garantía
              </p>
            </div>
          </div>
          </a>
          <a href="/indumentaria">
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white img-indumentaria">
            <span class="icon pull-left icon-group"><i class="fa fa-briefcase"></i></span>
            <div class="group-box">
              <h3>Indumentaria</h3>
              <p>
                ¿Bueno, bonito y barato?
              </p>
            </div>
          </div>
          </a>
          <a href="/colegios">
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white img-colegios">
            <span class="icon pull-left icon-group"><i class="fa fa-graduation-cap"></i></span>
            <div class="group-box">
              <h3>Colegios</h3>
              <p>
                Construyendo futuro juntos
              </p>
            </div>
          </div>
          </a>
          <a href="/colonias">
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white img-colonias">
            <span class="icon pull-left icon-group img-circle"><i class="fa fa-life-ring"></i></span>
            <div class="group-box">
              <h3>Colonias</h3>
              <p>
                Que llegue la diversión!
              </p>
            </div>
          </div>
          </a>
      </div>
    </div>

    @include('partials.rightbar')

  </div>
  </div>
  <!-- Finish MainContainer -->
@endsection
@extends('partials.footerkdf')
