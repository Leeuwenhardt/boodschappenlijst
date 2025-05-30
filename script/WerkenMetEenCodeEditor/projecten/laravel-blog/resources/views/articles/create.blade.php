<x-layout>
    <x-slot:heading>Create a new article</x-slot:heading>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <label for="title">Artikel naam:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <br>
        <label for="body">Beschrijving:</label>
        <textarea id="body" name="body"></textarea>
        <br>
        <br>
        <label for="category">Categorie:</label>
        <br>
        <select name="category_id[]" id="category" multiple="multiple" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <br>
        <br>
        <label for="file">Voeg een foto toe:</label>
        <input type="file" id="file" name="file" accept="image/png, image/jpeg">
        <br>
        <br>
        <button type="submit" class="relative infline-flex items-center px4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">Opslaan</button>
    </form>


</x-layout>