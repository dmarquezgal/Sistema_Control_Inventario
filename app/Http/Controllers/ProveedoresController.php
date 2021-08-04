<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;
class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proveedores= Proveedores::all();
        return view("admin/proveedores.index", compact("proveedores"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin/proveedores.create");
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
        $proveedor = new Proveedores;
        $proveedor -> Nombre = $request ->Nombre;
        $proveedor -> Numero_Telefonico = $request -> Numero_Telefonico;
        $proveedor ->Direccion = $request -> Direccion;
        $proveedor -> RFC= $request -> RFC;
        $proveedor -> Email = $request -> Email;
        $proveedor -> Fecha_registro = $request -> Fecha_registro;
        $proveedor -> No_cuenta = $request -> No_cuenta;
        $proveedor -> Compania= $request -> Compania;
        $proveedor -> Clave_interbancaria = $request -> Clave_interbancaria ;
        $proveedor -> save();

        return redirect("admin/proveedores");
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
        $proveedor = Proveedores::findOrFail($id);
        return view("admin/proveedores.edit", compact("proveedor"));
        
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
        $proveedores = Proveedores::findOrFail($id);
        $proveedores->update($request->all());
        return redirect("admin/proveedores");
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
        $proveedor = Proveedores::findOrFail($id);
        $proveedor -> delete();
        return redirect("admin/proveedores");

        
    }
}
