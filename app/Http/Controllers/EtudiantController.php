<?php

namespace App\Http\Controllers;

use App\Models\Classes;
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

   //Ajouter un nouvel étudiant
   public function create() {

       $classes = Classes::all();
       return view("ajouterEtudiant", compact("classes"));
   }

   
   
   public function store(Request $request){

    $request->validate([
        "nom"=>"required|max:100",
        "prenom"=>"required|max:100",
        "classe"=>"required",
    ]);

    //Etudiants::create($request->all());

    Etudiants::create([
        "nom"=>$request->nom,
        "prenom"=>$request->prenom,
        "classe_id"=>$request->classe
    ]);

    return back()->with("successAdd", "Cet étudiant a été ajouté avec succès.");

   }

  // public function delete(Etudiants $etudiant){

   // $etudiant->delete();

    //return back()->with("successDelete", "Cet étudiant(e) a été supprimé(e) avec succès.");


  // }

  public function delete($etudiant) {

    Etudiants::find($etudiant)->delete();

    return back()->with("successDelete", "Cet étudiant(e) a été supprimé(e) avec succès.");

}

}
