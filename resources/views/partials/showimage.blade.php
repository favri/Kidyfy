<div class="row">
  <div class="col-sm-12" style="padding-right:0px;">
    @forelse($post->imagespost as $image)
      <div class="imgpost">
        <a data-lightbox="{{$post->id}}" href="/img/{{ $image->src }}">
          <img src="/img/{{ $image->src }}" alt="{{ $post->name }}" class="img-responsive" />
        </a>
      </div>
    @empty
  @endforelse
  </div>
</div>
