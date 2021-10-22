<?php

include("includes/config.php");
include("includes/classes/User.php");
include("includes/classes/Subscribe.php");

if(isset($_SESSION['userLoggedIn'])) {
  $userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
  $username = $userLoggedIn->getUsername();
  echo "<script>userLoggedIn = '$username'; </script>";
}
else {
  header("Location: register.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">
    <title> Welcome to EasyPay! </title>

    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <link rel="icon" href="assets/images/icons/EPayLogo.png" sizes="16x16" type="image/png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" src="assets/js/script.js"></script>

  </head>

  <body>

    <div id="mainContainer">

      <div id="topContainer">

        <?php include("includes/navBarContainer.php"); ?>

        <div id="mainViewContainer">

          <div id="mainContent">

            <span class="logout"> <button onclick="logout()" type="button" name="logout"> LOGOUT </button> </span>
