<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'horas','img'];
    use HasFactory;
}
