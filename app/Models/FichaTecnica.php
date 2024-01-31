<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaTecnica extends Model
{
    protected $fillable = [
        'pokemon_id',
        'region_id',
        'tipo_pokeball',
        'entrenador_id',
        'fecha_captura'
    ];

    public function pokemon(){
        return $this->hasOne(Pokemon::class);
    }


    use HasFactory;


}
