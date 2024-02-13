<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunesController;

Route::get('/supprimer-commune/{id}' , [CommunesController::class, 'supprimer_commune'])->name('supprimer');
Route::get('/modifier-commune/{id}' , [CommunesController::class, 'modifier_commune']);
Route::get('/communes' , [CommunesController::class, 'liste_communes']);
Route::get('/ajouter' , [CommunesController::class, 'ajouter_communes']);
Route::post('/ajouter/traitement' , [CommunesController::class, 'ajouter_communes_traitement']);
Route::post('/modifier/traitement' , [CommunesController::class, 'modifier_communes_traitement']);
Route::get('/template' , [CommunesController::class, 'template_index']);
Route::get('/', function () {
    return view('communes.ajouter');
});


