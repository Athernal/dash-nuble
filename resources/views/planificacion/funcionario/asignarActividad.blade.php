<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('funcionarios') }}
        </h2>
    </x-slot>
    <div class="py-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header " STYLE="font-variant:small-caps">
                            Asignar Actividad
                        </div>
                        <div class="card-body">
                            <table class="table" style="table-layout:fixed;">
                                <tr>
                                    <th>Actividad:</th>
                                    <td>
                                        <select class="custom-select">
                                            <option selected>Seleccionar actividad</option>
                                            @foreach($funcionarios as $funcionario)
                                                @if($actividad->id_unidad == $funcionario->id_unidad)
                                                    <option value="">{{ $funcionario->nombre }} {{ $funcionario->apellidoP }} {{ $funcionario->apellidoM }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <div class="text-right">
                                <a href="{{ route('actividades.show') }}" class="btn btn-primary">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>