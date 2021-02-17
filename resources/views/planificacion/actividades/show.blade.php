<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('actividades') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header " STYLE="font-variant:small-caps">
                            Detalle de la actividad
                        </div>
                        <div class="card-body">
                            <table class="table" style="table-layout:fixed;">
                                <tr>
                                    <th>Nombre:</th>
                                    <td>{{ $actividad->nombre }}</td>
                                </tr>
                                <tr>{{--forenea--}}
                                    <th>Objetivo vinculado:</th>
                                    <td>{{ $actividad->objetivoVinculado->nombre }}</td>
                                </tr>
                                <tr>
                                    <th>Periodicidad:</th>
                                    <td>{{ $actividad->periodicidad }}</td>
                                </tr>
                                <tr>
                                    <th>Producto estadístico:</th>
                                    <td>{{ $actividad->productoEstadistico }}</td>
                                </tr>
                                <tr>
                                    <th>Horas por persona:</th>
                                    <td>{{ $actividad->horaporPersona }}</td>
                                </tr>
                                <tr>
                                    <th>Volúmen:</th>
                                    <td>{{ $actividad->volumen }}</td>
                                </tr>
                                <tr>
                                    <th>Cantidad de personas asignadas:</th>
                                    <td>{{ $actividad->personasAsignadas }}</td>
                                </tr>
                                <tr>
                                    <th>Total horas:</th>
                                    <td>{{ $actividad->totalHoras }}</td>
                                </tr>
                                <tr>
                                    <th>Cargo:</th>
                                    <td>{{ $actividad->cargo }}</td>
                                </tr>
                                <tr>
                                    <th>Fecha inicio:</th>
                                    <td>{{ $actividad->fechaInicio }}</td>
                                </tr>
                                <tr>
                                    <th>Fecha termino:</th>
                                    <td>{{ $actividad->fechaTermino }}</td>
                                </tr>
                                
                                <tr>{{--foranea--}}
                                    <th>Unidad:</th>
                                    <td>{{ $actividad->unidadAsignada->nombre }}</td>
                                </tr>
                                <tr>
                                    <th>Estado:</th>
                                    <td><p class="bg-success text-white justify-content-center">{{ $actividad->estado == 1 ? 'Completa' : 'Incompleta' }}</p></td>
                                    {{--<p class="bg-danger text-white">This text represents danger.</p>--}}
                                </tr>
                            </table>
                            <div class="text-right">
                                <a href="{{ route('actividades.index') }}" class="btn btn-primary">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
