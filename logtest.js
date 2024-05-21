document.addEventListener("DOMContentLoaded", function () {
  showSignUp(); // Call the showSignUp function when the page loads
});

function showSignUp() {
  document.getElementById("signup").style.display = "block";
  document.getElementById("signin").style.display = "none";
}

function showSignIn() {
  document.getElementById("signup").style.display = "none";
  document.getElementById("signin").style.display = "block";
}
