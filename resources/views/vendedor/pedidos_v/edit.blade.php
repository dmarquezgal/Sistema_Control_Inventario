@extends("../layouts/template")

@section('nav')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Información de la Venta</h2>
            <form action="/pedidos/{{ $pedidos->id }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-danger" type="submit" value="Eliminar Venta">
            </form>
        </div>

        <form method="post" action="/pedidos/{{ $pedidos->id }}">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputCodigoV">Código de venta:</label>
                    <input type="number" class="form-control" id="inputCodigoV" placeholder="ID de venta" name="id_venta"
                        value="{{ $pedidos->id_ventas }}">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputCodigoC">Código de cliente:</label>
                    <input type="number" class="form-control" id="inputCodigoC" placeholder="ID del cliente"
                        name="cliente_id" value="{{ $pedidos->id_cliente }}">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputVendedor">Código de vendedor:</label>
                    <input type="number" class="form-control" id="inputVendedor" placeholder="ID del vendedor"
                        name="vendedor_id" value="{{ $pedidos->id_user }}">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputProducto">Código de producto:</label>
                    <input type="number" class="form-control" id="inputProducto" placeholder="ID del producto"
                        name="producto_id" value="{{ $pedidos->id_productos }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputFecha">Fecha de venta:</label>
                    <input type="date" class="form-control" id="inputFecha" placeholder="Fecha de venta"
                        name="date_register" value="{{ $pedidos->date_sell }}">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputCantidad">Cantidad:</label>
                    <input type="number" class="form-control" id="inputCantidad" placeholder="Cantidad de producto"
                        name="cantidad" value="{{ $pedidos->quantity }}">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputPrice">Precio:</label>
                    <input type="number" class="form-control" id="inputPrice" placeholder="Precio del producto" name="pric
                        value=" {{ $pedidos->price }}">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputTotal">Total:</label>
                    <input type="number" class="form-control" id="inputTotal" placeholder="Cantidad total"
                        name="cantidad_total" value="{{ $pedidos->total }}">
                </div>
            </div>

            <br>
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <input class="btn btn-warning" type="submit" value="Actualizar Venta" name="Enviar">
        </form>
    </main>

@endsection
