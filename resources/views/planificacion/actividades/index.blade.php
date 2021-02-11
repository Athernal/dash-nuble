@extends('navigation-menu')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('actividades') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('importActividades') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                    <div class="form-group">
                        <label for="file">Seleccione el archivo a cargar</label>
                            <input class="form form-control" type="file" name="file">
                    </div>
                    <hr>
                    <button class="btn-sm float-right">Importar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="card-header">
        <h5>Lista de actividades existentes</h5>
    </div>
    <div class="card-body">
        <table style="table-layout:fixed;" id="actividad" class="table table-hover data-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Periodicidad</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Fecha Termino</th>
                    <th scope="col">Personas Asignadas</th>
                    <th scope="col">Cargo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($actividades as $actividad)
                    <tr>
                        <th scope="row">{{ $actividad->id }}</th>
                        <td>{{ $actividad->nombre }}</td>
                        <td>{{ $actividad->periodicidad }}</td>
                        <td>{{ $actividad->fechaInicio }}</td>
                        <td>{{ $actividad->fechaTermino }}</td>
                        <td>{{ $actividad->personasAsignadas }}</td>
                        <td>{{ $actividad->cargo }}</td>
                        {{--<td>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ver
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="{{ route('cuenta.show', $cuenta->id) }}">Ver</a>
                                    <a class="dropdown-item" href="{{ route('cuenta.edit', $cuenta->id) }}">Editar</a>
                                </div>
                            </div>
                        </td>--}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div> 
</x-app-layout>
@section('content')

@endsection