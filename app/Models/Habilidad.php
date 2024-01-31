<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    protected $fillable = [
        'nombre',
        'potencia',
        'num_usos',
        'acierto',
        'tipo_id',
        'descripcion'
    ];
    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }
    use HasFactory;
}
