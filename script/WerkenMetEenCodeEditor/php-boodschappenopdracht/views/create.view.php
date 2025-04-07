<?php require('partials/header.php')?>
<?php require('partials/nav.php')?>
<header class="bg-white shadow-sm">
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Toevoegen</h1>
</div>
</header>
<main>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<body>

	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
	<form method="post" action="/">
		<div>
			<label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
            <textarea id="name" name="name" placeholder="Voeg naam van het product toe"></textarea>
			<?php if (isset($errors['name'])) :?>
				<p class="text-red-500 text-xs mt-2"><?= $errors['name']?></p>
			<?php endif; ?>
		</div>
		<div>
			<label for="quantity" class="block text-sm font-medium text-gray-700">Quantity:</label>
			<textarea id="quantity" name="quantity" placeholder="Voeg gewenste aantal toe"></textarea>
			<?php if (isset($errors['quantity'])) :?>
				<p class="text-red-500 text-xs mt-2"><?= $errors['quantity']?></p>
			<?php endif; ?>
		</div>
		<div>
			<label for="price" class="block text-sm font-medium text-gray-700">Unit price:</label>
            <textarea id="price" name="price" placeholder="Voeg prijs toe"></textarea>
			<?php if (isset($errors['price'])) :?>
				<p class="text-red-500 text-xs mt-2"><?= $errors['price']?></p>
			<?php endif; ?>
		</div>
		<button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-gray-400 py-2 px-4">Add</button>
	</form>

	</div>
</body>
</div>
</main>

<?php require('partials/footer.php')?>