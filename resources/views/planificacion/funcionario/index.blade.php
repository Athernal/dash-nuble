<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('funcionarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-32 lg:px-16">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('importFuncionario') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="file">Seleccione el archivo a cargar</label>
                        <input class="form form-control" type="file" name="file">
                        <button class="btn-sm float-middle">Importar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
        <input 
            wire:model="search"
            class="form-input rounded-md shadow-sm mt-1 block w-full" 
            type="text" 
            laceholder="Buscar..."
        >
        <div class="form-input rounded-md shadow-sm mt-1 ml-6 block">
            <select wire:model="perPage" class="outline-none text-gray-500 text-sm">
                <option value="5">5 por página</option>
                <option value="10">10 por página</option>
                <option value="15">15 por página</option>
                <option value="25">25 por página</option>
                <option value="50">50 por página</option>
            </select>
        </div>
    </div>  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <div class="card-body">
                                    <table style="table-layout:fixed;" id="funcionario"
                                        class="table table-hover data-table min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-small text-gray-500 uppercase tracking-wider">
                                                    ID</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-small text-gray-500 uppercase tracking-wider">
                                                    Rut</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-small text-gray-500 uppercase tracking-wider">
                                                    Apellido Paterno</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-small text-gray-500 uppercase tracking-wider">
                                                    Apellido Materno</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-small text-gray-500 uppercase tracking-wider">
                                                    Nombre</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-small text-gray-500 uppercase tracking-wider">
                                                    Calidad Juridica</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-small text-gray-500 uppercase tracking-wider">
                                                    Unidad</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-small text-gray-500 uppercase tracking-wider">
                                                    correo</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-small text-gray-500 uppercase tracking-wider">
                                                    Estado</th>
                                                <th scope="col" class="relative px-6 py-3">
                                                   <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($funcionarios as $funcionario)
                                                <tr class="px-6 py-4 whitespace-nowrap">
                                                    <th scope="row">{{ $funcionario->id }}</th>
                                                    <td class="text-sm font-small text-gray-900">{{ $funcionario->rut }}</td>
                                                    <td class="text-sm font-small text-gray-900">{{ $funcionario->apellidoP }}</td>
                                                    <td class="text-sm font-small text-gray-900">{{ $funcionario->apellidoM }}</td>
                                                    <td class="text-sm font-small text-gray-900">{{ $funcionario->nombre }}</td>
                                                    <td class="text-sm font-small text-gray-900">{{ $funcionario->calidadJuridica }}</td>
                                                    <td class="text-sm font-small text-gray-900">{{ $funcionario->unidad }}</td>
                                                    <td class="text-sm font-small text-gray-900">{{ $funcionario->correo }}</td>
                                                    <td class="text-sm font-small text-gray-900">{{ $funcionario->estado }}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-small">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
