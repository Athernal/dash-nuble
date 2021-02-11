<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('funcionarios') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('importFuncionario') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="file">Seleccione el archivo a cargar</label>
                        <input class="form form-control" type="file" name="file">
                        <button class="btn-sm float-right">Importar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="py-1">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table style="table-layout:fixed;" id="funcionario" class="min-w-full divide-y divide-gray-200">
                            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-xs font-medium" width="4%">ID</th>
                    <th scope="col" class="text-xs font-medium" width="55%">Nombre</th>
                    <th scope="col" class="text-xs font-medium" width="6%">Periodicidad</th>
                    <th scope="col" class="text-xs font-medium" width="8%">Fecha Inicio</th>
                    <th scope="col" class="text-xs font-medium" width="8%">Fecha Termino</th>
                    <th scope="col" class="text-xs font-medium" width="6%">Personas Asignadas</th>
                    <th scope="col" class="text-xs font-medium" width="13%">Cargo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($actividades as $actividad)
                    <tr>
                        <th scope="row" class="text-xs font-medium">{{ $actividad->id }}</th>
                        <td class="text-xs font-medium">{{ $actividad->nombre }}</td>
                        <td class="text-xs font-medium">{{ $actividad->periodicidad }}</td>
                        <td class="text-xs font-medium">{{ $actividad->fechaInicio }}</td>
                        <td class="text-xs font-medium">{{ $actividad->fechaTermino }}</td>
                        <td class="text-xs font-medium">{{ $actividad->personasAsignadas }}</td>
                        <td class="text-xs font-medium">{{ $actividad->cargo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
</x-app-layout>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
</script>