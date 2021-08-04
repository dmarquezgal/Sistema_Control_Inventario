@extends("layouts.plantilla")

@section('nav')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Productos</h2>
           
            <a class="btn btn-info" href="{{ route('productos.create') }}"> Nuevo Producto</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm text-justify">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $productos)
                    <tr>
                        <td>CP-{{$productos -> id}}</td>
                        <td>{{$productos -> Nombre}}</td>
                        <td>{{$productos -> Descripcion}}</td>
                        <td>${{$productos -> Precio}}.00</td>
                        <td>{{$productos -> Stock}} </td>
                      
                        <td>
                            <a href="{{route("productos.edit", $productos -> id)}}"><strong>Ver mas</strong> </a>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </main>
@endsection
