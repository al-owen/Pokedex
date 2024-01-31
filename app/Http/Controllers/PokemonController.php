<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Region;
use App\Models\Tipo;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('index', ['pokemons' => $pokemons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipo = new Tipo();
        $tipo->nombre = 'Agua';
        $tipo->fortaleza = "electrico";
        $tipo->debilidad = "planta";

        $tipo->save();

        $region = new Region();
        $region->nombre = 'Kanto';
        $region->save();

        $pokemon = new Pokemon();
        $pokemon->nombre = "Pokachu";
        $pokemon->numPokedex = 25;
        $pokemon->vida = 100;
        $pokemon->tipo_id = $tipo->id;
        $pokemon->region_id = $region->id;
        $pokemon->ataque = 100;
        $pokemon->defensa = 100;
        $pokemon->evolucion = 24;
        $pokemon->pre_evolucion = 26;
        $pokemon->save();

        return redirect('/pokemons');
        // return "Aqui creo pokemons";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $pokemon = new Pokemon();
        $pokemon->nombre = "Pokachu";
        $pokemon->numPokedex = 25;
        $pokemon->vida = 100;
        $pokemon->ataque = 100;
        $pokemon->defensa = 100;
        $pokemon->evolucion = 24;
        $pokemon->pre_evolucion = 26;
        $pokemon->save();

        return redirect('/pokemon');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        return "Aqui muestro el pokemon: ". $pokemon;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        return "Aqui edito el pokemon: ". $pokemon;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        return "Aqui actualizo el pokemon: ". $pokemon;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        return "Aqui borro el pokemon: ". $pokemon;
    }
}
