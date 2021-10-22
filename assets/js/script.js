function logout() {
  $.post("includes/handlers/logout.php", function() {
    location.reload();
  });
}
