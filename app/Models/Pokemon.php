<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemons';
    protected $fillable = [
        'numpokedex',
        'nombre',
        'vida',
        'tipo_id',
        'ataque',
        'defensa',
        'evolucion',
        'pre_evolucion'
    ];

    public function ficha_tecnica(){
        return $this->belongsTo(FichaTecnica::class);
    }

    public function region(){
        return $this->belongsTo(Region::class);
    }
    use HasFactory;



}
