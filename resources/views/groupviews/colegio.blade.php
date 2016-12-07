@extends('layouts.app')
@section('titulo')
  Colegios
@endsection
@section('content')
  <div class="container">
  <div class="row">

    <div id="lcol" class="col-sm-3 bkg-white brd-top shw-ltl-nav fixed-top" onscroll="myFunction()">

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
        <h4><a href="doctores/{{Auth::user()->id}}">Doctores</a></h4>
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
        <h4><a href="">Establecimientos</a></h4>
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
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white brd-top">
              <span class="icon-post pull-right"><i class="fa fa-graduation-cap"></i></span>
              <h3>Colegios</h3>
              <p class="font-size-medium">¿Listo para Kidyar {{\Auth::user()->name}}?</p>
               <img src="/img/{{\Auth::user()->image->src}}" class="img-square margin-btn-10" height="30" width="30" alt="Avatar">

               <form class="" method="post" action="/colegios/{{\Auth::user()->id}}" enctype="multipart/form-data">
                 {{ csrf_field() }}
                 <textarea name="post_text" class="postarea margin-btn-10" placeholder="¿Listo para Kidyarte?"> </textarea>
                 <input id="postfile" class="inputfile" type="file" name="postfile[]" size="2mb" value="" style="display:inline-block" data-multiple-caption="{count} archivos seleccionados" multiple="">
                 <label for="postfile"><span>Subir Foto</span></label>
                 <input type="number" name="group_id" value="5" hidden>
                 <button type="submit" class="btn btn-primary pull-right">Postear</button>
               </form>

            </div>
        </div>

        <div class="row">
          @foreach ($posts as $post)
            <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white">
              <div class="row">
                <div class="col-sm-12">
                  <p class="font-size-medium">
                    <a href="/{{$post->user->id}}">{{ $post->user->name }} </a>el {{$post->created_at}}
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12" style="padding-right:0px;">
                  <p class="font-size-large"><img src="/img/{{$post->user->image->src}}" class="img-square" height="40" width="40" alt="Avatar"> {{ $post->post_text }}</p>
                </div>
              </div>
              @include('partials.showimage')
              <span class="icon-post pull-right"><i class="{{$post->group->icon}}"></i></span>
              </div>
          @endforeach
          </div>
        </div>
      </div>

      <div id="rcol" class="col-sm-2 bkg-white brd-top margin-btn-60 shw-ltl-nav fixed-top">

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
