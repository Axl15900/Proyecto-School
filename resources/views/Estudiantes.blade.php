<style type="text/css">
.Box{
  background-color: aqua;
}
.Center{
  text-align: center;
}

</style>

@extends('Plantilla')

@section('seccion')
<title>Estudiantes</title>
<br>
<h4 class="Box">En éste Sitio, los estudiantes pueden consultar la nota promedio con referencia al semestre 2022-1.</h4>
<br>
<h1 class="Center" >Notas 2022-1</h1>
<br> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Calificación</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item -> id}}</th>
      <td>{{$item -> nombre}}</td>
      <td>{{$item -> descripcion}}</td>
    </tr>
  @endforeach()
  </tbody>
</table>
{{$data->links()}}
@endsection
