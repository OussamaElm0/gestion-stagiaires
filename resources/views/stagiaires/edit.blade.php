<form action="{{ route('stagiaires.update', ["id" => $stagiaire->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <label>
        Nom :
        <input type="text" name="nom" value="{{ $stagiaire->nom }}">
    </label>
    <label>
        Prenom:
        <input type="text" name="prenom" value="{{ $stagiaire->prenom }}">
    </label>
    <label for="">
        Date de naissance :
        <input type="date" name="date_naissance" value="{{ $stagiaire->date_naissance }}">
    </label>

    <select name="filiere_id">
        @foreach($filieres as $filiere)
            <option value="{{ $filiere->id }}">{{ $filiere->nom }}</option>
        @endforeach
    </select>

    <button type="submit">Ajouter</button>
</form>
