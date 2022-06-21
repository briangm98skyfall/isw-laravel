@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fab fa-dashcube fa-fw"></i> &nbsp; Sistema de Gestión de Guardia Obrero-Estudiantil
    </h3>
    <p class="text-justify">
        Universidad de Ciencias Informáticas (UCI)
    </p>
</div>
@stop

@section('content')
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs ">

        <li>
            <a href="{{route('guardiaObrera.create')}}"><i class="fas fa-plus fa-fw"></i> &nbsp; PLANIFICAR GUARDIA OBRERA</a>
        </li>
    </ul>
</div>
<div class="row">
<div class="col-xl-12">
    <form action="{{route('guardiaObrera.index')}}" method="GET">
        <div class="form-row">
            <div class="col-sm-4 my-1">
                <input type="text" class="form-control" name="texto" value="{{$texto}}">
            </div>
            <div class="col-auto my-1">
                <input type="submit" class="btn btn-primary" value="buscar">
            </div>
        </div>
    </form>
</div>
</div>
 <div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-dark table-sm">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Facultad</th>
                    <th>Fecha</th>
                    <th>Area</th>
                    <th>Turno</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($obreros as $obrero)
                <tr class="text-center">
                    <td>{{$obrero->id}}</td>
                    <td>{{$obrero->nombre}}</td>
                    <td>{{$obrero->apellidos}}</td>
                    <td>{{$obrero->facultad}}</td>
                    <td>{{$obrero->fecha}}</td>
                    <td>{{$obrero->area}}</td>
                    <td>{{$obrero->turno}}</td>
                    <td>
                        <a href="{{route('guardiaObrera.edit',$obrero->id)}}" class="btn btn-success">
                            <i class="fas fa-sync-alt"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{route('guardiaObrera.destroy',$obrero->id)}}" method="POST">

                            @csrf

                            @method('DELETE')

                            <button type="submit" class="btn btn-warning">

                                  <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
