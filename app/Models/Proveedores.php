<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $fillable = ["id","Nombre", "Numero_Telefonico", "Direccion","RFC" ,"Email", "Fecha_registro","No_cuenta","Compania","Clave_interbancaria"];
    use HasFactory;

}
