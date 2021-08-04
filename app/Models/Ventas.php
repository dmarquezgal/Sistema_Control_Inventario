<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{

    Protected $fillable = ['id','Codigo_Cliente', 'Fecha_Venta','Codigo_Vendedor', 'Cantidad', 'Precio', 'Total'];
    use HasFactory;
}
