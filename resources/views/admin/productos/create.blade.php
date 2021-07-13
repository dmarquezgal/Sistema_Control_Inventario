@extends("../layouts/plantilla")
@section('nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Nuevo Producto</h2>
            </div>
            <form method="post" action="/productos" >

            <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Nombre del producto:</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre del producto"  name="Nombre">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Contenido del producto:</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Contenido del producto" name="Contenido">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Precio del producto:</label>
      <input type="number" class="form-control" id="inputPassword4" placeholder="Precio del producto"  name="Precio">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-12">
      <label for="inputPassword4">Descripcion del producto:</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Descripcion del Producto" name="Descripcion">
    </div>
    
  </div>

    {{csrf_field()}}
    <input class="btn btn-primary" type="submit" value="Crear Producto" name="Enviar">
</form>
        </main>

@endsection