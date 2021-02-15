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
                        <table style="table-layout:fixed;" id="funcionario" class="min-w-full divide-y divide-gray-200" cellspacing="0" width="auto%">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-xs font-medium">Nombre</th>
                                    <th scope="col" class="text-xs font-medium">Apellido Paterno</th>
                                    <th scope="col" class="text-xs font-medium">Apellido Materno</th>
                                    <th scope="col" class="text-xs font-medium">Unidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($funcionarios as $funcionario)
                                    <tr>
                                        <td class="text-xs font-medium">{{ $funcionario->nombre }}</td>
                                        <td class="text-xs font-medium">{{ $funcionario->apellidoP }}</td>
                                        <td class="text-xs font-medium">{{ $funcionario->apellidoM }}</td>
                                        <td class="text-xs font-medium">{{ $funcionario->unidad }}</td>
                                        <td> {{ $funcionario->id }}<a href="ver-funcionarios" data-toggle="modal">Ver Detalles</a></button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="ver-funcionarios" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="form_funcionarios" action="{{ route('funcionarios.show') }}" method="post">
              @csrf
              <div class="modal-header">
                <h4 class="modal-title">Datos del Funcionario</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Nombre</label>
                </div>
                <div class="form-group">
                  <label>Rut</label>
                </div>
                <div class="form-group">
                  <label>Email</label>
                </div>
                <div class="form-group">
                  <label>Teléfono</label>
                </div>
              </div>
            </form>
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
