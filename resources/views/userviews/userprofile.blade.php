@extends('layouts.app')
@section('titulo')
  Mi perfil - {{$user->name}}
@endsection

@section('content')

<div class="container">
<div class="row">

  @include('partials.userbar')

  <div id="ccol" class="col-sm-7 fixed-top">

    <div class="row">
      @foreach ($posts as $post)
        @if ($post->group->group_name != "general")
          <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white">
            <div class="row">
              <div class="col-sm-12">
                <p class="font-size-medium">
                  <a href="/usuario/{{$post->user->id}}">{{ $post->user->name }}</a> el {{$post->created_at}}
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12" style="padding-right:0px;">
                <p class="font-size-large"><img src="/img/{{$post->user->image->src}}" class="img-square" height="40" width="40" alt="Avatar"> {{ $post->post_text }}</p>
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
                  <a href="/usuario/{{$post->user->id}}">{{ $post->user->name }}</a> el {{$post->created_at}}
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12" style="padding-right:0px;">
                <p class="font-size-large"><img src="img/{{$post->user->image->src}}" class="img-square" height="40" width="40" alt="Avatar"> {{ $post->post_text }}</p>
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
