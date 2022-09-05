<div class="navbar">
  <!-- logo, image source: picture by Prawny on Pixabay (https://pixabay.com/de/users/prawny-162579/) -->
  <div class="logo">
    <p><img src="images/logo.png" id="logo" alt="groceries-logo">
    <h1>Groceries</h1>
    </p>
  </div>
  <nav>
    <ul id="MenuItems">
      <li>
        <h2><?php echo "&#128100; " . htmlspecialchars($_SESSION['username']); ?></h2>
      </li>
      <li><a href="logout.php" id="logout" onclick="deleteCookie()">Abmelden</a></li>
    </ul>
  </nav>

</div>

<script>
  <?php include "includes/scripts.js" ?>
</script>