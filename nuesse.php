<!DOCTYPE html>

<html lang="de">
  <head>
    <?php include "includes/meta.php" ?>
    <title>Groceries | Nuss-Produkte</title>
  </head>

  <?php
    try {
      // Connect to DB
      $db = new PDO('sqlite:db/produkte.db');

      // Select 12 random entries of DB
      $sql = 'SELECT * FROM nuesse ORDER BY RANDOM() LIMIT 12';
      $result = $db->prepare($sql);
      $result->execute();

      // Save data from db in array
      $rows = $result->fetchAll(PDO::FETCH_ASSOC);

      // dummy table for test usage of 12 random products
      print "<br><h1>DUMMY-TABELLE:</h1><br><br>";
      print "<table border=1>";
      print "<tr><th>"."product_name_de"."</th>";
      print "<th>"."nutriscore_grade"."</th>";
      print "<th>"."nutriscore_score"."</th>";
      print "<th>"."ecoscore_grade"."</th>";
      print "<th>"."ecoscore_score"."</th>";
      print "<th>"."price"."</th>";
      print "<th>"."picture_path"."</th></tr>";

      foreach($rows as $dummy) { 
        print "<tr><td>".$dummy['product_name_de']."</td>";
        print "<td>".$dummy['nutriscore_grade']."</td>";
        print "<td>".$dummy['nutriscore_score']."</td>";
        print "<td>".$dummy['ecoscore_grade']."</td>";
        print "<td>".$dummy['ecoscore_score']."</td>";
        print "<td>".$dummy['price']."</td>";
        print "<td>".$dummy['picture_path']."</td></tr>";
      }

      print "</table><br><br>";
      // End of dummy table
      
    } catch(Exception $e) {
      error_log($e->getMessage());
      die('Interner Fehler: Die Datenbankverbindung konnte leider nicht aufgebaut werden.');
    }

    // Choose the correct picture for Nutri-Score of product
    function printNutriscore($nutri) {
      global $rows;
      if ($rows[$nutri]['nutriscore_grade'] == 'a') {
        print "<img src='images/scores/nutriscore-a.svg' class='score' alt='nutri-score-a'>";
      } else if ($rows[$nutri]['nutriscore_grade'] == 'b') {
        print "<img src='images/scores/nutriscore-b.svg' class='score' alt='nutri-score-b'>";
      } else if ($rows[$nutri]['nutriscore_grade'] == 'c') {
        print "<img src='images/scores/nutriscore-c.svg' class='score' alt='nutri-score-c'>";
      } else if ($rows[$nutri]['nutriscore_grade'] == 'd') {
        print "<img src='images/scores/nutriscore-d.svg' class='score' alt='nutri-score-d'>";
      } else if ($rows[$nutri]['nutriscore_grade'] == 'e') {
        print "<img src='images/scores/nutriscore-e.svg' class='score' alt='nutri-score-e'>";
      } else if ($rows[$nutri]['nutriscore_grade'] == NULL || $rows[$nutri]['nutriscore_grade'] == "unknown") {
        print "<img src='images/scores/nutriscore-unknown.svg' class='score' alt='nutri-score-unknown'>";
      }
    }

    // Choose the correct picture for Eco-Score of product
    function printEcoscore($eco) {
      global $rows;
      if ($rows[$eco]['ecoscore_grade'] == 'a') {
        print "<img src='images/scores/ecoscore-a.svg' class='score' alt='eco-score-a'>";
      } else if ($rows[$eco]['ecoscore_grade'] == 'b') {
        print "<img src='images/scores/ecoscore-b.svg' class='score' alt='eco-score-b'>";
      } else if ($rows[$eco]['ecoscore_grade'] == 'c') {
        print "<img src='images/scores/ecoscore-c.svg' class='score' alt='eco-score-c'>";
      } else if ($rows[$eco]['ecoscore_grade'] == 'd') {
        print "<img src='images/scores/ecoscore-d.svg' class='score' alt='eco-score-d'>";
      } else if ($rows[$eco]['ecoscore_grade'] == 'e') {
        print "<img src='images/scores/ecoscore-e.svg' class='score' alt='eco-score-e'>";
      } else if ($rows[$eco]['ecoscore_grade'] == NULL || $rows[$eco]['ecoscore_grade'] == "unknown") {
        print "<img src='images/scores/ecoscore-unknown.svg' class='score' alt='eco-score-unknown'>";
      }
    }
  ?>

  <body>

    <div class="container">
      <?php include "includes/nav.php" ?>
    </div>

    <!-- display 12 random products -->
    <div class="small-container">
      <h2>Nuss-Produkte</h2>
      <div class="row">
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4><?php echo "{$rows[0]['product_name_de']}";?></h4>
          <p><?php echo "{$rows[0]['price']}"."€";?></p>
          <?php printNutriscore(0); ?><br>
          <?php printEcoscore(0); ?>
          <button class='btn add'>Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4><?php echo "{$rows[1]['product_name_de']}";?></h4>
          <p><?php echo "{$rows[1]['price']}"."€";?></p>
          <?php printNutriscore(1); ?><br>
          <?php printEcoscore(1); ?>
          <button class='btn add'>Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4><?php echo "{$rows[2]['product_name_de']}";?></h4>
          <p><?php echo "{$rows[2]['price']}"."€";?></p>
          <?php printNutriscore(2); ?><br>
          <?php printEcoscore(2); ?>
          <button class='btn add'>Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4><?php echo "{$rows[3]['product_name_de']}";?></h4>
          <p><?php echo "{$rows[3]['price']}"."€";?></p>
          <?php printNutriscore(3); ?><br>
          <?php printEcoscore(3); ?>
          <button class='btn add'>Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4><?php echo "{$rows[4]['product_name_de']}";?></h4>
          <p><?php echo "{$rows[4]['price']}"."€";?></p>
          <?php printNutriscore(4); ?><br>
          <?php printEcoscore(4); ?>
          <button class='btn add'>Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4><?php echo "{$rows[5]['product_name_de']}";?></h4>
          <p><?php echo "{$rows[5]['price']}"."€";?></p>
          <?php printNutriscore(5); ?><br>
          <?php printEcoscore(5); ?>
          <button class='btn add'>Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4><?php echo "{$rows[6]['product_name_de']}";?></h4>
          <p><?php echo "{$rows[6]['price']}"."€";?></p>
          <?php printNutriscore(6); ?><br>
          <?php printEcoscore(6); ?>
          <button class='btn add'>Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4><?php echo "{$rows[7]['product_name_de']}";?></h4>
          <p><?php echo "{$rows[7]['price']}"."€";?></p>
          <?php printNutriscore(7); ?><br>
          <?php printEcoscore(7); ?>
          <button class='btn add'>Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4><?php echo "{$rows[8]['product_name_de']}";?></h4>
          <p><?php echo "{$rows[8]['price']}"."€";?></p>
          <?php printNutriscore(8); ?><br>
          <?php printEcoscore(8); ?>
          <button class='btn add'>Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4><?php echo "{$rows[9]['product_name_de']}";?></h4>
          <p><?php echo "{$rows[9]['price']}"."€";?></p>
          <?php printNutriscore(9); ?><br>
          <?php printEcoscore(9); ?>
          <button class='btn add'>Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4><?php echo "{$rows[10]['product_name_de']}";?></h4>
          <p><?php echo "{$rows[10]['price']}"."€";?></p>
          <?php printNutriscore(10); ?><br>
          <?php printEcoscore(10); ?>
          <button class='btn add'>Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4><?php echo "{$rows[11]['product_name_de']}";?></h4>
          <p><?php echo "{$rows[11]['price']}"."€";?></p>
          <?php printNutriscore(11); ?><br>
          <?php printEcoscore(11); ?>
          <button class='btn add'>Hinzufügen</button>
        </div>
      </div>

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