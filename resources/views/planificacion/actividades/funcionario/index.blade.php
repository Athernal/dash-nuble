<div class="card-header">
    <h5>Lista de actividades existentes</h5>
</div>
<div class="card-body">
    <table style="table-layout:fixed;" id="funcionario" class="table table-hover data-table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($actividades as $actividad)
                <tr>
                    <th scope="row">{{ $actividad->id }}</th>
                    <td>{{ $actividad->nombre }}</td>
                    <td>{{ $actividad->correo }}</td>
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