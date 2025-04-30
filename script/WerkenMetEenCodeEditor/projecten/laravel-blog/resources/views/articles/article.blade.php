<x-layout>
    <x-slot:heading>Artikel</x-slot:heading>

<h1 class="font-bold text-lg">{{ $article['title'] }}</h1>
<p>{{ $article['body'] }}</p>
    @foreach($article->category as $categories)
        <strong>{{ $categories->name }}</strong>
    @endforeach

</x-layout>