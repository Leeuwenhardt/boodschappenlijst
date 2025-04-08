<?php require('partials/header.php')?>
<?php require('partials/nav.php')?>
<header class="bg-white shadow-sm">
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <h1 class="text-3xl font-bold tracking-tight text-gray-900">Overzicht</h1>
</div>
</header>
<main>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<h2>Boodschappenlijst</h2>
  <table id="table">
    <tr>
      <th>Product</th>
      <th>Prijs</th>
      <th>Aantal</th>
      <th>Subtotaal</th>
    </tr>
    <!-- run a foreach to create the table -->
    <?php foreach ($groceries as $purchase) : ?>
    <tr>
      <td>
        <?= htmlspecialchars($purchase['name']); ?>
      </td>
      <td>
        €<?= htmlspecialchars($purchase['price']); ?>
      </td>
      <td>
		    <?= htmlspecialchars($purchase['quantity']); ?>
      </td>
    </tr>
    <?php endforeach; ?>
    <tr>
  </table>
</div>
</main>

<?php require('partials/footer.php')?>