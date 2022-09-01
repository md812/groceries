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
  <title>Groceries | Cerealien</title>
</head>

<?php
// required for function showConditionscore(), called for all products
require_once('includes/conditions.php');

try {

  /* Set condition parameter for user study
        A: No Scores
        B: Nutri- & Eco-Score
        C: "Scale-Score"
      */
  $condition = "A";

  // Connect to DB
  $db = new PDO('sqlite:db/database.db');

  // Select 12 random entries of DB, depending on current condition $condition
  $sql = "SELECT DISTINCT * FROM products WHERE category = 'Cerealien' AND condition = '$condition' LIMIT 12";
  $result = $db->prepare($sql);
  $result->execute();

  // Save data from DB in array
  $rows = $result->fetchAll(PDO::FETCH_ASSOC);

  // dummy table for test usage of 12 random products
  print "<br><h1>DUMMY-TABELLE:</h1><br>";
  print "<br><h2 style='text-align: center'>Current condition: $condition</h2><br><br>";
  print "<table border=1>";
  print "<tr><th>" . "brand" . "</th>";
  print "<th>" . "product_name_de" . "</th>";
  print "<th>" . "nutriscore_grade" . "</th>";
  print "<th>" . "nutriscore_score" . "</th>";
  print "<th>" . "ecoscore_grade" . "</th>";
  print "<th>" . "ecoscore_score" . "</th>";
  print "<th>" . "scalescore_grade" . "</th>";
  print "<th>" . "price" . "</th>";
  print "<th>" . "picture_path" . "</th></tr>";

  foreach ($rows as $dummy) {
    print "<tr><td>" . $dummy['brand'] . "</td>";
    print "<td>" . $dummy['product_name_de'] . "</td>";
    print "<td>" . $dummy['nutriscore_grade'] . "</td>";
    print "<td>" . $dummy['nutriscore_score'] . "</td>";
    print "<td>" . $dummy['ecoscore_grade'] . "</td>";
    print "<td>" . $dummy['ecoscore_score'] . "</td>";
    print "<td>" . $dummy['scalescore_grade'] . "</td>";
    print "<td>" . $dummy['price'] . "</td>";
    print "<td>" . $dummy['picture_path'] . "</td></tr>";
  }

  print "</table><br><br>";
  // End of dummy table

} catch (Exception $e) {
  error_log($e->getMessage());
  die('Interner Fehler: Die Datenbankverbindung konnte leider nicht aufgebaut werden.');
}
?>

<body>
  <div class="container">
    <?php include "includes/nav.php" ?>
  </div>

  <!-- display 12 random products -->
  <div class="small-container">
    <h1>Cerealien</h1>
    <div class="row">
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[0]['picture_path']}"; ?>" alt="product-1" title="<?php echo "{$rows[0]['brand']} {$rows[0]['product_name_de']}"; ?>">
        <h2><?php echo "{$rows[0]['brand']}"; ?></h2>
        <h2><?php echo "{$rows[0]['product_name_de']}"; ?></h2>
        <h3><?php echo "{$rows[0]['price']}" . "€ pro 500g"; ?></h3>
        <?php showConditionscore(0); ?>
        <button class='btn'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[1]['picture_path']}"; ?>" alt="product-2" title="<?php echo "{$rows[1]['brand']} {$rows[1]['product_name_de']}"; ?>">
        <h2><?php echo "{$rows[1]['brand']}"; ?></h2>
        <h2><?php echo "{$rows[1]['product_name_de']}"; ?></h2>
        <h3><?php echo "{$rows[1]['price']}" . "€ pro 500g"; ?></h3>
        <?php showConditionscore(1); ?>
        <button class='btn'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[2]['picture_path']}"; ?>" alt="product-3" title="<?php echo "{$rows[2]['brand']} {$rows[2]['product_name_de']}"; ?>">
        <h2><?php echo "{$rows[2]['brand']}"; ?></h2>
        <h2><?php echo "{$rows[2]['product_name_de']}"; ?></h2>
        <h3><?php echo "{$rows[2]['price']}" . "€ pro 500g"; ?></h3>
        <?php showConditionscore(2); ?>
        <button class='btn'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[3]['picture_path']}"; ?>" alt="product-4" title="<?php echo "{$rows[3]['brand']} {$rows[3]['product_name_de']}"; ?>">
        <h2><?php echo "{$rows[3]['brand']}"; ?></h2>
        <h2><?php echo "{$rows[3]['product_name_de']}"; ?></h2>
        <h3><?php echo "{$rows[3]['price']}" . "€ pro 500g"; ?></h3>
        <?php showConditionscore(3); ?>
        <button class='btn'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[4]['picture_path']}"; ?>" alt="product-5" title="<?php echo "{$rows[4]['brand']} {$rows[4]['product_name_de']}"; ?>">
        <h2><?php echo "{$rows[4]['brand']}"; ?></h2>
        <h2><?php echo "{$rows[4]['product_name_de']}"; ?></h2>
        <h3><?php echo "{$rows[4]['price']}" . "€ pro 500g"; ?></h3>
        <?php showConditionscore(4); ?>
        <button class='btn'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[5]['picture_path']}"; ?>" alt="product-6" title="<?php echo "{$rows[5]['brand']} {$rows[5]['product_name_de']}"; ?>">
        <h2><?php echo "{$rows[5]['brand']}"; ?></h2>
        <h2><?php echo "{$rows[5]['product_name_de']}"; ?></h2>
        <h3><?php echo "{$rows[5]['price']}" . "€ pro 500g"; ?></h3>
        <?php showConditionscore(5); ?>
        <button class='btn'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[6]['picture_path']}"; ?>" alt="product-7" title="<?php echo "{$rows[6]['brand']} {$rows[6]['product_name_de']}"; ?>">
        <h2><?php echo "{$rows[6]['brand']}"; ?></h2>
        <h2><?php echo "{$rows[6]['product_name_de']}"; ?></h2>
        <h3><?php echo "{$rows[6]['price']}" . "€ pro 500g"; ?></h3>
        <?php showConditionscore(6); ?>
        <button class='btn'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[7]['picture_path']}"; ?>" alt="product-8" title="<?php echo "{$rows[7]['brand']} {$rows[7]['product_name_de']}"; ?>">
        <h2><?php echo "{$rows[7]['brand']}"; ?></h2>
        <h2><?php echo "{$rows[7]['product_name_de']}"; ?></h2>
        <h3><?php echo "{$rows[7]['price']}" . "€ pro 500g"; ?></h3>
        <?php showConditionscore(7); ?>
        <button class='btn'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[8]['picture_path']}"; ?>" alt="product-9" title="<?php echo "{$rows[8]['brand']} {$rows[8]['product_name_de']}"; ?>">
        <h2><?php echo "{$rows[8]['brand']}"; ?></h2>
        <h2><?php echo "{$rows[8]['product_name_de']}"; ?></h2>
        <h3><?php echo "{$rows[8]['price']}" . "€ pro 500g"; ?></h3>
        <?php showConditionscore(8); ?>
        <button class='btn'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[9]['picture_path']}"; ?>" alt="product-10" title="<?php echo "{$rows[9]['brand']} {$rows[9]['product_name_de']}"; ?>">
        <h2><?php echo "{$rows[9]['brand']}"; ?></h2>
        <h2><?php echo "{$rows[9]['product_name_de']}"; ?></h2>
        <h3><?php echo "{$rows[9]['price']}" . "€ pro 500g"; ?></h3>
        <?php showConditionscore(9); ?>
        <button class='btn'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[10]['picture_path']}"; ?>" alt="product-11" title="<?php echo "{$rows[10]['brand']} {$rows[10]['product_name_de']}"; ?>">
        <h2><?php echo "{$rows[10]['brand']}"; ?></h2>
        <h2><?php echo "{$rows[10]['product_name_de']}"; ?></h2>
        <h3><?php echo "{$rows[10]['price']}" . "€ pro 500g"; ?></h3>
        <?php showConditionscore(10); ?>
        <button class='btn'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[11]['picture_path']}"; ?>" alt="product-12" title="<?php echo "{$rows[11]['brand']} {$rows[11]['product_name_de']}"; ?>">
        <h2><?php echo "{$rows[11]['brand']}"; ?></h2>
        <h2><?php echo "{$rows[11]['product_name_de']}"; ?></h2>
        <h3><?php echo "{$rows[11]['price']}" . "€ pro 500g"; ?></h3>
        <?php showConditionscore(11); ?>
        <button class='btn'>Zum Warenkorb hinzufügen</button>
      </div>
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