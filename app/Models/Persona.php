<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'nombre_primer',
        'nombre_segundo',
        'apellido_primer',
        'apellido_segundo',
        'tipo_documento',
        'nro_documento',
        'fecha_nacimiento',
        'sitio',
        'fecha_primera',
        'status',
        "qr"
    ];
}
