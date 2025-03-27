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
      <tr>
        <td>Brood</td>
        <td class="productPrice">1,00</td>
        <td>
          <input type="number" class="productQuantity" value="1" min="0" max="99" />
        </td>
        <td class="productTotalCost">1,00</td>
      </tr>
      <tr>
        <td>Brocolli</td>
        <td class="productPrice">0,99</td>
        <td>
          <input type="number" class="productQuantity" value="2" min="0" max="99" />
        </td>
        <td class="productTotalCost">1,98</td>
      </tr>
      <tr>
        <td>Krentebollen</td>
        <td class="productPrice">1,20</td>
        <td>
          <input type="number" class="productQuantity" value="4" min="0" max="99" />
        </td>
        <td class="productTotalCost">1,20</td>
      </tr>
      <tr>
        <td>Noten</td>
        <td class="productPrice">2,99</td>
        <td>
            <input type="number" class="productQuantity" value="0" min="0" max="99" />
        </td>
        <td class="productTotalCost">0,00</td>
      </tr>
      <tr>
        <th colspan="3">Totaal</th>
        <td id="totalCost">7,78</td>
      </tr>
      <script src="script.js"></script>
    </table>
  </body>
</html>