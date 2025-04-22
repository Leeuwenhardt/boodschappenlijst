<x-layout>
    <x-slot:heading>Create a new article</x-slot:heading>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <label for="name">Artikel naam:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="body">Beschrijving:</label>
        <textarea id="body" name="body"></textarea>
        <br>
        <button type="submit" class="font-bold">Opslaan</button>
    </form>
</x-layout>