<?php
// start session
session_start();

// hide potential error or warning messages, they are not needed
error_reporting(0);

// required for logging
require_once('includes/conditions.php');

?>

<!DOCTYPE html>

<!-- disable [F5] for reloading page by mistake, this would influence the conditions, adapted from https://www.c-sharpcorner.com/blogs/disable-f5-key-button-and-browser-refresh -->
<html lang="de" onkeydown="return (event.keyCode != 116)">

<head>
  <?php include "includes/meta.php" ?>
  <title>Groceries | Start</title>
</head>

<body>

  <!-- login script adapted from https://www.php-kurs.com/loesung-einlogg-script.htm -->
  <?php
  try {

    // check if username and password have been set
    if (
      isset($_POST['username']) and $_POST['username'] != ""
      and isset($_POST['password']) and $_POST['password'] != ""
    ) {

      // connect to DB
      $db = new PDO('sqlite:db/webshop.db');

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
        wh_log('logged in ' . $_SESSION['username']);
      } else {
        // else if login wasn't successful
        echo "<h2 class='center error'>Fehler: Ungültige Anmeldedaten!</h2>";
        $_SESSION['login'] = false;
      }
    }

    // if user is not logged in, show login again
    if (!isset($_SESSION['login']) || $_SESSION['login'] == false) {
      // image source: https://uol.de/corporate-design/uni-logo
      echo "<div class='login'>
      <img src='images/uol_logo.svg' alt='uni-oldenburg-logo' class='uol-logo'>
      <h1>Anmeldung zur Nutzerstudie</h1><br>
    </div>";

  ?>
      <!-- login mask -->
      <div class="center login">
        <form id="form-login" method="POST">
          <label for="username">Benutzername:</label><br>
          <input type="text" id="username" name="username" value="" required><br>
          <label for="password">Kennwort:</label><br>
          <input type="password" id="password" name="password" value="" required>
        </form>
      </div>
      <div class="center">
        <input type="submit" form="form-login" class="btn" value="Anmelden &#8594;">
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

  <!-- this part only gets visible is user was logged in successfully -->
  <div class="container">
    <?php include "includes/nav.php" ?>
  </div>

  <h1>Herzlich willkommen!</h1>

  <!-- image source: https://uol.de/corporate-design/uni-logo -->
  <div>
    <img src="images/uol_logo.svg" alt="uni-oldenburg-logo" class="uol-logo">
  </div>

  <div>
    <h2 class="center">Nutzerstudie: Lebensmittelkennzeichnungen beim Online-Einkauf</h2>
    <div class="center">
      Herzlich willkommen zu unserer Nutzerstudie! Wir freuen uns sehr über Ihre Teilnahme.<br>
      Zu Beginn dieser Studie geben wir Ihnen auf dieser Seite einige Informationen über den Ablauf.<br>
      Gleichzeitig benötigen wir Ihre Zustimmung zur Teilnahme an dieser Studie.
    </div><br>

    <div class="center">
      <b>Um fortfahren zu können, müssen Sie das Häkchen bei allen folgenden Optionen setzen.</b>
    </div>

    <!-- show agreement formular, redirect to online shop if all fields were set -->
    <div class="center">
      <form id="form-checklist" action="shop.php" autocomplete="off">
        <p><input type="checkbox" id="age" required>
          <label for="age">Ich bin mindestens 18 Jahre alt.</label>
        </p>
        <p><input type="checkbox" id="allergies" required>
          <label for="allergies">Ich habe keine bekannten Lebensmittelallergien oder -unverträglichkeiten.</label>
        </p>
        <p><input type="checkbox" id="information" required>
          <label for="information">Ich habe die <a onclick="toggleInformation()">Nutzerinformationen zur Teilnahme an der Nutzerstudie</a> gelesen und verstanden.
            <iframe src="docs/information_sheet.pdf#toolbar=0" id="information-sheet"></iframe>
          </label>
        </p>
        <p><input type="checkbox" id="recording" required>
          <label for="recording">Ich bin mit der Aufzeichnung meiner Stimme und der Bildschirmansicht zu Analysezwecken einverstanden.</label>
        </p>
        <p><input type="checkbox" id="signature" required>
          <label for="signature">Ich habe die <a onclick="toggleConsent()">Einwilligungserklärung zur Teilnahme an der Nutzerstudie</a> gelesen und akzeptiere diese.
            <iframe src="docs/consent_form.pdf#toolbar=0" id="consent-form"></iframe>
          </label>
        </p>
        <p><input type="checkbox" id="questions" required>
          <label for="questions">Es wurde mir die Möglichkeit für Rückfragen angeboten. Mir ist bekannt, dass ich jederzeit Fragen stellen kann.</label>
        </p><br>
        <p><input type="checkbox" id="agreed" required>
          <label for="agreed">Ich erfülle alle Teilnahmevoraussetzungen und bin mit der Durchführung der Nutzerstudie einverstanden.</label>
        </p>
      </form>
    </div>

    <div class="center">
      <input href="shop.php" type="submit" form="form-checklist" class="btn" value="Zum Online-Shop &#8594;">
    </div>
  </div>

  <!-- print message to log when entering online shop -->
  <?php wh_log('entered online shop (first condition: ' . $_SESSION['condition1'] . ')'); ?>

  <!-- footer -->
  <div class="footer">
    <?php include "includes/footer.php" ?>
  </div>

  <script>
    <?php include "includes/scripts.js" ?>
  </script>

</body>

</html>