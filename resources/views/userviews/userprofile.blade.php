@extends('layouts.app')
@section('titulo')
  Mi Perfil - {{Auth::user()->name }}
@endsection

@section('content')
<div class="container">
<div class="row">
  <div class="col-sm-3 fixed-top bkg-white brd-top pdtop20">
      @if (is_object(\Auth::user()->image))
        <img src="/img/{{\Auth::user()->image->src}}" class="img-square brd-phto " height="150" width="150" alt="Avatar">
      @endif
      <div class="pdtop20">
        <p class="font-size-large"><a href="/home/{{Auth::user()->id }}">{{\Auth::user()->name}}</a></p>
      </div>
    <div class="mgtop20">
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-comments"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="indumentaria"><a href="#"> Mensajes</a></label>
          </div>
        </div>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-users"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="indumentaria"><a href="#"> Amigos</a></label>
          </div>
        </div>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-picture-o"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="Colegios"><a href="#"> Fotos</a></label>
          </div>
        </div>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-calendar-check-o"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="colonias"><a href="#"> Eventos</a></label>
          </div>
        </div>
        <h4><a href="#">Hijos:</a></h4>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-child"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="indumentaria"><a href="#"> Lucas</a></label>
          </div>
        </div>
        <h4><a href="/grupo/{{Auth::user()->id }}">Grupos Favoritos:</a></h4>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-briefcase"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="indumentaria"><a href="/indumentaria/{{Auth::user()->id }}"> Indumentaria</a></label>
          </div>
        </div>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-graduation-cap"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="Colegios"><a href="/colegios/{{Auth::user()->id }}"> Colegios</a></label>
          </div>
        </div>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-life-ring "></i></span>
          </div>
          <div class="col-sm-10">
            <label for="colonias"><a href="/colonias/{{Auth::user()->id }}"> Colonias</a></label>
          </div>
        </div>
        <h4><a href="#">Obra Social:</a></h4>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-id-card"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="indumentaria"><a href="#">OSDE</a></label>
          </div>
        </div>
        <h4><a href="#">Médicos Recomendados:</a></h4>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-heartbeat"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="indumentaria"><a href="#"> Dr.Perez</a></label>
          </div>
        </div>
    </div>
    <div class="alert alert-info fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <a href="{{url ('/home/grupo')}}"><p><strong>¿Tienes sugerencias?</strong></p>
      Estaremos felices de recibir tu opinión</a>
    </div>
  </div>
  <div class="col-sm-7 fixed-top">

    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white">
        <p>
          VISTA DE USUARIO A TRABAJAR!
        </p>
      </div>
      @foreach ($posts as $post)
        <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white">
          <div class="row">
            <div class="col-sm-12">
              <p class="font-size-medium">
                {{ $post->user->name }} el {{$post->created_at}}
              </p>
            </div>
            <div class="col-sm-10">
              <p class="font-size-large"><img src="/img/{{$post->user->image->src}}" class="img-square" height="40" width="40" alt="Avatar"> {{ $post->post_text }}</p>
            </div>
          </div>


        </div>
      @endforeach
    </div>
  </div>
  <div class="col-sm-2 fixed-top bkg-white brd-top">
    <div class="pdtop20">
      <img src="img/ads/huggies.jpeg" alt="" class="img-responsive" />
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
