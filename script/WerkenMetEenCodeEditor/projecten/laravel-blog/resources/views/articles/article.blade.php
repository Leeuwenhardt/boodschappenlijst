<x-layout>
    <x-slot:heading>Artikel</x-slot:heading>

<h1 class="font-bold text-lg">{{ $article['title'] }}</h1>
<p>{{ $article['body'] }}</p>
    @foreach($article->category as $categories)
        <strong>{{ $categories->name }}</strong>
    @endforeach
    <br>
    <form action="" method="POST">
        @csrf
        <label for="comment"><strong>Plaats een comment:</strong></label>
        <br>
        <textarea id="comment" name="comment"></textarea>
        <br>
        <button type="submit" class="relative infline-flex items-center px4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">Opslaan</button>
    </form>

</x-layout>