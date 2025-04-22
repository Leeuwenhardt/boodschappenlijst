<x-layout>
    <x-slot:heading>Artikelen</x-slot:heading>

<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Publicatiedatum</th>
            <th>Acties</th>
        </tr>
    </thead>
    <tbody>
        <ul>
            @foreach ($articles as $article)
            <tr> 
                <td><a href="/overview/{{ $article['id'] }}" class="text-blue-500 hover:underline block px-4 py-6 border border-gray-200 rounded-lg">
                    <strong>{{ $article['title'] }}</strong></a></td>
                    <td>{{ $article['created_at'] }}</td>
                    <td>
                        <a href=" {{ route('articles.edit', $article->id) }}" class="text-blue-500 hover:underline">Bewerken</a>
                    </td>
                    <td>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="text-blue-500 hover:underline">
                            @csrf 
                            @method('DELETE')
                            <button type="submit">Verwijderen</button>
                        </form>
                    </td>
            </tr>
            @endforeach
        </ul>
    </tbody>
</table>

</x-layout>