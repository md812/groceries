<!DOCTYPE html>

<html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Online-Shop für Lebensmittel">
    <meta name="author" content="Marco Druschba">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="includes/style.css">
    <title>Groceries | Account </title>
  </head>

  <body>

    <div class="container">
    <?php include "includes/nav.php" ?>
    </div>

    <!-- account-page -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/test.png" alt="test" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Registrieren</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm" action="">
                            <input type="text" placeholder="Nutzername">
                            <input type="password" placeholder="Passwort">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Passwort vergessen?</a>
                        </form>

                        <form id="RegForm" action="">
                            <input type="text" placeholder="Nutzername">
                            <input type="email" placeholder="E-Mail">
                            <input type="password" placeholder="Passwort">
                            <button type="submit" class="btn">Registrieren</button>
                        </form>
                    </div>
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