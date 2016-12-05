@extends('layouts.app')
@section('titulo')
  Doctores
@endsection
@section('content')
  @foreach ($doctors as $doctor)
    <p>
      <h4>{{$doctor->name}}</h4>
    </p>
  @endforeach

@endsection
