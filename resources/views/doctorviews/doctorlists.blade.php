@extends('layouts.app')
@section('titulo')
  Doctores - {{$user->name}}
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div id="lcol" class="col-sm-3 bkg-white brd-top fixed-top" onscroll="myFunction()">
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
          <h4><a href="/doctores/{{Auth::user()->id}}">Establecimientos</a></h4>
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
    <div class="col-sm-7 fixed-top margin-btn-60">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white">
          <div class="table-responsive">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por obra social">
            <table id="myTable" class="table table-hover">
              <thead>
              <tr>
                <th >Nombre</th>
                <th>Especialidad</th>
                <th>Obra Social</th>
              </tr>
              <tbody>
              @foreach ($doctors as $doctor)
                <tr>
                  <td>
                    {{$doctor->name}}
                  </td>
                  <td>
                    {{$doctor->especialidad}}
                  </td>
                  <td>
                    {{$doctor->obrasocial}}
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>

          </div>


        </div>
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

@endsection
@extends('partials.footerkdf')
