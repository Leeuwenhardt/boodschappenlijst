<x-layout>
    <x-slot:heading>Artikelen</x-slot:heading>

<table class="w-full">
    <thead>
        <tr class="text-left border-b2 border-gray-200">
            <th class="px-4 py-3">Titel</th>
            <th class="px-4 py-3">Publicatiedatum</th>
            <th class="px-4 py-3">Categorie</th>
            <th class="px-4 py-3">Acties</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr> 
            <td><a href="/overview/{{ $article['id'] }}" class="text-blue-500 hover:underline block px-4 py-6 border border-gray-200 rounded-lg">
                <strong>{{ $article['title'] }}</strong></a></td>
                <td class="px-4 py-4 text-gray-700">{{ $article['created_at'] }}</td>
                <td class="px-4 py-4 text-gray-700">
                @if($article->category->isNotEmpty())
                @foreach($article->category as $category)
                    {{ $category->name }}@if(!$loop->last), @endif
                @endforeach
                @endif
                </td>
                <td class="px-4 py-4 text-gray-700">
                    <a href=" {{ route('articles.edit', $article->id) }}" class="text-blue-500 hover:underline">Bewerken</a>
                </td>
                <td class="px-4 py-4 text-gray-700">
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="text-blue-500 hover:underline">
                        @csrf 
                        @method('DELETE')
                        <button type="submit">Verwijderen</button>
                    </form>
                </td>
        </tr>
        @endforeach
    </tbody>
</table>

</x-layout>