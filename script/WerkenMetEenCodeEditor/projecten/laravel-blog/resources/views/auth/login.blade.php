<x-layout>
    <x-slot:heading>Login</x-slot:heading>
    <form method="POST" action="/login">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        @error('username')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <br>
        <label for="password">Password:</label>
        <textarea type="text" id="password" name="password" required></textarea>
        <br>
        <br>
        <button type="submit" class="relative infline-flex items-center px4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">Login</button>
    </form>
</x-layout>