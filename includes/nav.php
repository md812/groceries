<!-- navbar for including in body tag of every page -->
<div class="navbar">
  <!-- logo, image source: picture by Prawny on Pixabay (https://pixabay.com/de/users/prawny-162579/) -->
  <div class="logo">
    <div><img src="images/logo.png" id="logo" alt="groceries-logo">
      <h1>Groceries</h1>
    </div>
  </div>
  <nav>
    <ul id="MenuItems">
      <li>
        <!-- show current logged in user -->
        <h2><?php echo "&#128100; " . htmlspecialchars($_SESSION['username']); ?></h2>
      </li>
      <!-- logout button -->
      <li><a href="logout.php" id="logout" onclick="deleteCookie()">Abmelden</a></li>
    </ul>
  </nav>

</div>

<script>
  <?php include "includes/scripts.js" ?>
</script>