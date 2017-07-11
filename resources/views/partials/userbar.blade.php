<div id="lcol" class="col-sm-3 bkg-white brd-top shw-ltl-nav fixed-top" onscroll="myFunction()">

  <div class="pdtop20">
    @if (is_object(\Auth::user()->image))
      <img src="/img/{{$user->image->src}}" class="img-square brd-phto " height="150" width="150" alt="Avatar">
    @endif
      <p class="font-size-large"><a href="/usuario/{{$user->id }}">{{$user->name}}</a></p>
    </div>
  <div class="mgtop20">
      <div class="row margin-btn-10">
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
          <label for="amigos"><a href="#">Amigos</a></label>
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
      <h4><a href="#">Hijos</a></h4>
      <div class="row margin-btn-10">
        <div class="col-sm-2">
          <span class="icon"><i class="fa fa-child"></i></span>
        </div>
        <div class="col-sm-10">
          @if (is_object($user->UserSecondaries->hijos))
             <label for="hijos">{{$user->UserSecondaries->hijos}}</label>
          @endif
        </div>
      </div>
      <h4>Grupos Favoritos</h4>
      <div class="row margin-btn-10">
        <div class="col-sm-2">
          <span class="icon"><i class="{{$user->UserSecondaries->group->icon}}"></i></span>
        </div>
        <div class="col-sm-10">
          @if (is_object($user->UserSecondaries->group->group_name))
            <label for="grupo_favorito" class="capitalize"><a href="/{{$user->UserSecondaries->group->group_name}}">{{$user->UserSecondaries->group->group_name}}</a></label>
          @endif
        </div>
      </div>

      <h4><a href="#">Obra Social</a></h4>
      <div class="row margin-btn-10">
        <div class="col-sm-2">
          <span class="icon"><i class="fa fa-id-card"></i></span>
        </div>
        <div class="col-sm-10">
          <label for="obra_social">{{$user->UserSecondaries->obrasocial}}</label>
        </div>
      </div>
      <h4><a href="#">Médicos Recomendados</a></h4>
      <div class="row margin-btn-10">
        <div class="col-sm-2">
          <span class="icon"><i class="fa fa-heartbeat"></i></span>
        </div>
        <div class="col-sm-10">
          <label for="doctor"><a href="/doctores">{{$user->UserSecondaries->doctor->name}}</a></label>
        </div>
      </div>
  </div>
  <div class="alert alert-info fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <a href="{{url ('/home/grupo')}}"><p><strong>¿Tienes sugerencias?</strong></p>
    Estaremos felices de recibir tu opinión</a>
  </div>
</div>
