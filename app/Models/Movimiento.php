<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;
    protected $table = 'movimientos';
    protected $primaryKey='id_movimiento';
    protected $fillable = [
        'fecha','user_id','departamento_id',
    ];
}
