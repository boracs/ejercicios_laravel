<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    use HasFactory;
    protected $casts = ['comentarios' => 'json'];
    
    protected $fillable = ['nombre', 'lugar', 'precio', 'imagen', 'descripcion', 'valoracion', 'comentarios'];
}
