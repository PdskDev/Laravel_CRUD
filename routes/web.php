<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("accueil");

//Route étudiants
//Route::get('/etudiant', function () {

//    $etudiantName = "Nadet";

    //return view('etudiant', compact('etudiantName'));
    
//    return view('etudiant', [
//        "etudiantName" => $etudiantName,
//        "cycleEtude" => "Bac+5",
//    ]);
//});


Route::get('/etudiants', [EtudiantController::class, "listEtudiant"])->name("etudiants.index");

Route::get('/etudiants/nouveau', [EtudiantController::class, "FormNewEtudiant"])->name("etudiants.nouveau");
Route::post('/etudiants/enregister', [EtudiantController::class, "SaveNewEtudiant"])->name("etudiants.ajouter");

Route::get('/etudiants/fiche/{etudiant}', [EtudiantController::class, "FicheEtudiant"])->name("etudiants.fiche");
Route::put('/etudiants/editer/{etudiant}', [EtudiantController::class, "UpdateEtudiant"])->name("etudiants.editer");

Route::delete('/etudiants/supprimer/{etudiant}', [EtudiantController::class, "DeleteEtudiant"])->name("etudiants.supprimer");










