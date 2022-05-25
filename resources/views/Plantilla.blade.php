<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/841/841364.png">
  </head>
  <body>
  <div class="container">
      <a href="{{route('index')}}" class="btn btn-primary">Inicio</a>
      <a href="{{route('Estudiante')}}" class="btn btn-primary">Estudiantes</a>
      <a href="{{route('rating')}}" class="btn btn-primary">Maestros</a>
      <a href="{{route('nuevo')}}" class="btn btn-primary">Login</a>
  </div>
  <div class="container">
      @yield('seccion')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>