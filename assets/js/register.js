$(document).ready(function() {

  $("#hideLogin").click(function() {
    $("#loginForm").hide();
    $("#registerForm").show();
  });

  $("#hideRegister").click(function() {
    $("#registerForm").hide();
    $("#loginForm").show();
  });

})

function registerTitle() {
  document.title = "Registeration - Melody";
}

function loginTitle() {
  document.title = "Login - Melody";
}
