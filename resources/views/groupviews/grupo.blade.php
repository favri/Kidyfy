@extends('layouts.app')
@section('titulo')
  Grupos
@endsection

@section('content')
  <div class="container">
  <div class="row">
    <div class="row">
      <div id="lcol" class="col-sm-3 bkg-white brd-top fixed-top shw-ltl-nav" onscroll="myFunction()">
        <div class="pdtop20">
          <p class="font-size-large">
            @if (is_object(\Auth::user()->image))
              <img src="/img/{{\Auth::user()->image->src}}" class="img-square" height="20" width="20" alt="Avatar">
            @endif
              <a href="/{{Auth::user()->id }}">{{\Auth::user()->name}}</a>
          </p>
        </div>
        <div class="mgtop20 ">
            <h4><a href="/grupo/{{Auth::user()->id }}">Grupos</a></h4>
            <div class="row margin-btn-10 grouplist">
              <div class="col-sm-1 grouplist">
                <span class="icon"><i class="fa fa-hospital-o"></i></span>
              </div>
              <div class="col-sm-10 mgtop5 grouplist">
                <label for="establecimientos"><a href="/establecimientos/{{Auth::user()->id }}"> Establecimientos Médicos</a></label>
              </div>
            </div>
            <div class="row margin-btn-10 grouplist">
              <div class="col-sm-1 grouplist">
                <span class="icon"><i class="fa fa-stethoscope"></i></span>
              </div>
              <div class="col-sm-10 mgtop5 grouplist">
                <label for="medicos"><a href="/medicos/{{Auth::user()->id }}"> Médicos</a></label>
              </div>
            </div>
            <div class="row margin-btn-10 grouplist">
              <div class="col-sm-1 grouplist">
                <span class="icon"><i class="fa fa-briefcase"></i></span>
              </div>
              <div class="col-sm-10 mgtop4 grouplist">
                <label for="indumentaria"><a href="/indumentaria/{{Auth::user()->id }}"> Indumentaria</a></label>
              </div>
            </div>
            <div class="row margin-btn-10 grouplist">
              <div class="col-sm-1 grouplist">
                <span class="icon"><i class="fa fa-graduation-cap"></i></span>
              </div>
              <div class="col-sm-10 mgtop4 grouplist">
                <label for="Colegios"><a href="/colegios/{{Auth::user()->id }}"> Colegios</a></label>
              </div>
            </div>
            <div class="row margin-btn-10 grouplist">
              <div class="col-sm-1 grouplist">
                <span class="icon"><i class="fa fa-life-ring"></i></span>
              </div>
              <div class="col-sm-10 mgtop5 grouplist">
                <label for="colonias"><a href="/colonias/{{Auth::user()->id }}"> Colonias</a></label>
              </div>
            </div>
        </div>
        <div class="mgtop20">
          <h4><a href="/doctores/{{Auth::user()->id}}">Doctores</a></h4>
            <div class="row margin-btn-10 grouplist">
              <div class="col-sm-1 grouplist">
                <span class="icon"><i class="fa fa-user-md"></i></span>
              </div>
              <div class="col-sm-10 mgtop5 grouplist">
                <label for="especialidades"><a href="#"> Especialidades</a></label>
              </div>
            </div>
            <div class="row margin-btn-10 grouplist">
              <div class="col-sm-1 grouplist">
                <span class="icon"><i class="fa fa-id-card"></i></span>
              </div>
              <div class="col-sm-10 mgtop5 grouplist">
                <label for="Obra Social"><a href="#"> Obra Social</a></label>
              </div>
            </div>
        </div>
        <div class="mgtop20">
          <h4><a href="#">Establecimientos</a></h4>
            <div class="row margin-btn-10 grouplist">
              <div class="col-sm-1 grouplist">
                <span class="icon"><i class="fa fa-h-square"></i></span>
              </div>
              <div class="col-sm-10 mgtop5 grouplist">
                <label for="centros Medicos"><a href="#"> Centros Medicos</a></label>
              </div>
            </div>
            <div class="row margin-btn-10 grouplist">
              <div class="col-sm-1 grouplist">
                <span class="icon"><i class="fa fa-puzzle-piece"></i></span>
              </div>
              <div class="col-sm-10 mgtop5 grouplist">
                <label for="Jardines"><a href="#"> Jardines</a></label>
              </div>
            </div>
            <div class="row margin-btn-10 grouplist">
              <div class="col-sm-1 grouplist">
                <span class="icon"><i class="fa fa-book"></i></span>
              </div>
              <div class="col-sm-10 mgtop5 grouplist">
                <label for="Colegios"><a href="#"> Colegios</a></label>
              </div>
            </div>
            <div class="row margin-btn-10 grouplist">
              <div class="col-sm-1 grouplist">
                <span class="icon"><i class="fa fa-birthday-cake"></i></span>
              </div>
              <div class="col-sm-10 mgtop5 grouplist">
                <label for="Salones de fiesta"><a href="#"> Salones de fiesta</a></label>
              </div>
            </div>
        </div>

        <div class="alert alert-info fade in">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          <a href="{{url ('contact')}}"><p><strong>¿Tienes sugerencias?</strong></p>
          Estaremos felices de recibir tu opinión</a>
        </div>
      </div>
    <div class="col-sm-7 fixed-top">
      <div class="row">
          <a href="/establecimientos/{{Auth::user()->id }}">
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
          <a href="/medicos/{{Auth::user()->id }}">
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
          <a href="/indumentaria/{{Auth::user()->id }}">
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
          <a href="/colegios/{{Auth::user()->id }}">
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
          <a href="/colonias/{{Auth::user()->id }}">
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

<<<<<<< HEAD
    <div id="rcol" class="col-sm-2 bkg-white brd-top fixed-top shw-ltl-nav">
=======
    <div id="rcol" class="col-sm-2 bkg-white brd-top margin-btn-60 fixed-top">
>>>>>>> pulidas
      <div class="pdtop20">
        <p>
          <label for="AD1">
            <a href="https://www.huggies.com.ar/">
              <img src="http://d26lpennugtm8s.cloudfront.net/stores/016/311/products/campeones-gx56-nuevo-815ee51a774242f64726ac0aa40e8f3d-1024-1024.jpg" alt="" class="img-responsive" />
              <h4>Huggies</h4>
              Acompañando la salud de tu bebé.
            </a>
          </label>
        </p>
      </div>
      <div class="">
        <p>
          <label for="AD2">
            <a href="http://www.trinidadpalermo.com.ar/">
              <img src="http://clinica-web.com.ar/wp-content/uploads/2016/05/sanatorio-trinidad-san-isidro.jpg" alt="" class="img-responsive" />
              <h4>Sanatorio de la Trinidad</h4>
              Nuestra prioridad es tu bienestar.
            </a>
          </label>
        </p>
      </div>
      <div id="eventsapp">
      </div>
    </div>
  </div>
  </div>
  <!-- Finish MainContainer -->
@endsection
@extends('partials.footerkdf')
