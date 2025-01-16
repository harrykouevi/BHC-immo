@foreach($annonces as $annonce)
<tr>
    <td>{{ $annonce->titre }}</td>
    <td>{{ $annonce->adresse }}</td>
    <td>{{ $annonce->prix }}</td>
    <td>
        <form action="{{ route('admin.annonces.destroy', $annonce->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </td>
</tr>
@endforeach
