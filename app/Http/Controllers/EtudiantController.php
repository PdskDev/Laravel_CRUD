<?php

namespace App\Http\Controllers;

use App\Models\Etudiants;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
   public function index()
   {
    //Lister tous les étudiants
    //$etudiants = Etudiants::orderBy("id", "asc")->get();

    //Lister les étudiants avec la pagination
    $etudiants = Etudiants::orderBy("id", "asc")->paginate(5);
    
    return view("etudiant", compact("etudiants"));
   }
}
