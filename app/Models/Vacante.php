<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function candidatos()
    {
        return $this->hasMany(Candidato::class);
    }

    // Esta relación se sale de los estandare de laravel, por eso hay que indicar la llave foranea de la tabla a la que hacemos referencia
    public function reclutador()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
