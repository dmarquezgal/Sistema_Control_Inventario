@extends("../layouts/template")

@section('nav')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Nuevo Producto</h2>
        </div>

        <form method="POST" action="/admin/productos">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputText">Nombre del producto:</label>
                    <input type="text" class="form-control" id="inputText" placeholder="Nombre del producto" name="Nombre">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputText2">Precio del producto:</label>
                    <input type="number" class="form-control" id="inputText2" placeholder="Precio del producto"
                        name="Precio">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputText3">Stock del producto:</label>
                    <input type="number" class="form-control" id="inputText3" placeholder="Stock del producto" name="Stock">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputText4">Precio de proveedor:</label>
                    <input type="number" class="form-control" id="inputText4" placeholder="Precio de proveedor"
                        name="Precio_proveedor">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputText5">Código de proveedor:</label>
                    <input type="number" class="form-control" id="inputText5" placeholder="Código de proveedor"
                        name="Codigo_Proveedor">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputText6">Fecha de registro:</label>
                    <input type="date" class="form-control" id="inputText6" placeholder="Fecha de registro" name="Fecha_registro">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputText7">Descripción del producto:</label>
                    <input type="text" class="form-control" id="inputText7" placeholder="Descripcion del Producto"
                        name="Descripcion">
                </div>
            </div>

            {{ csrf_field() }}
            <input class="btn btn-primary" type="submit" value="Crear Producto" name="Enviar">
        </form>
    </main>

@endsection
