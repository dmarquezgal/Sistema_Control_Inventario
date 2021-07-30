@extends("../layouts/plantilla")
@section('nav')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Información Vendedor</h2>

            <form action="/empleados/{{ $empleado->id }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-danger" type="submit" value="Eliminar Usuario">
            </form>
        </div>

        <form method="post" action="/empleados/{{ $empleado->id }}">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputNombre">Nombre:</label>
                    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="Nombre"
                        value="{{ $empleado->nombre }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail">E-mail</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Correo electrónico" name="email"
                        value="{{ $empleado->email }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword">Contraseña:</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password"
                        value="{{ $empleado->password }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputRole">Tipo de usuario:</label>
                    <select class="form-control" id="inputRole" name="Role" value="{{ $empleado->role }}">
                        <option value="Vendedor">Vendedor</option>
                        <option value="Admin">Administrador</option>
                    </select>
                </div>
            </div>

            {{ csrf_field() }}
            <br>
            <input type="hidden" name="_method" value="PUT">
            <input class="btn btn-warning" type="submit" value="Editar Usuario" name="Enviar">
        </form>

    </main>

@endsection
