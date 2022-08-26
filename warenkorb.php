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
                <th>Preis</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/products/cerealien/01.jpg" alt="product">
                        <div>
                            <p>Cerealien</p>
                            <small>Preis: 2,75€</small>
                            <br>
                            <a href="">Entfernen</a>
                        </div>
                    </div>
                </td>
                <td>2,75€</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/products/erdnussbutter/01.jpg" alt="product">
                        <div>
                            <p>Erdnussbutter & -mus</p>
                            <small>Preis: 3,98€</small>
                            <br>
                            <a href="">Entfernen</a>
                        </div>
                    </div>
                </td>
                <td>3,98€</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/products/milch/01.jpg" alt="product">
                        <div>
                            <p>Milch</p>
                            <small>Preis: 1,24€</small>
                            <br>
                            <a href="">Entfernen</a>
                        </div>
                    </div>
                </td>
                <td>1,24€</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Einkaufspreis</td>
                    <td>7,97€</td>
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