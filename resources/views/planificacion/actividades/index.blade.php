<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('actividades') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('importActividades') }}" method="POST" enctype="multipart/form-data">
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
                        <table id="actividades" class="table table-striped" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-xs font-medium">Nombre</th>
                                    <th scope="col" class="text-xs font-medium">Unidad</th>
                                    {{--<th scope="col" class="text-xs font-medium">Periodicidad</th>--}}
                                    <th scope="col" class="text-xs font-medium">Fecha Inicio</th>
                                    <th scope="col" class="text-xs font-medium">Fecha Término</th>
                                    <th scope="col" class="text-xs font-medium">&nbsp</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($actividades as $actividad)
                                    <tr>
                                        <td class="text-xs font-medium">{{ $actividad->nombre }}</td>
                                        <td class="text-xs font-medium">{{ $actividad->unidadAsignada->nombre }}</td>
                                        {{--<td class="text-xs font-medium">{{ $actividad->periodicidad }}</td>--}}
                                        <td class="text-xs font-medium">{{ $actividad->fechaInicio }}</td>
                                        <td class="text-xs font-medium">{{ $actividad->fechaTermino }}</td>
                                        <td><button type="button" class="btn btn-primary"><a
                                                    href="{{ route('actividades.show', $actividad->id) }}">Ver
                                                    Detalles</a></button></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">
                                            <center>Sin registros</center>
                                        </td>
                                    </tr>
                                @endforelse
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

{{-- Datatables --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#actividades').DataTable();
    });

</script>
