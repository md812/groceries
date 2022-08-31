<?php
session_start();

// redirect not logged in user to index.php in case they want to reach this page by entering URL
if (!isset($_SESSION['login'])) {
    header("Location:/index.php");
}
?>

<!DOCTYPE html>

<html lang="de">

<head>
    <?php include "includes/meta.php" ?>
    <title>Groceries | Online-Shop</title>
</head>

<body>

    <div class="container">
        <?php include "includes/nav.php" ?>
    </div>

    <h1>Kaufe online deine Lebensmittel.</h1><br>

    <div class="center">
        <p>Herzlich willkommen bei Groceries! Schauen Sie in unserem Online-Shop vorbei, vergleichen Sie Ihre Auswahl und entdecken Sie Produkte aus aller Welt!<br>
            Hier können Sie Ihre Auswahl der Produktkategorie treffen.</p>
    </div>

    <div class="center">
        <button onclick="location.href='cerealien.php'" class="btn">Cerealien &#8594;</button>
        <button onclick="location.href='erdnussbutter.php'" class="btn">Erdnussbutter & -mus &#8594;</button>
        <button onclick="location.href='milch.php'" class="btn">Milch & -ersatz &#8594;</button>
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