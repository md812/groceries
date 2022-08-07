<!DOCTYPE html>

<html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Online-Shop für Lebensmittel">
    <meta name="author" content="Marco Druschba">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="includes/style.css">
    <title>Groceries | Start</title>
  </head>

  <body>

    <div class="header">
      <div class="container">
      <?php include "includes/nav.php" ?>
        </div>

        <div class="row">
          <div class="col-2">
            <h1>Kaufe online<br> deine Lebensmittel.</h1>
            <p>Herzlich willkommen bei Groceries! Schauen Sie in unserem Online-Shop vorbei, vergleichen Sie Ihre Auswahl und entdecken Sie Produkte aus aller Welt!</p>
            <a href="products.php" class="btn">Zum Online-Shop &#8594;</a>
          </div>
          <!-- image source: https://uol.de/corporate-design/uni-logo -->
          <div class="col-2">
            <img src="images/uol_logo.jpg" alt="uni-oldenburg-logo">
          </div>
        </div>
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