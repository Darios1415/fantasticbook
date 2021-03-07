<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;
use App\Models\generos;
use App\Models\subgeneros;

class subgeneros extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey ='idsubgen';
    protected $fillable =['idsubgen','subgenero','idgen'];
}
