@extends("../layouts/plantilla")
@section('nav')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Venta</h2>
        </div>

        <form method="post" action="/pedidos">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputCodigoV">Código de venta:</label>
                    <input type="number" class="form-control" id="inputCodigoV" placeholder="ID de la venta" name="id_venta">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputCodigoC">Código de cliente:</label>
                    <input type="number" class="form-control" id="inputCodigoC" placeholder="ID del cliente"
                        name="cliente_id">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputVendedor">Código de vendedor:</label>
                    <input type="number" class="form-control" id="inputVendedor" placeholder="ID del vendedor"
                        name="vendedor_id">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputProducto">Código de producto:</label>
                    <input type="number" class="form-control" id="inputProducto" placeholder="ID del producto"
                        name="producto_id">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputFecha">Fecha de venta:</label>
                    <input type="date" class="form-control" id="inputFecha" placeholder="Fecha de venta"
                        name="date_register">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputCantidad">Catidad:</label>
                    <input type="number" class="form-control" id="inputCantidad" placeholder="Cantidad de producto"
                        name="cantidad">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputPrice">Precio:</label>
                    <input type="number" class="form-control" id="inputPrice" placeholder="Precio del producto"
                        name="price">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputTotal">Total:</label>
                    <input type="number" class="form-control" id="inputTotal" placeholder="Cantidad total"
                        name="cantidad_total">
                </div>
            </div>


            {{ csrf_field() }}
            <input class="btn btn-primary" type="submit" value="Registrar Pedido" name="Enviar">
        </form>
    </main>

@endsection
