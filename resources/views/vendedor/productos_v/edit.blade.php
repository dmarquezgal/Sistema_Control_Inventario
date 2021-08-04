@extends("../layouts/template")
@section('nav')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Información del Producto</h2>
            <form action="/vendedor/productos_v/{{ $producto -> id }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-danger" type="submit" value="Eliminar Producto">
            </form>
        </div>

        <form method="post" action="/vendedor/productos_v/{{ $producto -> id }}">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputText">Nombre del producto:</label>
                    <input type="text" class="form-control" id="inputText" placeholder="Nombre del producto" name="Nombre"
                        value="{{$producto -> Nombre}}">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputText2">Precio del producto:</label>
                    <input type="number" class="form-control" id="inputText2" placeholder="Precio del producto"
                        name="Precio" value="{{ $producto -> Precio}}">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputText3">Stock del producto:</label>
                    <input type="number" class="form-control" id="inputText3" placeholder="Stock del producto" name="Stock"
                        value="{{ $producto -> Stock }}">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputText4">Precio de proveedor:</label>
                    <input type="number" class="form-control" id="inputText4" placeholder="Precio del proveedor"
                        name="PrecioP" value="{{ $producto -> Precio_proveedor }}">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputText5">Código de proveedor:</label>
                    <input type="number" class="form-control" id="inputText5" placeholder="Código del proveedor"
                        name="CodigoP" value="{{ $producto -> Codigo_Proveedor }}">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputText6">Fecha de registro:</label>
                    <input type="date" class="form-control" id="inputText6" placeholder="Código del proveedor" name="Fecha_registro"
                        value="{{ $producto -> Fecha_registro }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputText7">Descripción del producto:</label>
                    <input type="text" class="form-control" id="inputText7" placeholder="Descripción del Producto"
                        name="Descripcion" value="{{$producto -> Descripcion}}">
                </div>
            </div>

            {{ csrf_field() }}
            <br>
            <input type="hidden" name="_method" value="PUT">
            <input class="btn btn-warning" type="submit" value="Editar Producto" name="Enviar">
        </form>

    </main>

@endsection
