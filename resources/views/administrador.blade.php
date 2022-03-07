    @extends('plantillas.principal')

    @section('titulodecadapagina')
        <title>HelpBox Videos</title>
    @endsection

    @section('botoncerrarsesion')
        <form class="d-flex" action="{{action([App\Http\Controllers\UsuariController::class,'logout'])}}" method="GET">
            <button class="btn btn-outline-dark" type="submit">Cerrar Sesión <i class="fa fa-sign-out"></i></button>
        </form>
    @endsection

    @section('bootstrap5.1')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @endsection

    @section('cssdecadapagina')
        <link rel="stylesheet" href="../resources/css/administrador.blade.css">
    @endsection


@section('contenido')
<div class="container">
  <div class="row">
    <div class="col-12 text-center">
    <button type="button" class="btn btn-danger gestionarusuarios">GESTIONAR USUARIOS</button>
    </div>

    <div class="dropdown col-12 col-offset-2 text-center">
        <button class="btn btn-danger opcionesdeusuario dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #104069;">
          OPCIONES DE USUARIO
        </button>
        <ul class="dropdown-menu" id="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Crear Carta Llamada</a></li>
          <li><a class="dropdown-item" href="#">Generar Gráficos</a></li>
          <li><a class="dropdown-item" href="#">Consultar Expedientes</a></li>
          <li><a class="dropdown-item" href="#">Consultar Ayuda</a></li>
        </ul>
    </div>
  </div>
</div>
<!-- End Botones -->
@endsection
