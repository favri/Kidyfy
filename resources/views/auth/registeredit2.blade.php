@extends('layouts.app')

@section('titulo')
  Editar Perfil
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 fixed-top">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/usuario2/{{\Auth::user()->id}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}

                        <div class="form-group{{ $errors->has('hijos') ? ' has-error' : '' }}">
                            <label for="hijos" class="col-md-4 control-label">Hijos</label>
                            <div class="col-md-6">
                                <input id="hijos" type="text" class="form-control" name="hijos" value="{{ $usersecondarie->hijos }}" required autofocus>

                                @if ($errors->has('hijos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hijos') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('group_id') ? ' has-error' : '' }}">
                            <label for="group_id" class="col-md-4 control-label">Grupo</label>
                            <div class="col-md-6">
                                <select name="group_id" class="form-control">
                                  @foreach($grupos as $grupo)
                                    <option value="{{ $grupo->id }}">{{ $grupo->group_name }}</option>
                                  @endforeach
                                </select>

                                @if ($errors->has('group_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('group_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="obrasocial" class="col-md-4 control-label">Obra Social</label>
                            <div class="col-md-6">
                                <input id="obrasocial" type="text" class="form-control" name="obrasocial" value="{{ $usersecondarie->obrasocial }}" required>

                                @if ($errors->has('obrasocial'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('obrasocial') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('doctor_id') ? ' has-error' : '' }}">
                            <label for="doctor_id" class="col-md-4 control-label">Doctor</label>

                            <div class="col-md-6">
                              <select name="doctor_id" class="form-control">
                                @foreach($doctores as $doctor)
                                  <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                @endforeach
                              </select>

                                @if ($errors->has('doctor_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('doctor_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary mgtop20 pull-right mgright25">
                                    Confirmar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('partials.footerkdf')
