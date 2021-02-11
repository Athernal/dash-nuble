<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('funcionarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('importFuncionario') }}" method="POST" enctype="multipart/form-data">
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
        <h5>Lista de funcionarios existentes</h5>
    </div>
    <div class="card-body">
        <table style="table-layout:fixed;" id="funcionario" class="table table-hover data-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Rut</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Calidad Juridica</th>
                    <th scope="col">Unidad</th>
                    <th scope="col">correo</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($funcionarios as $funcionario)
                    <tr>
                        <th scope="row">{{ $funcionario->id }}</th>
                        <td>{{ $funcionario->rut }}</td>
                        <td>{{ $funcionario->apellidoP }}</td>
                        <td>{{ $funcionario->apellidoM }}</td>
                        <td>{{ $funcionario->nombre }}</td>
                        <td>{{ $funcionario->calidadJuridica }}</td>
                        <td>{{ $funcionario->unidad }}</td>
                        <td>{{ $funcionario->correo }}</td>
                        <td>{{ $funcionario->estado }}</td>
    
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
hola
</div>
</x-app-layout>
