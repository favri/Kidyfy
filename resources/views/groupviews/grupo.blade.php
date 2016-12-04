@extends('layouts.app')
@section('titulo')
  Grupos
@endsection

@section('content')
  <div class="container">
  <div class="row">
    <div id="lcol" class="col-sm-3 fixed-top bkg-white brd-top col-right" onscroll="myFunction()">
      <div class="pdtop20">
        <p class="font-size-large">
          @if (is_object(\Auth::user()->image))
            <img src="/img/{{\Auth::user()->image->src}}" class="img-square" height="20" width="20" alt="Avatar">
          @endif
            <a href="/home/{{Auth::user()->id }}">{{\Auth::user()->name}}</a>
        </p>
      </div>
      <div class="mgtop20 ">
          <h4><a href="/grupo/{{Auth::user()->id}}">Grupos</a></h4>
          <div class="row margin-btn-10">
            <div class="col-sm-2">
              <span class="icon"><i class="fa fa-hospital-o"></i></span>
            </div>
            <div class="col-sm-10">
              <label for="establecimientos"><a href="establecimientos/{{Auth::user()->id }}"> Establecimientos Medicos</a></label>
            </div>
          </div>
          <div class="row margin-btn-10">
            <div class="col-sm-2">
              <span class="icon"><i class="fa fa-stethoscope"></i></span>
            </div>
            <div class="col-sm-10">
              <label for="medicos"><a href="medicos/{{Auth::user()->id }}"> Medicos</a></label>
            </div>
          </div>
          <div class="row margin-btn-10">
            <div class="col-sm-2">
              <span class="icon"><i class="fa fa-briefcase"></i></span>
            </div>
            <div class="col-sm-10">
              <label for="indumentaria"><a href="indumentaria/{{Auth::user()->id }}"> Indumentaria</a></label>
            </div>
          </div>
          <div class="row margin-btn-10">
            <div class="col-sm-2">
              <span class="icon"><i class="fa fa-graduation-cap"></i></span>
            </div>
            <div class="col-sm-10">
              <label for="Colegios"><a href="colegios/{{Auth::user()->id }}"> Colegios</a></label>
            </div>
          </div>
          <div class="row margin-btn-10">
            <div class="col-sm-2">
              <span class="icon"><i class="fa fa-life-ring "></i></span>
            </div>
            <div class="col-sm-10">
              <label for="colonias"><a href="colonias/{{Auth::user()->id }}"> Colonias</a></label>
            </div>
          </div>
      </div>
      <div class="alert alert-info fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <a href="{{url ('/home/grupo')}}"><p><strong>¿Tienes sugerencias?</strong></p>
        Estaremos felices de recibir tu opinión</a>
      </div>
    </div>
    <div class="col-sm-7 col-sm-offset-3 fixed-top">
      <div class="row">
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white img-establecimientos">
            <div class="group-box">
              <span class="icon pull-left"><i class="fa fa-hospital-o"></i></span><h3><a href="/establecimientos/{{Auth::user()->id }}">Establecimientos</a></h3>
              <p>
                Donde cuidar a nuestros hijos.
              </p>
            </div>
          </div>
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white img-medicos">
            <div class="group-box">
              <span class="icon pull-left"><i class="fa fa-stethoscope"></i></span><h3><a href="/medicos/{{Auth::user()->id }}">Medicos</a></h3>
              <p>
                Un medico es una garantía
              </p>
            </div>
          </div>
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white img-indumentaria">
            <div class="group-box">
              <span class="icon pull-left"><i class="fa fa-briefcase"></i></span><h3><a href="/indumentaria/{{Auth::user()->id }}">Indumentaria</a></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white img-colegios">
            <div class="group-box">
              <span class="icon pull-left"><i class="fa fa-graduation-cap"></i></span><h3><a href="/colegios/{{Auth::user()->id }}">Colegios</a></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white img-colonias">
            <div class="group-box">
              <span class="icon pull-left"><i class="fa fa-life-ring"></i></span><h3><a href="/colonias/{{Auth::user()->id }}">Colonias</a></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
      </div>
    </div>

    <div class="col-sm-2 fixed-top bkg-white brd-top">
      <div class="pdtop20">
        <p>ADS</p>
      </div>
      <div class="">
        <p>ADS</p>
      </div>
      <div id="eventsapp">
      </div>
    </div>
  </div>
  </div>
  <!-- Finish MainContainer -->
@endsection
@extends('partials.footerkdf')
