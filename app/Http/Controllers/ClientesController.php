<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = Clientes::all();
        return view("admin/clientes.index", compact("clientes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin/clientes.create");
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
        $cliente = new Clientes;
        $cliente-> Nombre = $request ->Nombre;
        $cliente -> RFC= $request -> RFC;
        $cliente -> Direccion = $request -> Direccion;
        $cliente -> Numero_Telefonico = $request -> Numero_Telefonico;
        $cliente -> Email = $request -> Email;
        $cliente -> Fecha_registro  = $request -> Fecha_registro;
        $cliente -> save();
        return redirect("admin/clientes");
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
        $clientes = Clientes::findOrFail($id);
        return view("admin/clientes.show", compact("clientes"));
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
        $clientes = Clientes::findOrFail($id);
        return view("admin/clientes.edit", compact("clientes"));
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
        $clientes  = Clientes::findOrFail($id);
        $clientes ->update($request->all());
        return redirect("admin/clientes");
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
        $clientes  = Clientes::findOrFail($id);
        $clientes -> delete();
        return redirect("admin/clientes");
    }
}
