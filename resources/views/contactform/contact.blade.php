@extends('layouts.app')
@section('titulo')
  Contacto
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 fixed-top font-size-medium ">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('contact') }}" >
                        {{ csrf_field() }}

                        <div class="">
                            <label for="name" class="col-md-4 control-label">Nombre y Apellido:</label>

                            <div class="col-md-6">
                                <input id="name_contact" type="text" class="form-control" name="name_contact" required autofocus>
                            </div>
                            <label for="subject_contact" class="col-md-4 control-label">Asunto:</label>

                            <div class="col-md-6">
                                <input id="subject_contact" type="text" class="form-control" name="subject_contact" required autofocus>
                            </div>
                            <label for="contact_text" class="col-md-4 control-label">Consulta:</label>

                            <div class="col-md-6">
                                <textarea id="contact_text" type="text" class="form-control pull-right cnt-text" name="contact_text" required autofocus rows="8" ></textarea>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary mgtop20 pull-right mgright25">
                                    Enviar
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
