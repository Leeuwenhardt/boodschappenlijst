<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Boodschappenlijst</title>
</head>
<body>
	<!-- header -->
	<?php require('partials/header.php')?>
	<!-- navbar -->
	<?php require('partials/nav.php')?>

	<!-- product toevoegen -->
	<form action="create.php" method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ?? '' ; ?>"required>
		</div>
		<div>
			<label for="quantity">Quantity:</label>
			<input type="text" id="amount" name="amount" value="<?php echo isset($_POST['amount']) ?? '' ; ?>"required>
		</div>
		<div>
			<label for="price">Unit price:</label>
			<input type="text" id="price" name="price" value="<?php echo isset($_POST['price']) ?? '' ; ?>"required>
		</div>
		<button type="submit">Add</button>
	</form>
	<!-- footer -->
	<?php require('partials/footer.php')?>
</body>
</html>