<!-- navbar for including in body tag of every page -->
<div class="navbar">
  <!-- logo, image source: picture by Prawny on Pixabay (https://pixabay.com/de/users/prawny-162579/) -->
  <div class="logo">
    <div><img src="images/logo.png" id="logo" alt="Logo des Online-Shops Groceries">
      <span class="logo-text" lang="en">Groceries</span>
    </div>
  </div>
  <nav>
    <ul id="MenuItems">
      <!-- show shopping card anchor link when purchasing -->
      <?php if (basename($_SERVER['PHP_SELF']) === 'shop.php'): ?>
        <li><a href="#shoppingcart"><span aria-hidden="true">&#x1F6D2;</span> Zum Einkaufswagen</a></li>
      <?php endif; ?>
      <li>
        <!-- show current logged in user -->
        <p><?php echo "Aktuell angemeldet: <span aria-hidden='true'>&#128100;</span> " . htmlspecialchars($_SESSION['username']); ?></p>
      </li>
      <!-- logout button -->
      <li><button id="logout" onclick="deleteCookie()"><span aria-hidden='true'>&#x23FB;</span> Abmelden </button></li>
    </ul>
  </nav>

</div>
<hr><br>

<script>
  <?php include "includes/scripts.js" ?>
</script>