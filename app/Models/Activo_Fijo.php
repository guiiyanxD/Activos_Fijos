<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activo_Fijo extends Model
{
    use HasFactory;
    protected $table='activos_fijos';
    protected $primaryKey='id_AF';
    protected $fillable = [
        'nombre','fecha_obtencion','valor_compra','estado_id',
        'categoria_id','departamento_id','solicitud_id','almcaen_id','movimiento_id',
    ];
}
