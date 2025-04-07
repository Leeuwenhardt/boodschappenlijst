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
        <?= $purchase['name'] ?>
      </td>
      <td>
        €<?= $purchase['price']; ?>
      </td>
      <td>
		<?= $purchase['quantity']; ?>
      </td>
    </tr>
    <tr>
      <td>
          <?= $purchase['subTotal']; ?>
      </td>
    </tr>
    <?php endforeach; ?>
    <tr>
      <th colspan="3">Totaal</th>
        <td>
          <!-- get the total value of all products combined -->
          <a href="?total=<?= number_format($total, 2) ?>">
            €<?= number_format($total, 2) ?>
          </a>
        </td>
    </tr>
  </table>
</div>
</main>

<?php require('partials/footer.php')?>