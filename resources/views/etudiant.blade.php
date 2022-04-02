@extends("layouts.master")
@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h4 class="border-bottom pb-2 mb-4">Liste des étudiants inscrits</h4>
    
    <div>
      <div class="d-flex justify-content-end mt-4">
          <a href="#" class="btn btn-primary mb-3">Ajouter un nouvel etudiant</a>
      </div>

    <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Classe</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($etudiants as $etudiant)
          <tr>
            {{-- <th scope="row">{{ $loop->index+1 }}</th> --}}
            <th scope="row">{{ $etudiant->id }}</th>
            <td>{{ $etudiant->nom }}</td>
            <td>{{ $etudiant->prenom }}</td>
            <td>{{ $etudiant->classe->libelle }}</td>
            <td><a href="#" class="btn btn-info">Modifier</a> <a href="#" class="btn btn-danger">Supprimer</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center mt-4">
        {{ $etudiants->links() }}
      </div>
    </div>
</div>
@endsection

