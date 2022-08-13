<!DOCTYPE html>

<html lang="de">
  <head>
    <?php include "includes/meta.php" ?>
    <title>Groceries | Online-Shop</title>
  </head>

  <?php
    try {
      // Connect to DB
      $db = new PDO('sqlite:db/produkte.db');
      
      // Select 12 random entries of DB
      $result = $db->prepare('SELECT * FROM cerealien ORDER BY RANDOM() LIMIT 12');
      $result->execute();

      // dummy table for test usage of 12 products
      print "<br><b>DUMMY-TABELLE:</b><br><br>";
      print "<table border=1>";
      print "<tr><th>"."product_name_de"."</th>";
      print "<th>"."nutriscore_grade"."</th>";
      print "<th>"."nutriscore_score"."</th>";
      print "<th>"."ecoscore_grade"."</th>";
      print "<th>"."ecoscore_score"."</th>";
      print "<th>"."price"."</th>";
      print "<th>"."picture_path"."</th></tr>";

      foreach($result as $row) { 
        print "<tr><td>".$row['product_name_de']."</td>";
        print "<td>".$row['nutriscore_grade']."</td>";
        print "<td>".$row['nutriscore_score']."</td>";
        print "<td>".$row['ecoscore_grade']."</td>";
        print "<td>".$row['ecoscore_score']."</td>";
        print "<td>".$row['price']."</td>";
        print "<td>".$row['picture_path']."</td></tr>";
      }

      print "</table><br><br>";
      // End of dummy table
      
    } catch(Exception $e) {
      error_log($e->getMessage());
      die('Interner Fehler: Die Datenbankverbindung konnte leider nicht aufgebaut werden.');
    }

    // Choose the correct picture for Nutri-Score of product
    function printNutriscore() {
      global $row;
      if ($row['nutriscore_grade'] == 'a') {
        print "<img src='images/scores/nutriscore-a.svg' class='score' alt='nutri-score-a'>";
      } else if ($row['nutriscore_grade'] == 'b') {
        print "<img src='images/scores/nutriscore-b.svg' class='score' alt='nutri-score-b'>";
      } else if ($row['nutriscore_grade'] == 'c') {
        print "<img src='images/scores/nutriscore-c.svg' class='score' alt='nutri-score-c'>";
      } else if ($row['nutriscore_grade'] == 'd') {
        print "<img src='images/scores/nutriscore-d.svg' class='score' alt='nutri-score-d'>";
      } else if ($row['nutriscore_grade'] == 'e') {
        print "<img src='images/scores/nutriscore-e.svg' class='score' alt='nutri-score-e'>";
      } else if ($row['nutriscore_grade'] == NULL || $row['nutriscore_grade'] == "unknown") {
        print "<img src='images/scores/nutriscore-unknown.svg' class='score' alt='nutri-score-unknown'>";
      }
    }

    // Choose the correct picture for Eco-Score of product
    function printEcoscore() {
      global $row;
      if ($row['ecoscore_grade'] == 'a') {
        print "<img src='images/scores/ecoscore-a.svg' class='score' alt='eco-score-a'>";
      } else if ($row['ecoscore_grade'] == 'b') {
        print "<img src='images/scores/ecoscore-b.svg' class='score' alt='eco-score-b'>";
      } else if ($row['ecoscore_grade'] == 'c') {
        print "<img src='images/scores/ecoscore-c.svg' class='score' alt='eco-score-c'>";
      } else if ($row['ecoscore_grade'] == 'd') {
        print "<img src='images/scores/ecoscore-d.svg' class='score' alt='eco-score-d'>";
      } else if ($row['ecoscore_grade'] == 'e') {
        print "<img src='images/scores/ecoscore-e.svg' class='score' alt='eco-score-e'>";
      } else if ($row['ecoscore_grade'] == NULL || $row['ecoscore_grade'] == "unknown") {
        print "<img src='images/scores/ecoscore-unknown.svg' class='score' alt='eco-score-unknown'>";
      }
    }

  ?>

  <body>

    <div class="container">
    <?php include "includes/nav.php" ?>
    </div>

    <div class="small-container">
    <h2>Alle Produkte</h2>
            
      <div class="row">
        <div class="col-4">
            <img src="images/test.png" alt="product">
            <h4><?php print $row['product_name_de'];?></h4>
            <p><?php print $row['price']."€";?></p>
            <?php printNutriscore(); ?><br>
            <?php printEcoscore(); ?>
            <button class='btn add'>Hinzufügen</button>
        </div>
        <div class="col-4">
            <img src="images/test.png" alt="product">
            <h4><?php print $row['product_name_de'];?></h4>
            <p><?php print $row['price']."€";?></p>
            <?php printNutriscore(); ?><br>
            <?php printEcoscore(); ?>
            <button class='btn add'>Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4>Heinz Ketchup</h4>
          <p>2,75€</p>
          <img src="images/scores/nutriscore-c.svg" class="score" alt="nutri-score"><br>
          <img src="images/scores/ecoscore-c.svg" class="score" alt="eco-score">
          <button class="btn add">Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4>Heinz Ketchup</h4>
          <p>2,75€</p>
          <img src="images/scores/nutriscore-d.svg" class="score" alt="nutri-score"><br>
          <img src="images/scores/ecoscore-d.svg" class="score" alt="eco-score">
          <button class="btn add">Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4>Heinz Ketchup</h4>
          <p>2,75€</p>
          <img src="images/scores/nutriscore-e.svg" class="score" alt="nutri-score"><br>
          <img src="images/scores/ecoscore-e.svg" class="score" alt="eco-score">
          <button class="btn add">Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4>Heinz Ketchup</h4>
          <p>2,75€</p>
          <img src="images/scores/nutriscore-unknown.svg" class="score" alt="nutri-score"><br>
          <img src="images/scores/ecoscore-unknown.svg" class="score" alt="eco-score">
          <button class="btn add">Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4>Heinz Ketchup</h4>
          <p>2,75€</p>
          <img src="images/scores/nutriscore-a.svg" class="score" alt="nutri-score"><br>
          <img src="images/scores/ecoscore-unknown.svg" class="score"alt="eco-score">
          <button class="btn add">Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4>Heinz Ketchup</h4>
          <p>2,75€</p>
          <img src="images/scores/nutriscore-unknown.svg" class="score" alt="nutri-score"><br>
          <img src="images/scores/ecoscore-a.svg" class="score" alt="eco-score">
          <button class="btn add">Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4>Heinz Ketchup</h4>
          <p>2,75€</p>
          <img src="images/scores/nutriscore-a.svg" class="score" alt="nutri-score"><br>
          <img src="images/scores/ecoscore-a.svg" class="score" alt="eco-score">
          <button class="btn add">Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4>Heinz Ketchup</h4>
          <p>2,75€</p>
          <img src="images/scores/nutriscore-a.svg" class="score" alt="nutri-score"><br>
          <img src="images/scores/ecoscore-a.svg" class="score" alt="eco-score">
          <button class="btn add">Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4>Heinz Ketchup</h4>
          <p>2,75€</p>
          <img src="images/scores/nutriscore-a.svg" class="score" alt="nutri-score"><br>
          <img src="images/scores/ecoscore-a.svg" class="score" alt="eco-score">
          <button class="btn add">Hinzufügen</button>
        </div>
        <div class="col-4">
          <img src="images/test.png" alt="product">
          <h4>Heinz Ketchup</h4>
          <p>2,75€</p>
          <img src="images/scores/nutriscore-a.svg" class="score" alt="nutri-score"><br>
          <img src="images/scores/ecoscore-a.svg" class="score" alt="eco-score">
          <button class="btn add">Hinzufügen</button>
        </div>
      </div>

      <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>&#8594</span>
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