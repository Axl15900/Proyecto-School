<style type="text/css">
.Box{
  background-color: aqua;
}
.Box-Maestros{
  background-color: red;
  text-align: center;
}
.Center{
  text-align: center;
}
.Create{
  position: absolute;
}
</style>

@extends('Plantilla')

@section('seccion')

  <title>Ratings</title>
  <br>
  <h4 class="Box-Maestros">Sitio exclusivo para maestros.</h4>
  <br>
  <h4 class="Box">En éste Sitio, los maestros pueden agregar, editar y eliminar las notas promedio con referencia al semestre 2022-1.</h4>
  
    <div class="Create">
      <h1>Agregar notas</h1>
      <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" id="nombre">
      <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" id="descripcion">
      <button class="btn btn-primary" type="sumbit" id="btn_add">Agragar</button>
    </div>

  <br><br><br><br>
  <h1 class="Center" >Notas 2022-1</h1>
  <br><br>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Calificación</th>
        <th scope="col">Accion</th>
      </tr>
    </thead>
    <tbody>
    @foreach($notas as $item)
      <tr>
        <th scope="row">{{$item -> id}}</th>
        <td>
        <a href="{{route('Dat.dato',[$item -> id])}}">{{$item -> nombre}}</a>
        </td>
        <td>{{$item -> descripcion}}</td>
        <td>
          <a href="{{route('Dat.edit',[$item->id])}}" class="btn  btn-warning btn-sm">Editar</a>
          
          <form action="{{route('Dat.delete', [$item->id])}}" method="POST" class="d-inline">
            @method('DELETE')
            @csrf
            <button class="btn  btn-danger btn-sm" type="submit">Eliminar</button>
          </form>
  
        </td>
      </tr>
    @endforeach()
    </tbody>
  </table>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function(){
        $('#btn_add').click(function(){

            var name = $('#nombre').val();
            var descripcion = $('#descripcion').val();

            $.ajax({
                method: "GET",
                url: "{{ route('Dat.create') }}",
                data: { 
                    name: name,
                    descripcion: descripcion,
                },
                success:function(response){
                  Swal.fire({
                  title: 'Agregado exitoso',
                  confirmButtonText: 'Ok',
                }).then((result) => {
                  if (result.isConfirmed) {
                    location. reload();
                  }
                  else{
                    location. reload();
                  }
                })
              }
            });
        });
    });
</script>
