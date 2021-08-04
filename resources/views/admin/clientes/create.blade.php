@extends("../layouts/plantilla")

@section('nav')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Cliente</h2>
        </div>

        <form method="post" action="/admin/clientes">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputNombre">Nombre:</label>
                    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="Nombre">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputRfc">RFC:</label>
                    <input type="text" class="form-control" id="inputRfc" placeholder="RFC" name="RFC">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputDireccion">Dirección:</label>
                    <input type="text" class="form-control" id="inputDireccion" placeholder="Dirección" name="Direccion">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputTelefono">Número telefónico:</label>
                    <input type="number" class="form-control" id="inputTelefono" placeholder="Número telefónico"
                        name="Numero_Telefonico">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail">E-mail:</label>
                    <input type="text" class="form-control" id="inputTelefono" placeholder="Correo electrónico"
                        name="Email">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail">Fecha de registro:</label>
                    <input type="date" class="form-control" id="inputTelefono" placeholder="Fecha de registro" name="Fecha_registro">
                </div>
            </div>

            {{ csrf_field() }}
            <br>
            <input class="btn btn-primary" type="submit" value="Registrar Cliente" name="Enviar">
        </form>
    </main>

@endsection
