@extends("layouts.plantilla")

@section('nav')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Proveedores</h2>
            <a class="btn btn-info" href="{{ route('proveedores.create') }}">Nuevo Proveedor</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Número Telefónico</th>
                        <th>Dirección</th>
                        <th>E-mail</th>
                        <th>RFC</th>
                        <th>Fecha de registro</th>
                        <th>No. de cuenta</th>
                        <th>Compañía</th>
                        <th>Clave interbancaria</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PC-01</td>
                        <td>Proveedor 01</td>
                        <td>7752158598</td>
                        <td>Dirección del proveedor</td>
                        <td>proveedor@test.com</td>
                        <td>DAG981205B41</td>
                        <td>2021-05-12</td>
                        <td># de cuenta</td>
                        <td>Nike</td>
                        <td>65918187178171177</td>
                        <td>
                            <a href=""><strong>Ver más</strong></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
