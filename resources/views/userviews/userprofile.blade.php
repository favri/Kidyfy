@extends('layouts.app')
@section('titulo')
  HOla - {{Auth::user()->name }}
@endsection

@section('content')

<div class="container">
<div class="row">
  <div id="lcol" class="col-sm-3 bkg-white brd-top fixed-top" onscroll="myFunction()">
    <div class="pdtop20">
      PUTO
      @if (is_object($user->image))
        <img src="/img/{{$user->image->src}}" class="img-square brd-phto " height="150" width="150" alt="Avatar">
      @endif
        <p class="font-size-large"><a href="/{{$user->id }}">{{$user->name}}</a></p>
      </div>
    <div class="mgtop20">
        <div class="row margin-btn-10">
          {{-- <p>
            Solicitudes de amistad pendientes: {{$user->hasFriendRequestFrom($recipient)}}
          </p> --}}
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-comments"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="mensajes"><a href="#"> Mensajes</a></label>
          </div>
        </div>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-users"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="amigos"><a href="#"> Amigos</a></label>
          </div>
        </div>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-picture-o"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="fotos"><a href="#"> Fotos</a></label>
          </div>
        </div>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-calendar-check-o"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="eventos"><a href="#"> Eventos</a></label>
          </div>
        </div>
        <h4><a href="#">Hijos:</a></h4>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-child"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="hijos">{{$user->UserSecondaries->hijos}}</label>
          </div>
        </div>
        <h4><a href="/grupo/{{Auth::user()->id }}">Grupos Favoritos:</a></h4>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="{{$user->UserSecondaries->group->icon}}"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="grupo_favorito" class="capitalize">{{$user->UserSecondaries->group->group_name}}</label>
          </div>
        </div>

        <h4><a href="#">Obra Social:</a></h4>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-id-card"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="obra_social">{{$user->UserSecondaries->obrasocial}}</label>
          </div>
        </div>
        <h4><a href="#">Médicos Recomendados:</a></h4>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-heartbeat"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="doctor"><a href="#">HOLA</a></label>
          </div>
        </div>
    </div>
    <div class="alert alert-info fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <a href="{{url ('/home/grupo')}}"><p><strong>¿Tienes sugerencias?</strong></p>
      Estaremos felices de recibir tu opinión</a>
    </div>
  </div>
  <div id="ccol" class="col-sm-7 fixed-top">

    <div class="row">
      @foreach ($posts as $post)
        @if ($post->group->group_name != "general")
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white">
            <div class="row">
              <div class="col-sm-12">
                <p class="font-size-medium">
                  <a href="/{{$post->user->id}}">{{ $post->user->name }}</a> el {{$post->created_at}}
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12" style="padding-right:0px;">
                <p class="font-size-large"><img src="img/{{$post->user->image->src}}" class="img-square" height="40" width="40" alt="Avatar"> {{ $post->post_text }}</p>
                <span class="icon-post pull-right"><a href="{{$post->group->group_name}}/{{\Auth::user()->id}}"><i class="{{$post->group->icon}}"></i></a></span>
              </div>
            </div>
          </div>

        @else
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white">
            <div class="row">
              <div class="col-sm-12">
                <p class="font-size-medium">
                  <a href="/{{$post->user->id}}">{{ $post->user->name }}</a> el {{$post->created_at}}
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12" style="padding-right:0px;">
                <p class="font-size-large"><img src="img/{{$post->user->image->src}}" class="img-square" height="40" width="40" alt="Avatar"> {{ $post->post_text }}</p>
                <span class="icon-post pull-right"><a href="/home"><i class="{{$post->group->icon}}"></i></a></span>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>
  <div id="rcol" class="col-sm-2 bkg-white brd-top fixed-top">
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
