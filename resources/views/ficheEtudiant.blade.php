@extends("layouts.master")
@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h4 class="border-bottom pb-2 mb-4">Modifier un(e) étudiant(e)</h4>
    
    <div class="mt-4">
      @if ($errors->any())
      <div class="alert alert-danger alert-dismissible fade show" role="alert"">
        <ul>
       @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
       @endforeach
      </ul>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if ($message = Session::get('successEdit'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

    <form action="{{ route('etudiants.editer', ['etudiant'=>$etudiant->id]) }}" method="POST">
      @csrf
      <input type="hidden" name="_method" value="PUT">
        <div class="mb-3">
          <label for="nom" class="form-label">Nom de famille</label>
          <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom de famille de l'étudiant(e)" 
          value="{{ $etudiant->nom }}" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom(s) de l'étudiant(e)" 
            value="{{ $etudiant->prenom }}" required>
        </div>
        <div class="form-group">
            <label for="classe" class="form-label">Classe</label>
            <select name="classe" class="form-select" id="classe" required>
              <option>-Sélectionner-</option>
              @foreach ($classes as $classe)
              @if ($classe->id == $etudiant->classe_id)
              <option value="{{ $classe->id }}" selected>{{ $classe->libelle }}</option>
              @else
              <option value="{{ $classe->id }}">{{ $classe->libelle }}</option>
              @endif
              @endforeach
            </select>
          </div>
        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
        <a href="{{ route('etudiants.index') }}" class="btn btn-secondary mt-3">Annuler</a>
      </form>
    </div>

</div>
@endsection


