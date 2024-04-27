<a href="{{ route('stagiaires.create') }}">
    Ajouter un stagiaire
</a>

<table border="1">
    <tr>
        <th> Nom </th>
        <th> Prenom </th>
        <th> Filiere </th>
        <th> Actions </th>
    </tr>
    @foreach($stagiaires as $stagiaire)
        <tr>
            <td>{{ $stagiaire->nom }}</td>
            <td>{{ $stagiaire->prenom }}</td>
            <td>{{ $stagiaire->filiere->nom }}</td>
            <td>
                <a href="{{ route('stagiaires.edit', ['id' => $stagiaire->id]) }}">
                    Edit
                </a>
                <a href="{{ route('stagiaires.show', ['id' => $stagiaire->id]) }}">
                    Show
                </a>
                <form action="{{ route('stagiaires.destroy', ['id' => $stagiaire->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
