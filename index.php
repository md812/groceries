<!DOCTYPE html>

<html lang="de">
  <head>
    <?php include "includes/meta.php" ?>
    <title>Groceries | Start</title>
  </head>

  <body>

    <div class="container">
      <?php include "includes/nav.php" ?>
    </div>

    <h1>Nutzerstudie</h1>

    <!-- image source: https://uol.de/corporate-design/uni-logo -->
    <div>
      <img src="images/uol_logo.jpg" alt="uni-oldenburg-logo" class="uol-logo">
    </div>

    <div>
      <p>Herzlich willkommen bei unserer Nutzerstudie! Wir freuen uns über Ihre Teilnahme. Zu Beginn dieser Studie geben wir Ihnen auf dieser Seite einige Informationen über den Ablauf. Gleichzeitig benötigen wir Ihre Zustimmung zur Teilnahme an dieser Studie.</p><br>

      <form action="shop.php">
        <p><input type="checkbox" required>Ich habe keine Nussallergien.</p>
        <p><input type="checkbox" required>Ich bin mit der Durchführung der Nutzerstudie einverstanden.</p>
        <p><input href="shop.php" type="submit" class="btn" value="Zum Online-Shop &#8594;"></p>
      </form>
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