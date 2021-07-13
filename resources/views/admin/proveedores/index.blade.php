@extends("layouts.plantilla")

@section('nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Proveedores</h2>
                <a class="btn btn-info"  href="{{route('proveedores.create')}}"> Nuevo Proveedor</a>
            </div>
            
            <div class="table-responsive">
                <table class="table table-striped table-sm text-center">
                    <thead>
                        <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                            <td>PC-01</td>
                            <td>Proveedor 01</td>
                            <td>Apellido 01</td>
                            <td>Apellido 02</td>
    
                            <td>
                            <a href=""><strong>Ver más</strong> </a>
                             </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </main>
@endsection





