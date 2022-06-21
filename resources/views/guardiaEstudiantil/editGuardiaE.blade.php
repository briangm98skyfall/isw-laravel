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
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="{{route('guardiaEstudiantil.create')}}"><i class="fas fa-plus fa-fw"></i> &nbsp; PLANIFICAR GUARDIA ESTUDIANTIL</a>
        </li>
        <li>
            <a href="{{route('guardiaEstudiantil.index')}}"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTAR GUARDIA ESTUDIANTIL</a>
        </li>

    </ul>
</div>
<div class="container-fluid">
    <form action="{{route('guardiaEstudiantil.update',$estudiante->id)}}" class="form-neon" autocomplete="off" name="F-insert-guardia" method="post" id="FormGuardia">

        @csrf
        @method('PUT')

        <fieldset>
            <legend><i class="fas fa-user"></i> &nbsp; Información básica</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="cliente_dni" class="bmd-label-floating">Nombre</label>
                            <input type="text" value='{{$estudiante->nombre}}' name="nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" title="El nombre solo puede contener caracteres de texto" class="form-control" id="cliente_dni" maxlength="30">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="cliente_nombre" class="bmd-label-floating">Apellidos</label>
                            <input type="text" value='{{$estudiante->apellidos}}' pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" title="El apellido solo puede contener caracteres de texto" class="form-control" name="apellidos" id="cliente_nombre" maxlength="50">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="cliente_apellido" class="bmd-label-floating">Facultad</label>
                            <input type="text" value='{{$estudiante->facultad}}' pattern="[0-9]{1,15}" title="La Facultad solo puede contener caracteres numericos y de un solo digito" class="form-control" name="facultad" id="cliente_apellido" maxlength="1">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="cliente_telefono" class="bmd-label-floating">Grupo</label>
                            <input type="text" value='{{$estudiante->grupo}}' pattern="[0-9]{1,4}" title="El grupo solo puede contener caracteres numericos y de 4 digitos" class="form-control" name="grupo" id="cliente_telefono" maxlength="4">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="cliente_direccion" class="bmd-label-floating"></label>
                            <input type="date" value='{{$estudiante->fecha}}' class="form-control" title="Coloque la fecha aqui" name="fecha" id="cliente_direccion" maxlength="20">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="cliente_direccion" class="bmd-label-floating">Turno</label>
                            <input type="text" value='{{$estudiante->turno}}' pattern="[0-9]{1,10}" title="El turno solo puede contener caracteres numericos" class="form-control" name="turno" id="cliente_direccionn" maxlength="1">
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <br><br><br>
        <p class="text-center" style="margin-top: 40px;">
           <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; ACTUALIZAR</button>
        </p>
    </form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
