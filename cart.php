<!DOCTYPE html>

<html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Online-Shop für Lebensmittel">
    <meta name="author" content="Marco Druschba">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="includes/style.css">
    <title>Groceries | Einkaufswagen</title>
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
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/test.jpg">
                        <div>
                            <p>Dole Banane</p>
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
                        <img src="images/test.jpg">
                        <div>
                            <p>Heinz Ketchup</p>
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
                        <img src="images/test.jpg">
                        <div>
                            <p>Meica Würstchen</p>
                            <small>Preis: 3,98€</small>
                            <br>
                            <a href="">Entfernen</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>3,98€</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>7,03€</td>
                </tr>
                <tr>
                    <td>Steuern</td>
                    <td>0,30€</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>7,33€</td>
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