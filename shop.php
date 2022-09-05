<?php
session_start();

// hide potential error messages, they are not needed
error_reporting(0);

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

<?php
try {
  // required for functions printNutriscore(), printEcoscore(), printSclescore() and balanced latin square algorithm
  require_once('includes/conditions.php');

  // Connect to DB
  $db = new PDO('sqlite:db/database.db');

  // Select 12 cereals entries of DB, depending on current condition $condition
  $sql_cereals = "SELECT DISTINCT * FROM products WHERE category = 'Cerealien' AND condition = '$condition' LIMIT 12";
  $result_cereals = $db->prepare($sql_cereals);
  $result_cereals->execute();

  // Save data from DB in array
  $rows_cereals = $result_cereals->fetchAll(PDO::FETCH_ASSOC);


  // Select 12 peanutbutter entries of DB, depending on current condition $condition
  $sql_peanutbutter = "SELECT DISTINCT * FROM products WHERE category = 'Erdnussbutter' AND condition = '$condition' LIMIT 12";
  $result_peanutbutter = $db->prepare($sql_peanutbutter);
  $result_peanutbutter->execute();

  // Save data from DB in array
  $rows_peanutbutter = $result_peanutbutter->fetchAll(PDO::FETCH_ASSOC);


  // Select 12 milk entries of DB, depending on current condition $condition
  $sql_milk = "SELECT DISTINCT * FROM products WHERE category = 'Milch' AND condition = '$condition' LIMIT 12";
  $result_milk = $db->prepare($sql_milk);
  $result_milk->execute();

  // Save data from DB in array
  $rows_milk = $result_milk->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
  error_log($e->getMessage());
  die('Interner Fehler: Die Datenbankverbindung konnte leider nicht aufgebaut werden.');
}
?>

<!-- disable [F5] for reloading page by mistake, this would influence the conditions, adapted from https://www.c-sharpcorner.com/blogs/disable-f5-key-button-and-browser-refresh -->
<body onkeydown="return (event.keyCode != 116)">

  <div class="container">
    <?php include "includes/nav.php" ?>
  </div>

  <!-- display 12 products -->
  <h1 class="center">Online-Shop</h1><br>

  <section class="container content-section small-container">
    <h1 class="section-header category">Cerealien</h1>
    <div class="shop-items row">
      <?php
      $numberOfProducts = 12;
      $nutridescr = 'Der Nutri-Score ist eine 5-stufige Lebensmittelkennzeichnung, welche die Nährwerte von Produkten einer Kategorie vergleichbar machen soll.';
      $ecodescr = 'Der Eco-Score ist eine 5-stufige Lebensmittelkennzeichnung, welche die Nachhaltigkeit von Produkten bewerten soll.';
      $scaledescr = 'Der Scale-Score ist eine Lebensmittelkennzeichnung, welche die Nutri- und Eco-Score-Bewertung von Produkten betrachtet und zu einer kombinierenden Bewertung zusammenfügt. Der Nutri-Score wird dabei etwas höher gewertet als der Eco-Score.';

      for ($i = 0; $i < $numberOfProducts; $i++) {
        print "
        <div class='col-4'>
          <img class='shop-item-image productImg' src='{$rows_cereals[$i]['picture_path']}';' alt='product-" . $i + 1 . "' title='{$rows_cereals[$i]['brand']} {$rows_cereals[$i]['product_name_de']}';'>
          <h2 class='shop-item-title'>
            {$rows_cereals[$i]['brand']}<br>
            {$rows_cereals[$i]['product_name_de']}
          </h2>
          <h3 class='shop-item-price'>
              {$rows_cereals[$i]['price']}€ pro 500g
          </h3>
          <div>";
        // show correct score, depending on current condition $condition
        if ($condition == 'A') {
          // Do nothing here
        } else if ($condition == 'B') {
          print "<img class='productImg scoreImg' src='" . printNutriscore($i, $rows_cereals) . "' alt='nutri-score' title='$nutridescr'><br>";
          print "<img class='productImg scoreImg' src='" . printEcoscore($i, $rows_cereals) . "' alt='eco-score' title='$ecodescr'>";
        } else if ($condition == 'C') {
          print "<img class='productImg scoreImg' src='" . printScalescore($i, $rows_cereals) . "' alt='scale-score' title='$scaledescr'>";
        }
        print "
          </div>
          <div class='shop-item-btn'>
            <button class='btn btn-primary shop-item-button' type='button'>Zum Warenkorb hinzufügen</button>
          </div>
        </div>";
      }
      ?>
    </div>
  </section>

  <section class="container content-section small-container">
    <h1 class="section-header">Erdnussbutter & -mus</h1>
    <div class="shop-items row">
      <?php

      $numberOfProducts = 12;
      $nutridescr = 'Der Nutri-Score ist eine 5-stufige Lebensmittelkennzeichnung, welche die Nährwerte von Produkten einer Kategorie vergleichbar machen soll.';
      $ecodescr = 'Der Eco-Score ist eine 5-stufige Lebensmittelkennzeichnung, welche die Nachhaltigkeit von Produkten bewerten soll.';
      $scaledescr = 'Der Scale-Score ist eine Lebensmittelkennzeichnung, welche die Nutri- und Eco-Score-Bewertung von Produkten betrachtet und zu einer kombinierenden Bewertung zusammenfügt. Der Nutri-Score wird dabei etwas höher gewertet als der Eco-Score.';

      for ($i = 0; $i < $numberOfProducts; $i++) {
        print "
        <div class='col-4'>
          <img class='shop-item-image productImg' src='{$rows_peanutbutter[$i]['picture_path']}';' alt='product-" . $i + 1 . "' title='{$rows_peanutbutter[$i]['brand']} {$rows_peanutbutter[$i]['product_name_de']}';'>
          <h2 class='shop-item-title'>
            {$rows_peanutbutter[$i]['brand']}<br>
            {$rows_peanutbutter[$i]['product_name_de']}
          </h2>
          <h3 class='shop-item-price'>
              {$rows_peanutbutter[$i]['price']}€ pro 500g
          </h3>
          <div>";
        // show correct score, depending on current condition $condition
        if ($condition == 'A') {
          // Do nothing here
        } else if ($condition == 'B') {
          print "<img class='productImg scoreImg' src='" . printNutriscore($i, $rows_peanutbutter) . "' alt='nutri-score' title='$nutridescr'><br>";
          print "<img class='productImg scoreImg' src='" . printEcoscore($i, $rows_peanutbutter) . "' alt='eco-score' title='$ecodescr'>";
        } else if ($condition == 'C') {
          print "<img class='productImg scoreImg' src='" . printScalescore($i, $rows_peanutbutter) . "' alt='scale-score' title='$scaledescr'>";
        }
        print "
          </div>
          <div class='shop-item-btn'>
            <button class='btn btn-primary shop-item-button' type='button'>Zum Warenkorb hinzufügen</button>
          </div>
        </div>";
      }
      ?>
    </div>
  </section>

  <section class="container content-section small-container">
    <h1 class="section-header">Milch & -ersatz</h1>
    <div class="shop-items row">
      <?php

      $numberOfProducts = 12;
      $nutridescr = 'Der Nutri-Score ist eine 5-stufige Lebensmittelkennzeichnung, welche die Nährwerte von Produkten einer Kategorie vergleichbar machen soll.';
      $ecodescr = 'Der Eco-Score ist eine 5-stufige Lebensmittelkennzeichnung, welche die Nachhaltigkeit von Produkten bewerten soll.';
      $scaledescr = 'Der Scale-Score ist eine Lebensmittelkennzeichnung, welche die Nutri- und Eco-Score-Bewertung von Produkten betrachtet und zu einer kombinierenden Bewertung zusammenfügt. Der Nutri-Score wird dabei etwas höher gewertet als der Eco-Score.';

      for ($i = 0; $i < $numberOfProducts; $i++) {
        print "
        <div class='col-4'>
          <img class='shop-item-image productImg' src='{$rows_milk[$i]['picture_path']}';' alt='product-" . $i + 1 . "' title='{$rows_milk[$i]['brand']} {$rows_milk[$i]['product_name_de']}';'>
          <h2 class='shop-item-title'>
            {$rows_milk[$i]['brand']}<br>
            {$rows_milk[$i]['product_name_de']}
          </h2>
          <h3 class='shop-item-price'>
              {$rows_milk[$i]['price']}€ pro 500g
          </h3>
          <div>";
        // show correct score, depending on current condition $condition
        if ($condition == 'A') {
          // Do nothing here
        } else if ($condition == 'B') {
          print "<img class='productImg scoreImg' src='" . printNutriscore($i, $rows_milk) . "' alt='nutri-score' title='$nutridescr'><br>";
          print "<img class='productImg scoreImg' src='" . printEcoscore($i, $rows_milk) . "' alt='eco-score' title='$ecodescr'>";
        } else if ($condition == 'C') {
          print "<img class='productImg scoreImg' src='" . printScalescore($i, $rows_milk) . "' alt='scale-score' title='$scaledescr'>";
        }
        print "
          </div>
          <div class='shop-item-btn'>
            <button class='btn btn-primary shop-item-button' type='button'>Zum Warenkorb hinzufügen</button>
          </div>
        </div>";
      }
      ?>
    </div>
  </section>

  <!-- shopping cart adapted from https://www.youtube.com/watch?v=YeFzkC2awTM -->
  <h1 class="center">Einkaufswagen</h1>
  <section class="container content-section">
    <div class="cart-row">
      <span class="cart-item cart-header cart-column">Produkt</span>
      <span class="cart-price cart-header cart-column">Preis</span>
      <span class="cart-quantity cart-header cart-column">Anzahl</span>
    </div>
    <div class="cart-items">
    </div>
    <div class="cart-total">
      <strong class="cart-total-title">Gesamt</strong>
      <span class="cart-total-price">0€</span>
    </div>
  </section>

  <div class="center">
    <button class="btn" id="updatecondition" type="button" onclick="updateCondition()">Weiter &#8594;</button>
  </div>

  <?php include "includes/modal.php" ?>

  </div>
  <!-- end of products -->

  <!-- footer -->
  <div class="footer">
    <?php include "includes/footer.php" ?>
  </div>

  <script>
    <?php include "includes/scripts.js" ?>
  </script>

</body>

</html>