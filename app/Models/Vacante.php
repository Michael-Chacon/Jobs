<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    protected $dates = ['ultimo_dia'];

    use HasFactory;

    protected $fillable = [
        'titulo',
        'salario_id', 
        'categoria_id',
        'empresa',
        'ultimo_dia',
        'descripcion',
        'imagen', 
        'user_id'
    ];

    public function salario()
    {
        return $this->belongsTo(Salario::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
