@extends("layouts.master")
@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h4 class="border-bottom pb-2 mb-4">Ajout d'un(e) nouvel(le) étudiant(e)</h4>
    
    <div class="mt-4">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
       @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
       @endforeach
      </ul>
      </div>
      @endif

      @if ($message = Session::get('successAdd'))
      <div class="alert alert-success">
        <strong>{{ $message }}</strong>
      </div>
      @endif

    <form action="{{ route('etudiants.ajouter') }}" method="POST">
      @csrf
        <div class="mb-3">
          <label for="nom" class="form-label">Nom de famille</label>
          <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom de famille de l'étudiant(e)" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom(s) de l'étudiant(e)" required>
        </div>
        <div class="form-group">
            <label for="classe" class="form-label">Classe</label>
            <select name="classe" class="form-select" id="classe" required>
              <option>-Sélectionner-</option>
              @foreach ($classes as $classe)
              <option value="{{ $classe->id }}">{{ $classe->libelle }}</option>
              @endforeach
            </select>
          </div>
        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
        <a href="{{ route('etudiants.index') }}" class="btn btn-danger mt-3">Annuler</a>
      </form>
    </div>
    
    
</div>
@endsection


