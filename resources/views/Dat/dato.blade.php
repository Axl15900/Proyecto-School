@extends('Plantilla')

@section('seccion')
  <h1>Detalle de nota:</h1>
  <br>
  <h4>Id: {{$data -> id}}</h4>
  <h4>Nombre: {{$data -> nombre}}</h4>
  <h4>Descripcion: {{$data -> descripcion}}</h4>
  <h4>Fecha: {{$data -> created_at}}</h4>
  <br>
  <a href="{{route('rating')}}" class="btn btn-primary">Atras</a>
@endsection