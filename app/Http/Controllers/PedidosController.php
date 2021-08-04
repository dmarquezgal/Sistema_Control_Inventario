<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Models\Producto;
class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ventas = Ventas::all();
        return view("admin/pedidos.index",compact("ventas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin/pedidos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $ventas = new Ventas;
        $ventas -> Codigo_Cliente = $request -> cliente_id;
        $ventas -> Fecha_Venta = $request ->  date_register;
        $ventas -> Codigo_Vendedor = $request -> vendedor_id;
        $ventas -> Codigo_Producto = $request -> producto_id;
        $ventas -> Cantidad = $request -> Cantidad;
        $producto = Producto::findOrFail($request -> producto_id);
        $ventas -> Total  = ($producto -> Precio * $request-> Cantidad);
        $ventas -> Precio = $producto -> Precio;
        $ventas -> save();

        return redirect("admin/pedidos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ventas = Ventas::findOrFail($id);

        return view("admin/pedidos.edit", compact("ventas")); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ventas = Ventas::findOrFail($id);
        $ventas -> Codigo_Cliente = $request -> cliente_id;
        $ventas -> Fecha_Venta = $request ->  date_register;
        $ventas -> Codigo_Vendedor = $request -> vendedor_id;
        $ventas -> Codigo_Producto = $request -> producto_id;
        $ventas -> Cantidad = $request -> cantidad;
        $ventas -> Precio = $request -> price;
        $ventas -> Total  = $request -> cantidad_total;
        $ventas -> save();
        return redirect("admin/pedidos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $venta = Ventas::findOrFail($id);
        $venta -> delete();
        return redirect("/admin/pedidos");
    }
    }
