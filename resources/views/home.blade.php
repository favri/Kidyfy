@extends('layouts.app')
@section('titulo')
  Inicio
@endsection

@section('content')
<div class="container">
<div class="row">

  @include('partials.leftnavbar')

  <div id="ccol" class="col-sm-7 fixed-top">

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 postbox  bkg-white brd-top">
          <p class="font-size-medium"><img src="/img/{{\Auth::user()->image->src}}" class="img-square margin-btn-10" height="30" width="30" alt="Avatar"> ¿Listo para Kidyar {{\Auth::user()->name}}?</p>


           <form class="" method="post" action="/home" enctype="multipart/form-data">
             {{ csrf_field() }}
             <textarea name="post_text" class="postarea margin-btn-10" placeholder="¿Listo para Kidyarte?"> </textarea>
             <input id="postfile" class="inputfile" type="file" name="postfile[]" size="2mb" value="" style="display:inline-block" data-multiple-caption="{count} archivos seleccionados" multiple="">
           <label for="postfile"><span>Subir Foto</span></label>
             <input type="number" name="group_id" value="1" hidden>
             <button type="submit" class="btn btn-primary pull-right">Postear</button>
           </form>

        </div>
    </div>

    <div class="row">
      @foreach ($posts as $post)
        @if ($post->group->group_name != "general")
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white">
            <div class="row">
              <div class="col-sm-12">
                <span class="font-size-medium">
                  <img src="img/{{$post->user->image->src}}" class="img-square" height="40" width="40" alt="Avatar">
                  <a href="/usuario/{{$post->user->id}}">{{ $post->user->name }}</a>

                  @if ($post->user->id === \Auth::user()->id )
                    <form class="inline-form" method="post" action="/posteo/{{$post->id }}/borrar" enctype="multipart/form-data">
                      {{ csrf_field() }}
                    <button type="submit" id="btn-erase" class="btn-erase pull-right">X</button>
                    </form>
                  @endif

                </span>
                <p class="font-size-medium">
                   {{ $post->post_text }}
                </p>
              </div>
            </div>
            @include('partials.showimage')
            <span class="icon-post pull-right" style="margin-right:-10;"><a href="{{$post->group->group_name}}/{{\Auth::user()->id}}"><i class="{{$post->group->icon}}"></i></a></span>
          </div>
        @else
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white">
            <div class="row">
              <div class="col-sm-12">
                <p class="font-size-medium">
                  <img src="img/{{$post->user->image->src}}" class="img-square" height="40" width="40" alt="Avatar">
                  <a href="/usuario/{{$post->user->id}}">{{ $post->user->name }}</a>
                </p>
                @if ($post->user->id === \Auth::user()->id )
                  <form class="inline-form" method="post" action="/posteo/{{$post->id }}/borrar" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <button type="submit" id="btn-erase" class="btn-erase pull-right">X</button>
                  </form>
                @endif

                <p class="font-size-medium">
                   {{ $post->post_text }}
                </p>
              </div>
            </div>
            @include('partials.showimage')
            <span class="icon-post pull-right" style="margin-right:-10;"><a href="#"><i class="{{$post->group->icon}}"></i></a></span>
          </div>
        @endif
      @endforeach
    </div>

  </div>

  @include('partials.rightbar')

</div>
</div>
<!-- Finish MainContainer -->
@endsection

@extends('partials.footerkdf')
