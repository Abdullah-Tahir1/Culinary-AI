function showPopup(planName) {
  var messageElement = document.getElementById("popup-message");
  var message =
    'You have started using the <span class="plan-' +
    planName.toLowerCase() +
    '">' +
    planName +
    "</span> plan.";

  messageElement.innerHTML = message; // Set the inner HTML of the message element
  document.getElementById("popup-overlay").style.display = "flex"; // Show the popup
}

function closePopup() {
  document.getElementById("popup-overlay").style.display = "none"; // Hide the popup
}

// Make sure these IDs match your HTML button IDs
document
  .getElementById("paypal-button-container-free")
  .addEventListener("click", function () {
    showPopup("Free");
  });
document
  .getElementById("paypal-button-container-freemium")
  .addEventListener("click", function () {
    showPopup("Freemium");
  });
document
  .getElementById("paypal-button-container-premium")
  .addEventListener("click", function () {
    showPopup("Premium");
  });
