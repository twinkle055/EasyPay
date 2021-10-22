<?php include("includes/header.php") ?>

<h2 class="pageHeadingBig"> Make your payments for any of these subscriptions now! </h2>

<div class="gridViewContainer">

  <?php

    $subscribeQuery = mysqli_query($con, "SELECT * FROM subscriptions ORDER BY subscribeId");

    while($row = mysqli_fetch_array($subscribeQuery)) {

      echo "
      <div class='gridViewItem'>

           <a href='subscribe.php?id=" . $row['subscribeId'] . "'>
          <img src='" . $row['artworkPath'] . "'>

          <div class='gridViewInfo'>"
            . $row['subscriptionName'] .
          "</div>
        </a>

      </div>
      ";

    }

  ?>

</div>

<?php include("includes/footer.php") ?>
