<x-layout>
    <x-slot:heading>Artikelen</x-slot:heading>

<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Content</th>
            <th>Publicatiedatum</th>
        </tr>
    </thead>
    <tbody>
        <ul>
            @foreach ($articles as $article)
            <li> 
                <a href="/overview/{{ $article['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $article['title'] }}</strong> about {{ $article['description']}}</li>
                </a>
            @endforeach
        </ul>
    </tbody>
</table>

</x-layout>