@extends('layouts.app')
@section('titulo')
  Inicio
@endsection

@section('content')
<div class="container">
<div class="row">
  @include('partials.barraizquierda')
  <div id="ccol" class="col-sm-7 fixed-top">

    <!-- <div class="row">
        <div class="col-sm-10 col-sm-offset-1 postbox  bkg-white brd-top">
          <p class="font-size-medium"><img src="/img/{{\Auth::user()->image->src}}" class="img-square margin-btn-10" height="30" width="30" alt="Avatar"> ¿Listo para Kidyar {{\Auth::user()->name}}?</p>


           <form class="" method="post" action="{{ url('home') }}" enctype="multipart/form-data">
             {{ csrf_field() }}
             <textarea name="post_text" class="postarea margin-btn-10" placeholder="¿Listo para Kidyarte?"> </textarea>
             <input id="postfile" class="inputfile" type="file" name="postfile[]" size="2mb" value="" style="display:inline-block" data-multiple-caption="{count} archivos seleccionados" multiple="">
           <label for="postfile"><span>Subir Foto</span></label>
             <input type="number" name="group_id" value="1" hidden>
             <button type="submit" class="btn btn-primary pull-right">Postear</button>
           </form>

        </div>
    </div> -->

    <div class="row">
      @foreach ($posts as $post)
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
            </div>
          </div>
          @include('partials.showimage')
          <span class="icon-post pull-right" style="margin-right:-10;"><a href="{{$post->group->group_name}}/{{\Auth::user()->id}}"><i class="{{$post->group->icon}}"></i></a></span>

          <form class="" method="post" action="/posteo/{{$post->id }}/borrar" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input id="postfile" class="inputfile" type="file" name="postfile[]" size="2mb" value="" style="display:inline-block" data-multiple-caption="{count} archivos seleccionados" multiple="">
            <label for="postfile"><span>Subir Foto</span></label>
            <input type="number" name="group_id" value="1" hidden>
            <button type="submit" class="btn btn-primary pull-right">Borrar</button>
          </form>

        </div>
      @endforeach
    </div>

  </div>
  <div id="rcol" class="col-sm-2 bkg-white brd-top fixed-top margin-btn-60 shw-ltl-nav">
    <div class="pdtop20">
      <p>
        <label for="AD1">
          <a href="https://www.huggies.com.ar/">
            <img src="http://d26lpennugtm8s.cloudfront.net/stores/016/311/products/campeones-gx56-nuevo-815ee51a774242f64726ac0aa40e8f3d-1024-1024.jpg" alt="" class="img-responsive" />
            <span class=""><i class="fa fa-external-link"> Huggies</i></span>
            <br>
            Acompañando la salud de tu bebé.
          </a>
        </label>
      </p>
    </div>
    <div class="">
      <p>
        <label for="AD2">
          <a href="http://www.trinidadpalermo.com.ar/">
            <img src="http://clinica-web.com.ar/wp-content/uploads/2016/05/sanatorio-trinidad-san-isidro.jpg" alt="" class="img-responsive" /><br>
            <span class=""><i class="fa fa-external-link"> Sanatorio de la Trinidad</i></span>
            <br>
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
