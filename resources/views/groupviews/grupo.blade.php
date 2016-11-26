@extends('layouts.app')
@section('titulo')
  Grupos
@endsection
@section('content')
  <div class="container">
  <div class="row">
    <div class="col-sm-3 bkg-white brd-top">
      <div class="pdtop20">
        <p><a href="/home/{{Auth::user()->id }}">{{\Auth::user()->name}}</a></p>
        <br>
        @if (is_object(\Auth::user()->image))
          <img src="/img/{{\Auth::user()->image->src}}" class="img-square" height="65" width="65" alt="Avatar">
        @endif
      </div>
      <div class="mgtop20 ">
          <h4><a href="/grupo/{{Auth::user()->id}}">Grupos</a></h4>
          <div class="row margin-btn-10">
            <div class="col-sm-2">
              <span class="icon"><i class="fa fa-hospital-o "></i></span>
            </div>
            <div class="col-sm-10">
              <label for="establecimientos"><a href="#"> Establecimientos Medicos</a></label>
            </div>
          </div>
          <div class="row margin-btn-10">
            <div class="col-sm-2">
              <span class="icon"><i class="fa fa-stethoscope"></i></span>
            </div>
            <div class="col-sm-10">
              <label for="medicos"><a href="#"> Medicos</a></label>
            </div>
          </div>
          <div class="row margin-btn-10">
            <div class="col-sm-2">
              <span class="icon"><i class="fa fa-briefcase"></i></span>
            </div>
            <div class="col-sm-10">
              <label for="indumentaria"><a href="#"> Indumentaria</a></label>
            </div>
          </div>
          <div class="row margin-btn-10">
            <div class="col-sm-2">
              <span class="icon"><i class="fa fa-graduation-cap"></i></span>
            </div>
            <div class="col-sm-10">
              <label for="Colegios"><a href="#"> Colegios</a></label>
            </div>
          </div>
          <div class="row margin-btn-10">
            <div class="col-sm-2">
              <span class="icon"><i class="fa fa-life-ring "></i></span>
            </div>
            <div class="col-sm-10">
              <label for="colonias"><a href="#"> Colonias</a></label>
            </div>
          </div>
      </div>
      <div class="alert alert-info fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <a href="{{url ('/home/grupo')}}"><p><strong>¿Tienes sugerencias?</strong></p>
        Estaremos felices de recibir tu opinión</a>
      </div>
    </div>
    <div class="col-sm-7">
      <div class="row">
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white">
            <p>
              VISTA DE GRUPOS A TRABAJAR!
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
          <div class="col-sm-10 col-sm-offset-1 commentbox post-color-green">
             <p>Anja</p>
             <img src="bird.jpg" class="img-square" height="55" width="55" alt="Avatar">
             <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
      </div>
      <div class="row">
          <div class="col-sm-10 col-sm-offset-1 commentbox post-color-pink">
             <p>Anja</p>
             <img src="bird.jpg" class="img-square" height="55" width="55" alt="Avatar">
             <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
      </div>
      <div class="row">
          <div class="col-sm-10 col-sm-offset-1 commentbox post-color-yellow">
             <p>Anja</p>
             <img src="bird.jpg" class="img-square" height="55" width="55" alt="Avatar">
             <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
      </div>
      <div class="row">
          <div class="col-sm-10 col-sm-offset-1 commentbox post-color-purple">
             <p>Anja</p>
             <img src="bird.jpg" class="img-square" height="55" width="55" alt="Avatar">
             <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
      </div>
    </div>
    <div class="col-sm-2 bkg-white brd-top">
      <div class="pdtop20">
        <p>Upcoming Events:</p>
        <img src="paris.jpg" alt="Paris">
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
