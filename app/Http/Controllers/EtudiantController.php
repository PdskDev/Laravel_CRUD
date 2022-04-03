<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Etudiants;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
   public function listEtudiant()
   {
    //Lister tous les étudiants
    //$etudiants = Etudiants::orderBy("id", "asc")->get();

    //Lister les étudiants avec la pagination
    $etudiants = Etudiants::orderBy("id", "asc")->paginate(5);
    
    return view("liste_etudiants", compact("etudiants"));
   }

   //Ajouter un nouvel étudiant
   public function FormNewEtudiant() {

       $classes = Classes::all();
       return view("ajouterEtudiant", compact("classes"));
   }

   
   public function SaveNewEtudiant(Request $request){

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

    return back()->with("successAdd", "L'étudiant(e) \"$request->nom $request->prenom\" a été enregistré(e) avec succès.");

   }

  public function DeleteEtudiant(Etudiants $etudiant){

    //$nom_etudiant = $etudiant->nom." ".$etudiant->prenom;

   $etudiant->delete();

    return back()->with("successDelete", "L'étudiant(e) \"$etudiant->nom $etudiant->prenom\" a été supprimé(e) avec succès.");

   }

  //public function delete($etudiant) {

   // Etudiants::find($etudiant)->delete();

    //return back()->with("successDelete", "Cet(te) étudiant(e) a été supprimé(e) avec succès.");

//}



public function FicheEtudiant(Etudiants $etudiant) {

    $classes = Classes::all();
    return view("ficheEtudiant", compact("etudiant", "classes"));
}




public function UpdateEtudiant(Request $request, Etudiants $etudiant){

    $request->validate([
        "nom"=>"required|max:100",
        "prenom"=>"required|max:100",
        "classe"=>"required",
    ]);

    //Etudiants::create($request->all());

    $etudiant->update([
        "nom"=>$request->nom,
        "prenom"=>$request->prenom,
        "classe_id"=>$request->classe
    ]);

    return back()->with("successEdit", "Les informations de l'étudiant(e) \"$request->nom $request->prenom\" ont été bien modifiées.");

   }

}
