<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criptomoneda extends Model
{
    use HasFactory;

    protected $table = "criptomoneda";
    public $timestamps = false;
    protected $fillable = [
        'logotipo',
        'nombre',
        'precio',
        'descripcion',
        'lenguaje_id',
        'fecha_creacion',
    ];

}
