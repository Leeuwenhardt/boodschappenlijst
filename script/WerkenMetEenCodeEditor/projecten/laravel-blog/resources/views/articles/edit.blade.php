<x-layout>
    <x-slot:heading>Edit article</x-slot:heading>
    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Artikel naam:</label>
        <input type="text" id="title" name="title" value="{{ $article->title }}" required>
        <br>
        <label for="body">Beschrijving:</label>
        <textarea id="body" name="body">{{ $article->body }}</textarea>
        <br>
        <button type="submit" class="font-bold">Bijwerken</button>
    </form>
</x-layout>