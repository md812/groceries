<?php
// start session
session_start();

// hide potential error messages, they are not needed
error_reporting(0);
?>

<!DOCTYPE html>

<html lang="de">

<head>
  <?php include "includes/meta.php" ?>
  <title>Groceries | Start</title>
</head>

<!-- login script adapted from https://www.php-kurs.com/loesung-einlogg-script.htm -->
<?php
try {

  // check if username and password have been set
  if (
    isset($_POST['username']) and $_POST['username'] != ""
    and isset($_POST['password']) and $_POST['password'] != ""
  ) {

    // connect to DB
    $db = new PDO('sqlite:db/database.db');

    $username = $_POST['username'];
    $password = $_POST['password'];

    // select all users of DB
    $sql = "SELECT * FROM users WHERE `username` = '$username'";
    $result = $db->prepare($sql);
    $result->execute();

    // save data from DB in array
    $rows_user = $result->fetchAll(PDO::FETCH_ASSOC);

    // check if username and password (hashed in DB) are correct
    global $rows_user;
    if (
      $_POST['username'] == $rows_user[0]['username']
      and password_verify($password, $rows_user[0]['password'])
    ) {
      // successful login
      $_SESSION['username'] = $username;
      $_SESSION['login'] = true;
      $_SESSION['condition1'] = $rows_user[0]['condition1'];
      $_SESSION['condition2'] = $rows_user[0]['condition2'];
      $_SESSION['condition3'] = $rows_user[0]['condition3'];
    } else {
      echo "<h2 class='center error'>Fehler: Ungültige Eingabe!</h2>";
      $_SESSION['login'] = false;
    }
  }

  // if user is not logged in, show login again
  if (!isset($_SESSION['login']) || $_SESSION['login'] == false) {
    // image source: https://uol.de/corporate-design/uni-logo
    echo "<div class='login'>
      <img src='images/uol_logo.jpg' alt='uni-oldenburg-logo' class='uol-logo'>
      <h1>Anmeldung zur Nutzerstudie</h1><br>
    </div>";

    $url = $_SERVER['SCRIPT_NAME'];
?>
    <div class="center login">
      <form id="form-login" action="<?php $url ?>" method="POST">
        <label for="username">Benutzername:</label><br>
        <input type="text" id="username" name="username" value="" required><br>
        <label for="password">Kennwort:</label><br>
        <input type="password" id="password" name="password" value="" required>
      </form>
    </div>
    <div class="center">
      <input href="index.php" type="submit" form="form-login" class="btn" value="Anmelden &#8594;">
    </div>
    <!-- footer -->
    <div class="footer">
      <?php include "includes/footer.php" ?>
    </div>

<?php
    // end program because user is not logged in yet
    exit;
  }
} catch (Exception $e) {
  error_log($e->getMessage());
  die('Interner Fehler: Die Datenbankverbindung konnte leider nicht aufgebaut werden.');
}
?>
<!-- end of adaption -->

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
      <form id="form-checklist" action="shop.php" autocomplete="off">
        <p><input type="checkbox" id="age" required>
          <label for="age">Ich bin mindestens 18 Jahre alt.</label>
        </p>
        <p><input type="checkbox" id="allergies" required>
          <label for="allergies">Ich habe keine bekannten Lebensmittelallergien oder -unverträglichkeiten.</label>
        </p>
        <p><input type="checkbox" id="questions" required>
          <label for="questions">Es wurde mir die Möglichkeit für Rückfragen angeboten. Mir ist bekannt, dass ich jederzeit Fragen stellen kann.</label>
        </p>
        <p><input type="checkbox" id="recording" required>
          <label for="recording">Ich bin mit der Aufzeichnung meiner Stimme und der Bildschirmansicht zu Analysezwecken einverstanden.</label>
        </p>
        <p><input type="checkbox" id="signature" required>
          <label for="signature">Ich habe die Einverständniserklärung zur Teilnahme an der Nutzerstudie unterschrieben.</label>
        </p><br>
        <p><input type="checkbox" id="agreed" required>
          <label for="agreed">Ich bin mit der Durchführung der Nutzerstudie einverstanden.</label>
        </p>
      </form>
    </div>

    <div class="center">
      <input href="shop.php" type="submit" form="form-checklist" class="btn" value="Zum Online-Shop &#8594;">
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