@extends("layouts.template")

@section('nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Productos</h2>
                <a class="btn btn-info"  href="{{route('productos_v.create')}}"> Nuevo Producto</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-sm text-center">
                    <thead>
                        <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Contenido</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                            <tr>
                            <td>CP-01</td>
                            <td>Ejemplo de producto</td>
                            <td>Este es un ejemplo de descripción</td>
                            <td>$270.00</td>
                            <td>50 gr.</td>
                            <td>
                            <a href=""><strong>Ver mas</strong> </a>
                            
                             </td>
                            </tr>
                    
                    </tbody>
                </table>
            </div>
        </main>
@endsection





