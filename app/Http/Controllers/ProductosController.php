<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Producto::orderBy("Nombre")->get();
        return view("admin/productos.index", compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin/productos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $producto = new Producto;
        $producto -> Nombre = $request-> Nombre;
        $producto -> Descripcion =$request-> Descripcion;
        $producto -> Fecha_registro = $request -> Fecha_registro;
        $producto -> Precio =$request-> Precio;
        $producto -> Stock = $request-> Stock;
        $producto -> Codigo_Proveedor = $request-> Codigo_Proveedor;
        $producto -> Precio_proveedor = $request-> Precio_proveedor;
        $producto->save();
        return redirect("admin/productos");
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
        $productos = Producto::findOrFail($id);
        return view("admin/productos.show", compact("productos"));
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
        $producto = Producto::findOrFail($id);
        return view("admin/productos.edit", compact("producto"));
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
        $producto = Producto::findOrFail($id);
        $producto -> Nombre = $request-> Nombre;
        $producto -> Descripcion =$request-> Descripcion;
        $producto -> Fecha_registro = $request -> Fecha_registro;
        $producto -> Precio =$request-> Precio;
        $producto -> Stock = $request-> Stock;
        $producto -> Codigo_Proveedor = $request-> Codigo_Proveedor;
        $producto -> Precio_proveedor = $request-> Precio_proveedor;
        $producto->save();
        return redirect("admin/productos");
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
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect("admin/productos");
    }
}
