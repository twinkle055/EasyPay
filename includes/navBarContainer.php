<div id="navBarContainer">
  <nav class="navBar">

    <a href="index.php" class="logo">
      <img src="assets/images/icons/EPayLogo.png" alt="EasyPay Logo">
      <span class="logoName"> EasyPay </span>
    </a>

    <div class="group">

      <div class="navItem">
        <a href="search.php" class="navItemLink">
          Search
          <img src="assets/images/icons/search.png" class="icon" alt="Search">
        </a>
      </div>

    </div>

    <div class="group">

      <div class="navItem">
        <a href="index.php" class="navItemLink"> Home </a>
      </div>

      <div class="navItem">
        <a href="yourSubscriptions.php" class="navItemLink"> Your Subscriptions </a>
      </div>

      <div class="navItem">
        <a href="profile.php" class="navItemLink"> <?php echo $userLoggedIn->getFirstAndLastName(); ?> </a>
      </div>

    </div>

  </nav>
</div>
