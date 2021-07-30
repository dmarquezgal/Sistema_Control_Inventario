@extends("layouts.plantilla")

@section('nav')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Ventas</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                <thead>
                    <tr>
                        <th>Código de venta</th>
                        <th>Código de cliente</th>
                        <th>Fecha de venta</th>
                        <th>Código de vendedor</th>
                        <th>Código de producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>V-01</td>
                        <td>CC-01</a></td>
                        <td>2021-05-12</td>
                        <td>VC-01</a></td>
                        <td>CP-01</td>
                        <td>50</a></td>
                        <td>50.00</td>
                        <td>2500.00</td>
                        <td><a href=""><strong>Ver más</strong> </a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
