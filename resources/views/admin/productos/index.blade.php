@extends("layouts.plantilla")

@section('nav')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Productos</h2>
            <a class="btn btn-info" href="{{ route('productos.create') }}">Nuevo Producto</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Precio de proveedor</th>
                        <th>Código de vendedor</th>
                        <th>Fecha de registro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>CP-01</td>
                        <td>Ejemplo de producto</td>
                        <td>Este es un ejemplo de descripción</td>
                        <td>$270.00</td>
                        <td>50</td>
                        <td>$250.00</td>
                        <td>PC-01</td>
                        <td>2021-07-29</td>
                        <td>
                            <a href=""><strong>Ver más</strong> </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </main>

@endsection
