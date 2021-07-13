@extends("../layouts/plantilla")
@section('nav')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Pedido</h2>
            <form action="/pedidos/{{$pedidos->id}}" method="POST">
{{csrf_field()}}
<input type="hidden" name="_method" value="DELETE">
<input class="btn btn-danger" type="submit" value="Eliminar Pedido">
</form>
            </div>
            <form method="post"  action="/pedidos/{{$pedidos -> id}}" >
            <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Codigo de Cliente:</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="Numero de cliente"  name="cliente_id"  value="{{$pedidos -> cliente_id}}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Codigo de Empleado:</label>
      <input type="number" class="form-control" id="inputPassword4" placeholder="Id de vendedor" name="vendedor_id" value="{{$pedidos -> vendedor_id}}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Codigo del Producto:</label>
      <input type="number" class="form-control" id="inputPassword4" placeholder="Codigo del vendedor" name="codigo_producto" value="{{$pedidos -> codigo_producto}}">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Catidad:</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="Cantidad de Producto"  name="cantidad" value="{{$pedidos -> cantidad}}">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Fecha:</label>
      <input type="date" class="form-control" id="inputPassword4" placeholder="Fecha del Pedido"  name="fechapedido" value="{{$pedidos -> fechapedido}}">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Fecha de envio:</label>
      <input type="date" class="form-control" id="inputPassword4" placeholder="Fecha de envio" name="fechaenvio" value="{{$pedidos -> fechaenvio}}">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Estado del pedido:</label>
      <select class="form-control" id="exampleFormControlSelect1" name="estadopedido">
      <option value="{{$pedidos -> estadopedido}}" selected>{{$pedidos -> estadopedido}}</option>
      <option value="Pendiente">Pendiente</option>
      <option value="Entregado">Entregado</option>
      <option value="Cancelado">Cancelado</option>
    </select>
    </div>
  </div>
    <br>
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <input class="btn btn-warning" type="submit" value="Editar Pedido" name="Enviar" >
</form>
        </main>

@endsection