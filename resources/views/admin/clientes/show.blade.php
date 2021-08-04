@extends("layouts.plantilla")

@section('nav')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Clientes Frecuentes</h2>
            <a class="btn btn-info" href="{{ route('clientes.create') }}">Nuevo Cliente</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>RFC</th>
                        <th>Dirección</th>
                        <th>Número telefónico</th>
                        <th>E-mail</th>
                        <th>Fecha de registro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>CC-{{$clientes -> id}}</td>
                        <td>{{$clientes -> Nombre}}</td>
                        <td>{{$clientes -> RFC}}</td>
                        <td>{{$clientes -> Direccion}}</td>
                        <td>{{$clientes -> Numero_Telefonico}}</td>
                        <td>{{$clientes -> Email}}</td>
                        <td>{{$clientes -> Fecha_registro}}</td>
                        <td> <a href="{{route("clientes.edit", $clientes -> id)}}"><strong>Ver mas</strong> </a></td>
                    </tr>
                  
                </tbody>
            </table>
        </div>
    </main>
@endsection
