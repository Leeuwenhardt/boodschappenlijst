<x-layout>
    <x-slot:heading>Artikelen</x-slot:heading>

<table>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Publicatiedatum</th>
        </tr>
    </thead>
    <tbody>
        <ul>
            @foreach ($articles as $article)
            <tr> 
                <td><a href="/overview/{{ $article['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $article['name'] }}</strong></td></a> 
                    <td>{{ $article['created_at'] }}</td>
            </tr>
            @endforeach
        </ul>
    </tbody>
</table>

</x-layout>