@extends("layouts.plantilla")

@section('nav')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Clientes Frecuentes</h2>
            <a class="btn btn-info" href="{{ route('clientes.create') }}">Nuevo Cliente</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>RFC</th>
                        <th>Dirección</th>
                        <th>Número telefónico</th>
                        <th>E-mail</th>
                        <th>Fecha de registro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>CC-01</td>
                        <td>Cliente 01</td>
                        <td>MAGD911211B4</td>
                        <td>Av. Las Flores</td>
                        <td>7751148819</td>
                        <td>cliente@test.com</td>
                        <td>2021-07-05</td>
                        <td><a href=""><strong>Ver más</strong> </a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
