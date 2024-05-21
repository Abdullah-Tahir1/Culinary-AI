<?php 
include "connect.php";  // Include the database connection settings
include 'register.php'; // Include the registration and login handling script
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SignIn&SignUp</title>
  <link rel="stylesheet" href="./Styling/signIn.css" />
</head>

<body>
  <main>
    <header>
      <div class="logo">CI</div>
    </header>
<center>

<div class="content">
      <h1>Welcome to <span>Culinary AI</span></h1>
      <p class="subheading">Login to your account</p>

      <form method="POST" action="SignIN.php" id="signup" style="display: none;">
        <h1><span>Sign Up</span></h1>
        <div class="form-group">
          <input type="email" name="email" placeholder="Email" required />
          <label for="email">Email</label>
        </div>
        <div class="form-group">
          <input type="tel" name="phone" placeholder="Phone Number" required pattern="[0-9]{10}"
            title="Ten digits code" />
          <label for="phone">Phone Number</label>
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Password" required />
          <label for="password">Password</label>
        </div>
        <button type="submit" name="signUp">Sign Up</button>
        <br>
        <button type="button" onclick="showSignIn()">Already registered? Sign In</button>
      </form>

      <form method="POST" action="SignIN.php" id="signin">
        <h1><span>Sign In</span></h1>
        <div class="form-group">
          <input type="email" name="email" placeholder="Email" required />
          <label for="email">Email</label>
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Password" required />
          <label for="password">Password</label>
        </div>
        <button type="submit" name="signIn">Sign In</button>
        <br>
        <button type="button" onclick="showSignUp()">New here? Sign Up</button>
      </form>


      <div class="social-links">
        <a href="google-oauth.php"><i class="fa-brands fa-google"></i></a>
      </div>
    </div>

</center>
    <div class="side-image"></div>
  </main>
  
  <script src="https://kit.fontawesome.com/6fe439f0d2.js" crossorigin="anonymous"></script>
 <script src="logtest.js"></script>
</body>

</html>