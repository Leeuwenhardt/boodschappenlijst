<?php require('partials/header.php')?>
<?php require('partials/nav.php')?>
<header class="bg-white shadow-sm">
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Notes</h1>
</div>
</header>
<main>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<body>
	<!-- product toevoegen -->

	<?php foreach ($posts as $post) : ?>
		<li>
			<a href="/notes" class="text-blue hover:underline">Go back...
				<p><?= $post['body']?></p>
			</a>
		</li>
	<?php endforeach; ?>
	<form action="create.php" method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ?? '' ; ?>"required>
		</div>
		<div>
			<label for="quantity">Quantity:</label>
			<input type="text" id="quantity" name="quantity" value="<?php echo isset($_POST['quantity']) ?? '' ; ?>"required>
		</div>
		<div>
			<label for="price">Unit price:</label>
			<input type="text" id="price" name="price" value="<?php echo isset($_POST['price']) ?? '' ; ?>"required>
		</div>
		<button type="submit">Add</button>
	</form>
</body>
</div>
</main>

<?php require('partials/footer.php')?>