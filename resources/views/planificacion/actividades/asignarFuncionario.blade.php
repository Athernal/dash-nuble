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
                            Asignar Funcionario
                        </div>
                        <div class="card-body">
                            <table class="table" style="table-layout:fixed;">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>-- Seleccionar funcionario --</option>
                                    @foreach ($funcionarios as $funcionario)
                                        <option value="{{ $funcionario->id }}">{{ $funcionario->nombre }} {{ $funcionario->apellidoP }} {{ $funcionario->apellidoM }}</option>
                                    @endforeach
                                  </select>
                            </table>
                            <div class="text-right">
                                <a href="{{ route('actividades.show', $actividad->id) }}" class="btn btn-primary">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

