<!DOCTYPE html>

<html lang="de">

<head>
  <?php include "includes/meta.php" ?>
  <title>Groceries | Milch & -ersatz</title>
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
  $condition = "C";

  // Connect to DB
  $db = new PDO('sqlite:db/produkte.db');

  // Select 12 random entries of DB, depending on current condition $condition
  $sql = "SELECT DISTINCT * FROM milch WHERE condition = '$condition' LIMIT 12";
  $result = $db->prepare($sql);
  $result->execute();

  // Save data from db in array
  $rows = $result->fetchAll(PDO::FETCH_ASSOC);

  // dummy table for test usage of 12 random products
  print "<br><h1>DUMMY-TABELLE:</h1><br>";
  print "<br><h3 style='text-align: center'>Current condition: $condition</h3><br><br>";
  print "<table border=1>";
  print "<tr><th>" . "brand" . "</th>";
  print "<th>" . "product_name_de" . "</th>";
  print "<th>" . "nutriscore_grade" . "</th>";
  print "<th>" . "nutriscore_score" . "</th>";
  print "<th>" . "ecoscore_grade" . "</th>";
  print "<th>" . "ecoscore_score" . "</th>";
  print "<th>" . "scalescore_grade" . "</th>";
  print "<th>" . "scalescore_score" . "</th>";
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
    print "<td>" . $dummy['scalescore_score'] . "</td>";
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
    <h1>Milch & -ersatz</h1>
    <div class="row">
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[0]['picture_path']}"; ?>" alt="product-1">
        <h4><?php echo "{$rows[0]['brand']}"; ?></h4>
        <h4><?php echo "{$rows[0]['product_name_de']}"; ?></h4>
        <p><?php echo "{$rows[0]['price']}" . "€ pro 1l"; ?></p>
        <?php showConditionscore(0); ?>
        <button class='btn add'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[1]['picture_path']}"; ?>" alt="product-2">
        <h4><?php echo "{$rows[1]['brand']}"; ?></h4>
        <h4><?php echo "{$rows[1]['product_name_de']}"; ?></h4>
        <p><?php echo "{$rows[1]['price']}" . "€ pro 1l"; ?></p>
        <?php showConditionscore(1); ?>
        <button class='btn add'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[2]['picture_path']}"; ?>" alt="product-3">
        <h4><?php echo "{$rows[2]['brand']}"; ?></h4>
        <h4><?php echo "{$rows[2]['product_name_de']}"; ?></h4>
        <p><?php echo "{$rows[2]['price']}" . "€ pro 1l"; ?></p>
        <?php showConditionscore(2); ?>
        <button class='btn add'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[3]['picture_path']}"; ?>" alt="product-4">
        <h4><?php echo "{$rows[3]['brand']}"; ?></h4>
        <h4><?php echo "{$rows[3]['product_name_de']}"; ?></h4>
        <p><?php echo "{$rows[3]['price']}" . "€ pro 1l"; ?></p>
        <?php showConditionscore(3); ?>
        <button class='btn add'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[4]['picture_path']}"; ?>" alt="product-5">
        <h4><?php echo "{$rows[4]['brand']}"; ?></h4>
        <h4><?php echo "{$rows[4]['product_name_de']}"; ?></h4>
        <p><?php echo "{$rows[4]['price']}" . "€ pro 1l"; ?></p>
        <?php showConditionscore(4); ?>
        <button class='btn add'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[5]['picture_path']}"; ?>" alt="product-6">
        <h4><?php echo "{$rows[5]['brand']}"; ?></h4>
        <h4><?php echo "{$rows[5]['product_name_de']}"; ?></h4>
        <p><?php echo "{$rows[5]['price']}" . "€ pro 1l"; ?></p>
        <?php showConditionscore(5); ?>
        <button class='btn add'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[6]['picture_path']}"; ?>" alt="product-7">
        <h4><?php echo "{$rows[6]['brand']}"; ?></h4>
        <h4><?php echo "{$rows[6]['product_name_de']}"; ?></h4>
        <p><?php echo "{$rows[6]['price']}" . "€ pro 1l"; ?></p>
        <?php showConditionscore(6); ?>
        <button class='btn add'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[7]['picture_path']}"; ?>" alt="product-8">
        <h4><?php echo "{$rows[7]['brand']}"; ?></h4>
        <h4><?php echo "{$rows[7]['product_name_de']}"; ?></h4>
        <p><?php echo "{$rows[7]['price']}" . "€ pro 1l"; ?></p>
        <?php showConditionscore(7); ?>
        <button class='btn add'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[8]['picture_path']}"; ?>" alt="product-9">
        <h4><?php echo "{$rows[8]['brand']}"; ?></h4>
        <h4><?php echo "{$rows[8]['product_name_de']}"; ?></h4>
        <p><?php echo "{$rows[8]['price']}" . "€ pro 1l"; ?></p>
        <?php showConditionscore(8); ?>
        <button class='btn add'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[9]['picture_path']}"; ?>" alt="product-10">
        <h4><?php echo "{$rows[9]['brand']}"; ?></h4>
        <h4><?php echo "{$rows[9]['product_name_de']}"; ?></h4>
        <p><?php echo "{$rows[9]['price']}" . "€ pro 1l"; ?></p>
        <?php showConditionscore(9); ?>
        <button class='btn add'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[10]['picture_path']}"; ?>" alt="product-11">
        <h4><?php echo "{$rows[10]['brand']}"; ?></h4>
        <h4><?php echo "{$rows[10]['product_name_de']}"; ?></h4>
        <p><?php echo "{$rows[10]['price']}" . "€ pro 1l"; ?></p>
        <?php showConditionscore(10); ?>
        <button class='btn add'>Zum Warenkorb hinzufügen</button>
      </div>
      <div class="col-4">
        <img class="productImg" src="<?php echo "{$rows[11]['picture_path']}"; ?>" alt="product-12">
        <h4><?php echo "{$rows[11]['brand']}"; ?></h4>
        <h4><?php echo "{$rows[11]['product_name_de']}"; ?></h4>
        <p><?php echo "{$rows[11]['price']}" . "€ pro 1l"; ?></p>
        <?php showConditionscore(11); ?>
        <button class='btn add'>Zum Warenkorb hinzufügen</button>
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