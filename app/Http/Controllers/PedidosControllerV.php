<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Models\Producto;

class PedidosControllerV extends Controller
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
        return view("vendedor/pedidos_v.index", compact("ventas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("vendedor/pedidos_v.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $ventas = new Ventas;
        $ventas -> Codigo_Cliente = $request -> cliente_id;
        $ventas -> Fecha_Venta = $request ->  date_register;
        $ventas -> Codigo_Vendedor = $request -> vendedor_id;
        $ventas -> Codigo_Producto = $request -> producto_id;
        $ventas -> Cantidad = $request -> cantidad;
        $producto = Producto::findOrFail($request -> producto_id);
        $ventas -> Precio = $producto -> Precio;
        $ventas -> Total  = ($producto -> Precio * $request-> cantidad);
        $ventas -> save();
        return redirect("vendedor/pedidos_v");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ventas = Ventas::findOrFail($id);

        return view("vendedor/pedidos_v.edit", compact("ventas"));
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
        return redirect("vendedor/pedidos_v");
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
        return redirect("/vendedor/pedidos_v");
        }
    }
