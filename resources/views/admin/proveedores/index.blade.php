@extends("layouts.plantilla")

@section('nav')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Proveedores</h2>
            
            <a class="btn btn-info" href="{{ route('proveedores.create') }}">Nuevo Proveedor</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Número Telefónico</th>
                        <th>Dirección</th>
                        <th>E-mail</th>
                        <th>RFC</th>
                        <th>Fecha de registro</th>
                        <th>No. de cuenta</th>
                        <th>Compañía</th>
                        <th>Clave interbancaria</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proveedores as $proveedores)
                    <tr>
                        <td>PC{{$proveedores -> id}}</td>
                        <td>{{$proveedores -> Nombre}}</td>
                        <td>{{$proveedores -> Numero_Telefonico}}</td>
                        <td>{{$proveedores -> Direccion}}</td>
                        <td>{{$proveedores -> RFC}}</td>
                        <td>{{$proveedores -> Email}}</td>
                        <td>{{$proveedores -> Fecha_registro}}</td>
                        <td>{{$proveedores -> No_cuenta}}</td>
                        <td>{{$proveedores -> Compania}}</td>
                        <td>{{$proveedores -> Clave_interbancaria}}</td>
                        <td>
                            <a href="{{route("proveedores.edit", $proveedores -> id)}}"><strong>Ver mas</strong> </a>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </main>
@endsection
