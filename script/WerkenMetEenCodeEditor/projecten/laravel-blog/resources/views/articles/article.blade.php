<x-layout>
    <x-slot:heading>Artikel</x-slot:heading>

<h1 class="font-bold text-lg">{{ $article['title'] }}</h1>
<p>{{ $article['body'] }}</p>
<p><strong>{{  $article->category->name }}</strong></p>

    <x-slot:heading>Comment</x-slot:heading>
    <form action="{{ route('comment.store') }}" method="POST">
        @csrf
        <br>
        <label for="body">Comment:</label>
        <textarea id="body" name="body"></textarea>
        <br>
        <br>
        <button type="submit" class="relative infline-flex items-center px4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">Plaats commentaar</button>
    </form>


</x-layout>