function sendEmail() {
  // Collect data from the form
  var templateParams = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
  };

  // Send the email
  emailjs.send("service_ck9owsm", "template_guhmubs", templateParams).then(
    function (response) {
      console.log("SUCCESS!", response.status, response.text);
      alert("Your message has been sent successfully!");
    },
    function (error) {
      console.log("FAILED...", error);
      alert("Failed to send the message, please try again.");
    }
  );
}
///////////////////////////////////pricing page function ///////////////////////////////////////

// Function to open the pop-up
function openPopup() {
  document.getElementById("newsletter-popup").style.display = "block";
}

// Function to close the pop-up
function closePopup() {
  document.getElementById("newsletter-popup").style.display = "none";
}

// Function to subscribe to the newsletter
function subscribeToNewsletter() {
  let email = document.getElementById("email").value;
  if (!email) {
    alert("Please enter your email.");
    return;
  }

  var templateParams = {
    email: email, // Using the user's email
  };

  // Assuming service ID and template ID are correctly set
  emailjs.send("service_ck9owsm", "template_9t9vlbm", templateParams).then(
    function (response) {
      console.log("SUCCESS!", response.status, response.text);
      alert("Thank you for subscribing to our newsletter!");
      closePopup(); // Close the pop-up on successful subscription
    },
    function (error) {
      console.log("FAILED...", error);
      alert("Failed to subscribe to the newsletter. Please try again.");
    }
  );
}
