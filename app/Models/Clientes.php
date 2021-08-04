<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = ["id","Nombre", "RFC","Direccion","Numero_Telefonico","Email","Fecha_registro"];
    use HasFactory;

}
