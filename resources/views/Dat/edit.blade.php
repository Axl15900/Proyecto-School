@extends('plantilla')

@section('seccion')
<title>Edit</title>

@if(session('mensaje'))

<div class="alert alert-success">{{session('mensaje')}}</div>

@endif

<h1>Editar nota {{$notas -> id}}</h1>

<form action="{{route('Dat.update', [$notas -> id])}}" method="POST">
    @method('PUT')
@csrf

@error('nombre')
  <div class="alert alert-danger">El nombre es obligatorio</div>
@enderror

@error('descripcion')
  <div class="alert alert-danger">La descripcion es obligatorio</div>
@enderror


  <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{$notas-> nombre}}">
  <input type="text" name="descripcion" placeholder="Descripcion" 
  class="form-control mb-2" value="{{$notas-> descripcion}}">
  <button class="btn btn-primary btn-block" type="sumbit">Editar</button> <a href="{{route('rating')}}" class="btn btn-primary">Atras</a>
</form>

@endsection