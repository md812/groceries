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

  <h1>Herzlich willkommen!</h1>

  <!-- image source: https://uol.de/corporate-design/uni-logo -->
  <div>
    <img src="images/uol_logo.jpg" alt="uni-oldenburg-logo" class="uol-logo">
  </div>

  <div>
    <div class="center">
      Herzlich willkommen bei unserer Nutzerstudie! Wir freuen uns sehr über Ihre Teilnahme.<br>
      Zu Beginn dieser Studie geben wir Ihnen auf dieser Seite einige Informationen über den Ablauf.<br>
      Gleichzeitig benötigen wir Ihre Zustimmung zur Teilnahme an dieser Studie.
    </div><br>

    <div class="center">
      <b>Um fortfahren zu können, müssen Sie das Häkchen bei allen folgenden Optionen setzen.</b>
    </div>

    <div class="center">
      <form id="index-form" action="shop.php">
        <p><input type="checkbox" id="age" required>
        <label for="age">Ich bin mindestens 18 Jahre alt.</label></p>
        <p><input type="checkbox" id="allergies" required>
        <label for="allergies">Ich habe keine bekannten Lebensmittelallergien oder -unverträglichkeiten.</label></p>
        <p><input type="checkbox" id="questions" required>
        <label for="questions">Es wurde mir die Möglichkeit für Rückfragen angeboten. Mir ist bekannt, dass ich jederzeit Fragen stellen kann.</label></p>
        <p><input type="checkbox" id="recording" required>
        <label for="recording">Ich bin mit der Aufzeichnung meiner Stimme und der Bildschirmansicht zu Analysezwecken einverstanden.</label></p>
        <p><input type="checkbox" id="signature" required>
        <label for="signature">Ich habe die Einverständniserklärung zur Teilnahme an der Nutzerstudie unterschrieben.</label></p><br>
        <p><input type="checkbox" id="agreed" required>
        <label for="agreed">Ich bin mit der Durchführung der Nutzerstudie einverstanden.</label></p>
      </form>
    </div>

    <div class="center">
      <input href="shop.php" type="submit" form="index-form" class="btn" value="Zum Online-Shop &#8594;">
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