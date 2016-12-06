<div class="row">
  <div class="col-sm-12" style="padding-right:0px;">
    @forelse($post->imagespost as $image)
      <div class="imgpost">
        <a class="fancybox" rel="group" href="/img/{{ $image->src }}">
          <img src="/img/{{ $image->src }}" alt="{{ $post->name }}" class="img-responsive" />
        </a>
      </div>
    @empty
      <h5>
        No hay imágenes cargadas.
      </h5>
    @endforelse
  </div>
</div>
