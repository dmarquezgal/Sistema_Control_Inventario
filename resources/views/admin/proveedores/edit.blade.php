@extends("../layouts/plantilla")
@section('nav')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Información Vendedor</h2>

            <form action="/admin/proveedores/{{ $proveedor->id }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-danger" type="submit" value="Eliminar Vendedor">
            </form>
        </div>

        <form method="post" action="/admin/proveedores/{{ $proveedor->id }}">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputNombre">Nombre:</label>
                    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="Nombre"
                        value="{{ $proveedor->Nombre}}">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputPhone">Número telefónico:</label>
                    <input type="number" class="form-control" id="inputPhone" placeholder="Número telefónico:" name="Numero_Telefonico"
                        value="{{ $proveedor->Numero_Telefonico }}">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputDireccion">Dirección:</label>
                    <input type="text" class="form-control" id="inputDireccion" placeholder="Dirección" name="Direccion"
                        value="{{ $proveedor->Direccion }}">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail">E-mail:</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Correo electrónico" name="Email"
                        value="{{ $proveedor->Email }}">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputRfc">RFC:</label>
                    <input type="text" class="form-control" id="inputRfc" placeholder="RFC" name="RFC"
                        value="{{ $proveedor->RFC }}">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputDate">Fecha de registro:</label>
                    <input type="date" class="form-control" id="inputDate" placeholder="Fecha de registro" name="Fecha_registro"
                        value="{{ $proveedor->Fecha_registro }}">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputAccount">Número de cuenta:</label>
                    <input type="number" class="form-control" id="inputAccount" placeholder="Número de cuenta"
                        name="No_cuenta" value="{{ $proveedor->No_cuenta }}">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputCompany">Nombre de la compañía:</label>
                    <input type="text" class="form-control" id="inputCompany" placeholder="Compañía" name="Compania"
                        value="{{ $proveedor->Compania}}">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputInterbank">Clave interbancaria:</label>
                    <input type="number" class="form-control" id="inputInterbank" placeholder="Clave interbancaria"
                        name="Clave_interbancaria" value="{{ $proveedor->Clave_interbancaria }}">
                </div>
            </div>

            {{ csrf_field() }}
            <br>
            <input type="hidden" name="_method" value="PUT">
            <input class="btn btn-warning" type="submit" value="Editar Vendedor" name="Enviar">
        </form>

    </main>

@endsection
