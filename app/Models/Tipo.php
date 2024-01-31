<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable = [
        'nombre',
        'fortaleza',
        'debilidad'
    ];
    public function habilidades(){
        return $this->hasMany(Habilidad::class);
    }

    use HasFactory;
}
