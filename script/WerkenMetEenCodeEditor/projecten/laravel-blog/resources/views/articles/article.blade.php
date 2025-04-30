<x-layout>
    <x-slot:heading>Artikel</x-slot:heading>

<h1 class="font-bold text-lg">{{ $article['title'] }}</h1>
<p>{{ $article['body'] }}</p>
    @foreach($article->category as $categories)
        {{ $categories->name }}
    @endforeach


<!-- select 2 categories, title has to work, filter for categories, overview of own articles upon login -->
</x-layout>