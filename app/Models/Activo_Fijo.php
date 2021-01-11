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
        'categoria_id','departamento_id','solicitud_id','almacen_id','movimiento_id',
    ];

    public function estado(){
        return $this->belongsTo(Estado::class,'estado_id');
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }

    public function departamento(){
        return $this->belongsTo(Departamento::class,'departamento_id');
    }

    public function solicitud(){
        return $this->belongsTo(Solicitud::class,'solicitud_id');
    }

    public function almacen(){
        return $this->belongsTo(Almacen::class, 'almacen_id');
    }

    public function movimiento(){
        return $this->belongsTo(Movimiento::class, 'movimiento_id');
    }
}
