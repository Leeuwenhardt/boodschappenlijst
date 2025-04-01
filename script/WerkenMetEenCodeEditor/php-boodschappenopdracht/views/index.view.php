<!DOCTYPE html>
<html>
<head>
    <title>Boodschappenlijst</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <!-- header -->
  <?php require('partials/header.php')?>
  <!-- navbar -->
	<?php require('partials/nav.php')?>

  <!-- table -->
  <h2>Boodschappenlijst</h2>
  <table id="table">
    <tr>
      <th>Product</th>
      <th>Prijs</th>
      <th>Aantal</th>
      <th>Subtotaal</th>
    </tr>
    <!-- run a foreach to create the table -->
    <?php foreach ($checkOut as $purchase) : ?>
    <tr>
      <td>
        <a href="<?= $purchase['product'] ?>">
          <?= $purchase['product']; ?>
        </a>
      </td>
      <td>
        <a href="<?= $purchase['price'] ?>">
        €<?= $purchase['price']; ?>
        </a>
      </td>
      <td>
        <a href="<?= $purchase['amount'] ?>">
        <?= $purchase['amount']; ?>
        </a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="<?= $purchase['subTotal'] ?>">
          <?= $purchase['subTotal']; ?>
        </a>
      </td>
    </tr>
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
  <!-- footer -->
  <?php require('partials/footer.php')?>
</body>
</html>