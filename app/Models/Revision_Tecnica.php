<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revision_Tecnica extends Model
{
    use HasFactory;
    protected $table='revisiones_tecnicas';
    protected $primaryKey='id_revision';
    protected $fillable=[
        'fecha','user_id','AF_id',
    ];
}
