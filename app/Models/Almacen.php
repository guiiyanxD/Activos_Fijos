<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    use HasFactory;
    protected $table='almacenes';
    protected $primaryKey='id_almacen';
    protected $fillable=[
        'direccion','estado',
    ];
}
