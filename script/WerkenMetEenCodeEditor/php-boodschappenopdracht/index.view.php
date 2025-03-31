<!DOCTYPE html>
<html>
  <head>
    <title>Boodschappenlijst</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
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
            <a href="?total=<?= number_format($total, 2) ?>">
              €<?= number_format($total, 2) ?>
            </a>
          </td>
      </tr>
        <!-- <td class="product">Brood</td>
        <td class="productPrice">1,00</td>
        <td>
          <input type="number" class="productQuantity" value="1" min="0" max="99" />
        </td>
        <td class="productTotalCost">1,00</td>
      </tr>
      <tr>
        <td class="product">Brocolli</td>
        <td class="productPrice">0,99</td>
        <td>
          <input type="number" class="productQuantity" value="2" min="0" max="99" />
        </td>
        <td class="productTotalCost">1,98</td>
      </tr>
      <tr>
        <td class="product">Krentebollen</td>
        <td class="productPrice">1,20</td>
        <td>
          <input type="number" class="productQuantity" value="4" min="0" max="99" />
        </td>
        <td class="productTotalCost">1,20</td>
      </tr>
      <tr>
        <td class="product">Noten</td>
        <td class="productPrice">2,99</td>
        <td>
            <input type="number" class="productQuantity" value="0" min="0" max="99" />
        </td>
        <td class="productTotalCost">0,00</td>
      </tr>
      <tr>
        <th colspan="3">Totaal</th>
        <td id="totalCost">7,78</td>
      </tr>-->
    </table>
  </body>
</html>