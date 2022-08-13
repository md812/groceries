<!DOCTYPE html>

<html lang="de">
  <head>
    <?php include "includes/meta.php" ?>
    <title>Groceries | Warenkorb</title>
  </head>

  <body>

    <div class="container">
    <?php include "includes/nav.php" ?>
    </div>

    <!-- cart items details -->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Produkt</th>
                <th>Anzahl</th>
                <th>Preis</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/test.png" alt="product">
                        <div>
                            <p>Popcorn</p>
                            <small>Preis: 0,30€</small>
                            <br>
                            <a href="">Entfernen</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>0,30€</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/test.png" alt="product">
                        <div>
                            <p>Cerealien</p>
                            <small>Preis: 2,75€</small>
                            <br>
                            <a href="">Entfernen</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>2,75€</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/test.png" alt="product">
                        <div>
                            <p>Nüsse</p>
                            <small>Preis: 3,98€</small>
                            <br>
                            <a href="">Entfernen</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>3,98€</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/test.png" alt="product">
                        <div>
                            <p>Erdnussbutter</p>
                            <small>Preis: 1,24€</small>
                            <br>
                            <a href="">Entfernen</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>1,24€</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Einkaufspreis</td>
                    <td>8,27€</td>
                </tr>
            </table>
        </div>

    </div>

      <!-- footer -->
      <div class="footer">
      <?php include "includes/footer.php" ?>
      </div>

    <script>
      <?php include "includes/scripts.js" ?>
    </script>
  
  </body>
</html>