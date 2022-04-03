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


Route::get('/etudiants', [EtudiantController::class, "index"])->name("etudiants.index");
Route::get('/etudiants/ajouter', [EtudiantController::class, "create"])->name("etudiants.create");
Route::post('/etudiants/enregister', [EtudiantController::class, "store"])->name("etudiants.ajouter");






