<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['id','foto','nombre','app','apm','fn','telefono','estado','municipio','calle','num_i',
                'type','cuenta','correo','contra','genero','activo','referencia'];
}
