<?php include("includes/header.php");

if(isset($_GET['id'])) {
  $subscribeId = $_GET['id'];
}
else {
  header("Location: index.php");
}

$subscribe = new Subscribe($con, $subscribeId);
$subscriptionName = $subscribe->getTitle();

?>

<?php include("includes/footer.php"); ?>
