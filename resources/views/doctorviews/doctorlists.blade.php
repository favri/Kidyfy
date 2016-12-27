@extends('layouts.app')
@section('titulo')
  Doctores - {{$user->name}}
@endsection
@section('content')
  <div class="container">
    <div class="row">
      @include('partials.barraizquierda')

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

    <div id="rcol" class="col-sm-2 bkg-white brd-top fixed-top shw-ltl-nav">

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
