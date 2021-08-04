<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    protected $fillable = ["id","Nombre", "Email","Contraseina","Tipo_usuario"];
    use HasFactory;

}
