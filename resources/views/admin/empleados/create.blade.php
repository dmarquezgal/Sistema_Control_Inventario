@extends("../layouts/plantilla")
@section('nav')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Empleado</h2>
        </div>

        <form method="post" action="/admin/empleados">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputNombre">Nombre:</label>
                    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="Nombre">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail">E-mail</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Correo electrónico" name="Email">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword">Contraseña:</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="Pass">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputRole">Tipo de usuario:</label>
                    <select class="form-control" id="inputRole" name="Tipo_usuario">
                        <option value="Vendedor">Vendedor</option>
                        <option value="Admin">Administrador</option>
                    </select>
                </div>
            </div>

            {{ csrf_field() }}
            <br>
            <input class="btn btn-primary" type="submit" value="Registrar Usuario" name="Enviar">
        </form>
    </main>

@endsection
