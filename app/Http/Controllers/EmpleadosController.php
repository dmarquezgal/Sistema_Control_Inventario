<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedores;
class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleado = Vendedores::all();
        return view("admin/empleados.index", compact("empleado"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin/empleados.create");
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
        $vendedor = new Vendedores;
        $vendedor ->  Nombre = $request -> Nombre ;
        $vendedor -> Email = $request -> Email ;
        $vendedor -> Pass= $request -> Pass;
        $vendedor -> Tipo_usuario = $request -> Tipo_usuario;
        $vendedor -> save();

        return redirect("admin/empleados");
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
        $empleado = Vendedores::findOrFail($id);
        return view("admin/empleados.edit", compact("empleado"));
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
        $empleado = Vendedores::findOrFail($id);
        return view("admin/empleados.edit", compact("empleado"));
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
        $empleados = Vendedores::findOrFail($id);
        $empleados -> update($request->all());
        return redirect("admin/empleados");
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
        $empleados = Vendedores::findOrFail($id);
        $empleados -> delete();

        return redirect("admin/empleados");
    }
}
