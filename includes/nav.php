<div class="navbar">
  <!-- logo, image source: picture by Prawny on Pixabay (https://pixabay.com/de/users/prawny-162579/) -->
  <div class="logo">
    <a href="index.php"><img src="images/logo.png" id="logo" alt="groceries-logo">
      <h1>Groceries</h1>
    </a>
  </div>
  <nav>
    <ul id="MenuItems">
      <li>
        <h3><?php echo "Aktueller Nutzer: " . htmlspecialchars($_SESSION['username']); ?></h3>
      </li>
      <li><a href="warenkorb.php">&#x1f6d2;</a></li>
    </ul>
  </nav>

</div>