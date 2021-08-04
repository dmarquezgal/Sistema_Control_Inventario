@extends("layouts.plantilla")

@section('nav')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Vendedores</h2>
            <a class="btn btn-info" href="{{ route('empleados.create') }}"> Nuevo Empleado</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>E-mail</th>
                        <th>Contraseña</th>
                        <th>Tipo de usuario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td>CE-{{$empleado -> id}}</td>
                        <td>{{$empleado -> Nombre}}</td>
                        <td>{{$empleado -> Email}}</td>
                        <td>{{$empleado -> Pass}}</td>
                        <td>{{$empleado -> Tipo_usuario}}</td>
                        
                        <td>
                            <a href="{{route("empleados.edit", $empleado -> id)}}"><strong>Ver mas</strong> </a>
                        </td>
                    </tr>
                  
                </tbody>
            </table>
        </div>
    </main>
@endsection
