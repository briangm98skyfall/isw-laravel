@extends('guardiaEstudiantil.layout')

@section('head')
    @parent
@stop

@section('container')
<div class="container-fluid">
   <!-- <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a class="active" href="client-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; PLANIFICAR GUARDIA OBRERA</a>
        </li>

        <li>
            <a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR GUARDIA OBRERA</a>
        </li>
    </ul>-->
</div>
@section('contenedor')
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fab fa-dashcube fa-fw"></i> &nbsp; Sistema de Gestión de Guardia Obrero-Estudiantil
    </h3>
    <p class="text-justify">
        Universidad de Ciencias Informáticas (UCI)
    </p>
</div>
@show

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
                    <th>Grupo</th>
                    <th>Turno</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                <tr class="text-center">
                    <td>{{$estudiante->id}}</td>
                    <td>{{$estudiante->nombre}}</td>
                    <td>{{$estudiante->apellidos}}</td>
                    <td>{{$estudiante->facultad}}</td>
                    <td>{{$estudiante->fecha}}</td>
                    <td>{{$estudiante->grupo}}</td>
                    <td>{{$estudiante->turno}}</td>
                    <td>
                        <a href="{{route('guardiaEstudiantil.edit',$estudiante->id)}}" class="btn btn-success">
                            <i class="fas fa-sync-alt"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{route('guardiaEstudiantil.destroy',$estudiante->id)}}" method="POST">

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
