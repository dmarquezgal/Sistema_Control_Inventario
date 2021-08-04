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
                    @foreach ($ventas as $ventas)
                    <tr>
                        <td>{{$ventas -> id}}</td>
                        
                        <td><a href="{{route("clientes.show", $ventas -> Codigo_Cliente)}}">CC-{{$ventas -> Codigo_Cliente}}</a></td>
                        <td>{{ $ventas -> Fecha_Venta }}</td>
                        <td><a href="{{route("empleados.show", $ventas -> Codigo_Vendedor)}}">CV-{{$ventas -> Codigo_Vendedor}}</a></td>
                        <td><a href="{{route("productos.show", $ventas -> Codigo_Producto)}}">CP-{{$ventas -> Codigo_Producto}}</a></td>
                        <td>{{$ventas -> Cantidad}}</a></td>
                        <td>${{$ventas -> Precio}}.00</td>
                        <td>${{$ventas -> Total}}.00</td>
                        <td><a href="{{route("pedidos.edit", $ventas -> id)}}"><strong>Ver mas</strong> </a></td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </main>
@endsection
