@extends("layouts.template")

@section('nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Ventas</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-sm text-center">
                    <thead>
                        <tr>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th>Fecha Envio</th>
                        <th>Codigo de Cliente</th>
                        <th>Codigo de Vendedor</th>
                        <th>Codigo Producto</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                            <td>Pendiente</td>
                            <td>11-07-21</td>
                            <td>27-07-21</td>
                            <td>CC-01</a></td>
                            <td>VC-01</a></td>
                            <td>CP-01</a></td>
                            <td>15</td>
                            <td><a href=""><strong>Ver más</strong> </a></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </main>
@endsection





