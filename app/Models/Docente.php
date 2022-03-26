<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{

    protected $fillable = ['nombres', 'apellidos', 'img', 'titulo', 'c_asociado'];

    use HasFactory;
}
