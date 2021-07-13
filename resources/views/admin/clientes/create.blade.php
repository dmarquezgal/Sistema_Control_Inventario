@extends("../layouts/plantilla")
@section('nav')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Cliente</h2>
            </div>
    <form method="post" action="/clientes" >
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputNombre">Nombre</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre"  name="nombre" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Apellido Paterno</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Apellido Paterno" name="apellido_paterno">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Apellido Materno</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Apellido Materno" name="apellido_materno">
    </div>
  </div>
     
    {{csrf_field()}}
    <br>
    <input class="btn btn-primary" type="submit" value="Registrar Cliente" name="Enviar">
</form>
        </main>


@endsection