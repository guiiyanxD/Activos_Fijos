<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adquisicion extends Model
{
    use HasFactory;
    protected $table='adquisiciones';
    protected $primaryKey='id_adquisicion';
    protected $fillable=[
        'fecha','almacen_id','proveedor_id','user_id',
    ];
}
