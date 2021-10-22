<?php

  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");
  include("includes/classes/User.php");

  if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
  }
  else {
    $userLoggedIn = "";
  }

  $account = new Account($con);

  include("includes/handlers/register-handle.php");
  include("includes/handlers/login-handle.php");

  function getInputValue($name) {
    if(isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">
    <title> Login - EasyPay </title>

    <link rel="icon" href="assets/images/icons/EpayLogo.png" sizes="16x16" type="image/png">

    <link rel="stylesheet" href="assets/css/register.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" src="assets/js/register.js"></script>

  </head>

  <body>

    <?php

    if(isset($_POST['registerButton'])) {
		   echo '<script>
         $(document).ready(function() {
           $("#loginForm").hide();
           $("#registerForm").show();
         });
        </script>';
  	}
  	else {
  		echo '<script>
      				$(document).ready(function() {
                $("#registerForm").hide();
                $("#loginForm").show();
      				});
      			</script>';
  	}

    ?>

    <div id="loginContainer">

      <div id="inputContainer">

        <form id="loginForm" action="register.php" method="POST">

          <p id="success">
          <?php if(!empty($userLoggedIn)) { echo "You have been successfully registered!"; }  ?>
          </p>
          <h2> Login to your account </h2>

      		<p>
            <?php echo $account->getError(Constants::$loginFailed); ?>
      			<label for="loginUsername"> Username: </label>
      			<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. johnDavis" value="<?php getInputValue('loginUsername'); ?>" required>
      		</p>
          <p>
      			<label for="loginPassword"> Password: </label>
      			<input id="loginPassword" name="loginPassword" type="password" placeholder="Your Password" required>
      		</p>

  		    <button type="submit" name="loginButton"> LOG IN </button>

          <div class="hasAccountText">
            <span onclick="registerTitle()" id="hideLogin"> <a> Don't have an account yet? Signup here. </a> </span>
          </div>

      	</form>

      	<form id="registerForm" action="register.php" method="POST">

          <h2> Create your free account </h2>
      		<p>
      			<?php echo $account->getError(Constants::$usernameCharacters); ?>
            <?php echo $account->getError(Constants::$usernameTaken); ?>
            <label for="username"> Username: </label>
      			<input id="username" name="username" type="text" placeholder="e.g. johnDavis" value="<?php getInputValue('username'); ?>" required>
      		</p>

      		<p>
            <?php echo $account->getError(Constants::$firstNameCharacters); ?>
      			<label for="firstName"> First Name: </label>
      			<input id="firstName" name="firstName" type="text" placeholder="e.g. John" value="<?php getInputValue('firstName'); ?>" required>
      		</p>

      		<p>
            <?php echo $account->getError(Constants::$lastNameCharacters); ?>
      			<label for="lastName"> Last Name: </label>
      			<input id="lastName" name="lastName" type="text" placeholder="e.g. Davis" value="<?php getInputValue('lastName'); ?>" required>
      		</p>

      		<p>
            <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
            <?php echo $account->getError(Constants::$emailInvalid); ?>
            <?php echo $account->getError(Constants::$emailTaken); ?>
      			<label for="email"> Email: </label>
      			<input id="email" name="email" type="email" placeholder="e.g. john.davis@gmail.com" value="<?php getInputValue('email'); ?>" required>
      		</p>

      		<p>
      			<label for="email2"> Confirm Email: </label>
      			<input id="email2" name="email2" type="email" placeholder="e.g. john.davis@gmail.com" value="<?php getInputValue('email2'); ?>" required>
      		</p>

      		<p>
            <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
            <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
            <?php echo $account->getError(Constants::$passwordCharacters); ?>
      			<label for="password"> Password: </label>
      			<input id="password" name="password" type="password" placeholder="Your Password" required>
      		</p>

      		<p>
      			<label for="password2"> Confirm Password: </label>
      			<input id="password2" name="password2" type="password" placeholder="Your Password" required>
      		</p>

          <button type="submit" name="registerButton" onclick="showRegistered()"> SIGN UP </button>

          <div class="hasAccountText">
            <span onclick="loginTitle()" id="hideRegister"> <a> Already have an account? Log in here. </a> </span>
          </div>

      	</form>

      </div>

      <div id="loginText">

        <h1> EasyPay <h1>
        <h2> EasyPay is a Subscription Management Platform that interfaces with different service providers to manage subscriptions and to empower consumers to better manage their monthly/annual subscriptions </h2>

      </div>

    </div>

  </body>

</html>
