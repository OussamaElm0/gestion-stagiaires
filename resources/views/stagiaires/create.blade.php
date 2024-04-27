<form action="{{ route('stagiaires.store') }}" method="POST">
    @csrf
    <label>
        Nom :
        <input type="text" name="nom" >
    </label>
    <label>
        Prenom:
        <input type="text" name="prenom">
    </label>
    <label for="">
        Date de naissance :
        <input type="date" name="date_naissance">
    </label>

    <select name="filiere_id">
        @foreach($filieres as $filiere)
            <option value="{{ $filiere->id }}">{{ $filiere->nom }}</option>
        @endforeach
    </select>

    <button type="submit">Ajouter</button>
</form>
