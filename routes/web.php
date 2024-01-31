<?php

use App\Http\Controllers\HabilidadController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\FichaTecnicaController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/pokemons',[PokemonController::class, 'index']);
// Route::get('/pokemons/create',[PokemonController::class , 'create']);
// Route::post('/pokemons',[PokemonController::class , 'store']);
// Route::get('/pokemons/{pokemon}',[PokemonController::class , 'show']);
// Route::get('/pokemons/{pokemon}/edit', [PokemonController::class , 'edit']);
// Route::put('/pokemons/{pokemon}', [PokemonController::class , 'update']);
// Route::delete('/pokemons/{pokemon}', [PokemonController::class , 'destroy']);

// Route::controller(PokemonController::class)->group(function(){
//     Route::get('/pokemons', 'index');
//     Route::get('/pokemons/create','create');
//     Route::post('/pokemons','store');
//     Route::get('/pokemons/{pokemon}', 'show');
//     Route::get('/pokemons/{pokemon}/edit', 'edit');
//     Route::put('/pokemons/{pokemon}', 'update');
//     Route::delete('/pokemons/{pokemon}', 'destroy');
// });

Route::resource('pokemons', PokemonController::class);
Route::resource('tipos', TipoController::class);
Route::resource('habilidades', HabilidadController::class);
Route::resource('regiones', RegionController::class);
Route::resource('fichaTecnica', FichaTecnicaController::class);



