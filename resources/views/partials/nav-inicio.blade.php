<nav class="navbar navbar-light bkg-transparente">
  <div class="container-fluid col-xs-offset-3 col-sm-offset-0">
    <a href="{{ url('inicio')}}" class="navbar-left"><img src="img/logo-mashup.png" height="60"></a>
    <div class="logout">
      <a href="" class="">Hola {{\Auth::user()->nombre.",".\Auth::user()->apellido}}</a>
      <a href="{{ url('COMPLETAR')}}" class="navbar-right mgright10" >
          <button type="button" name="button" class="btn btn-primary btn-sm pull-right">Log Out</button>
      </a>

    </div>
  </div>
</nav>
