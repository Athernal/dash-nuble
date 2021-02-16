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
                        <table id="funcionarios" class="table table-striped" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-xs font-medium">Nombre</th>
                                    <th scope="col" class="text-xs font-medium">Apellido Paterno</th>
                                    <th scope="col" class="text-xs font-medium">Apellido Materno</th>
                                    <th scope="col" class="text-xs font-medium">Unidad</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($funcionarios as $funcionario)
                                    <tr>
                                        <td class="text-xs font-medium">{{ $funcionario->nombre }}</td>
                                        <td class="text-xs font-medium">{{ $funcionario->apellidoP }}</td>
                                        <td class="text-xs font-medium">{{ $funcionario->apellidoM }}</td>
                                        <td class="text-xs font-medium">{{ $funcionario->conformaUnidad->nombre }}</td>
                                        <td><button type="button" class="btn btn-primary"><a
                                                    href="{{ route('funcionarios.show', $funcionario->id) }}">Ver
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
        $('#funcionarios').DataTable();
    });

</script>
