<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_categoria';
    protected $table = 'categorias';
    protected $fillable = [
        'nombre',
        'descripcion',
        'rubro_id',
    ];

    public function activo(){
        return $this->hasOne(Activo_Fijo::class, 'categoria_id');
    }
}
