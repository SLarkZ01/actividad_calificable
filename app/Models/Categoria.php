<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

        // Nombre de la tabla
        protected $table = 'Categorias';
        // Nombre de la llave primaria
        protected $primaryKey = 'id';
        // Define qué columnas pueden ser asignadas masivamente
        protected $fillable = ['nombre', 'descripcion'];
}
