<div id="lcol" class="col-sm-3 bkg-white brd-top shw-ltl-nav fixed-top" onscroll="myFunction()">

  <div class="pdtop20">
    <p class="font-size-large">
      @if (is_object(\Auth::user()->image))
        <img src="/img/{{\Auth::user()->image->src}}" class="img-square" height="20" width="20" alt="Avatar">
      @endif
        <a href="/usuario/{{Auth::user()->id }}">{{\Auth::user()->name}}</a>
    </p>
  </div>
  <div class="mgtop20 ">
      <h4><a href="/grupos">Grupos</a></h4>
      <div class="row margin-btn-10 grouplist">
        <div class="col-sm-1 grouplist">
          <span class="icon"><i class="fa fa-hospital-o"></i></span>
        </div>
        <div class="col-sm-10 mgtop5 grouplist">
          <label for="establecimientos"><a href="/establecimientos"> Establecimientos Médicos</a></label>
        </div>
      </div>
      <div class="row margin-btn-10 grouplist">
        <div class="col-sm-1 grouplist">
          <span class="icon"><i class="fa fa-stethoscope"></i></span>
        </div>
        <div class="col-sm-10 mgtop5 grouplist">
          <label for="medicos"><a href="/medicos"> Médicos</a></label>
        </div>
      </div>
      <div class="row margin-btn-10 grouplist">
        <div class="col-sm-1 grouplist">
          <span class="icon"><i class="fa fa-briefcase"></i></span>
        </div>
        <div class="col-sm-10 mgtop4 grouplist">
          <label for="indumentaria"><a href="/indumentaria"> Indumentaria</a></label>
        </div>
      </div>
      <div class="row margin-btn-10 grouplist">
        <div class="col-sm-1 grouplist">
          <span class="icon"><i class="fa fa-graduation-cap"></i></span>
        </div>
        <div class="col-sm-10 mgtop4 grouplist">
          <label for="Colegios"><a href="/colegios"> Colegios</a></label>
        </div>
      </div>
      <div class="row margin-btn-10 grouplist">
        <div class="col-sm-1 grouplist">
          <span class="icon"><i class="fa fa-life-ring"></i></span>
        </div>
        <div class="col-sm-10 mgtop5 grouplist">
          <label for="colonias"><a href="/colonias"> Colonias</a></label>
        </div>
      </div>
  </div>
  <div class="mgtop20">
    <h4><a href="/doctores">Doctores</a></h4>
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
    <h4><a href="#">Establecimientos</a></h4>
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
