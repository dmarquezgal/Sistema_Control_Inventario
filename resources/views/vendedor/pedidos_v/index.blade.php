@extends("layouts.template")

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
                    @foreach ($ventas as $ventas)
                    <tr>
                        <td>{{$ventas -> id}}</td>
                        <td>{{$ventas -> Codigo_Cliente}}</td>
                        <td>{{ $ventas -> Fecha_Venta }}</td>
                        <td>{{$ventas -> Codigo_Vendedor}}</td>
                        <td><a href="{{route("productos_v.show", $ventas -> Codigo_Producto)}}">CP-{{$ventas -> Codigo_Producto}}</a></td>
                        <td>{{$ventas -> Cantidad}}</a></td>
                        <td>{{$ventas -> Precio}}</td>
                        <td>{{$ventas -> Total}}</td>
                        <td><a href="{{route("pedidos_v.edit", $ventas -> id)}}"><strong>Ver mas</strong> </a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </main>
@endsection
