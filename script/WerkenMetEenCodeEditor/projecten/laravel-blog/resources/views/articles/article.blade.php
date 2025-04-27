<x-layout>
    <x-slot:heading>Artikel</x-slot:heading>

<h1 class="font-bold text-lg">{{ $article['title'] }}</h1>
<p>{{ $article['body'] }}</p>
<p><strong>{{  $article->category->name }}</strong></p>

</x-layout>