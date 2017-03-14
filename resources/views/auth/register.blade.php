@extends('layouts.app')

@section('content')
<div class="container" ng-init="tab = 1" ng-controller="RegisterController as register">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 fixed-top font-size-medium ">
          <section >

            <ul class="nav nav-pills">
              <li id="user-pill">
                <a href="#">Usuario</a>
              </li>
              <li id="doctor-pill" >
                <a href="#">Doctor</a>
              </li>
            </ul>
            {{-- User Registry Form --}}
            <div class="panel panel-default" id="user-form" >
                <div class="panel-body">
                    <form  class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre y Apellido</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fecha_de_nacimiento') ? ' has-error' : '' }}">
                            <label for="fecha_de_nacimiento" class="col-md-4 control-label">Fecha de Nacimiento</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="fecha_de_nacimiento" value="{{ old('fecha_de_nacimiento') }}" required autofocus>

                                @if ($errors->has('fecha_de_nacimiento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_de_nacimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
                            <label for="genero" class="col-md-4 control-label">Género</label>

                            <div class="col-sm-6 col-sm-offset-6">

                                <input  type="radio"  name="genero" value="F"  checked>Femenino
                                <input  type="radio"  name="genero" value="M" >Masculino

                                @if ($errors->has('genero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('genero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="imagen" class="col-md-4 control-label">Imágen Perfil</label>
                            <input id="file" name="file" class="inputfile" type="file" size="2mb" style="display:inline-block" data-multiple-caption="{count} archivos seleccionados" multiple="" >
                            <label for="file" class="col-sm-offset-3"><span >Subir Foto</span></label>


                            {{-- <input id="postfile" class="inputfile" type="file" name="postfile[]" size="2mb" value="" style="display:inline-block" data-multiple-caption="{count} archivos seleccionados" multiple="">
                          <label for="postfile"><span>Subir Foto</span></label>
                          </label> --}}

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary mgtop20 pull-right mgright25">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            {{-- Doctor Registry Form --}}
            <div class="panel panel-default" id="doctor-form" style="display:none">
                <div class="panel-body" >
                  <form  class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data" ng-show="register.isSelected(2)">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Nombre Doctor</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">E-Mail </label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">Contraseña</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('fecha_de_nacimiento') ? ' has-error' : '' }}">
                          <label for="fecha_de_nacimiento" class="col-md-4 control-label">Fecha de Nacimiento</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="fecha_de_nacimiento" value="{{ old('fecha_de_nacimiento') }}" required autofocus>

                              @if ($errors->has('fecha_de_nacimiento'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('fecha_de_nacimiento') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
                          <label for="genero" class="col-md-4 control-label">Género</label>

                          <div class="col-sm-6 col-sm-offset-6">

                              <input  type="radio"  name="genero" value="F"  checked>Femenino
                              <input  type="radio"  name="genero" value="M" >Masculino

                              @if ($errors->has('genero'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('genero') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="imagen" class="col-md-4 control-label">Imágen Perfil</label>
                          <input id="file" name="file" class="inputfile" type="file" size="2mb" style="display:inline-block" data-multiple-caption="{count} archivos seleccionados" multiple="" >
                          <label for="file" class="col-sm-offset-3"><span >Subir Foto</span></label>


                          {{-- <input id="postfile" class="inputfile" type="file" name="postfile[]" size="2mb" value="" style="display:inline-block" data-multiple-caption="{count} archivos seleccionados" multiple="">
                        <label for="postfile"><span>Subir Foto</span></label>
                        </label> --}}

                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary mgtop20 pull-right mgright25">
                                  Registrarse
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>

          </section>
        </div>
    </div>
</div>

@endsection
@extends('partials.footerkdf')
