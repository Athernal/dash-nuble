<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
                        <div class="card-header" STYLE="font-variant:small-caps">
                            Datalle del funcionario
                        </div>
                        <div class="card-body">
                            <table class="table" style="table-layout:fixed;">
                                <tr>
                                    <th>Rut:</th>
                                    <td>{{$funcionario->rut}}</td>
                                </tr>
                                <tr>
                                    <th>Nombre:</th>
                                    <td>{{$funcionario->nombre}}</td>
                                </tr>
                                <tr>
                                    <th>Apellido Paterno:</th>
                                    <td>{{$funcionario->apellidoP}}</td>
                                </tr>
                                <tr>
                                    <th>Apellido Materno:</th>
                                    <td>{{$funcionario->apellidoM}}</td>
                                </tr>
                                <tr>
                                    <th>e-mail:</th>
                                    <td>{{$funcionario->correo}}</td>
                                </tr>
                                <tr>
                                    <th>Calidad Jurídica:</th>
                                    <td>{{$funcionario->calidadJuridica}}</td>
                                </tr>
                                <tr>
                                    <th>Unidad:</th>
                                    <td>{{$funcionario->conformaUnidad->nombre}}</td>
                                </tr>
                                <tr>
                                    <th>Estado:</th>
                                    <td>@if($funcionario->estado == 1) <p class="bg-success text-white">Activo</p> @else 
                                        <p class="bg-danger text-white" text-align: center>Inactivo</p> @endif
                                </tr>
                            </table>
                            <div class="text-right">
                                <a href="{{ route('funcionarios.index') }}" class="btn btn-primary">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
