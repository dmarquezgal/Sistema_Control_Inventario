<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ["id","Nombre", "Descripcion", "Precio","Stock","Precio_Provedor", "Fecha_registro"];
    use HasFactory;

}
