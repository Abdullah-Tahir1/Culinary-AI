<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./Styling/header&footer.css" />
  <link rel="stylesheet" href="./Styling/styles.css" />
  <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400&display=swap" rel="stylesheet" />
  <title>Home</title>
</head>

<body>
  <header>
    <nav>
      <div class="logo"><a href="index.php">CI</a></div>
      <ul>
        <li><a href="AI gen.php">AI Generator</a></li>
        <li><a href="Pricing.php">Pricing</a></li>
        <li><a href="notebook.php">NoteBook</a></li>
        <li><a href="recipe.php">Recipes</a></li>
      </ul>
    </nav>
    <div class="login">
      <a href="contact.php">Contact Us</a>
    </div>
  </header>
  <main>
    <div class="content-container">
      <h1>The best recipe <span>generator.</span></h1>
      <p class="subheading">
        Turn your ingredients into delicious recipes with Mr. Culinary
        AI-powered recipe generator!
      </p>
      <div class="input-group">
        <input type="text" placeholder="Enter recipe idea or ingredients..." />
        <button class="generate-btn">
          <i class="fa-regular fa-star"></i> Generate
        </button>
      </div>
      <p class="examples">
        Examples: Cheeseburger with sausage, Pizza Margherita, ...
      </p>
    </div>
  </main>

  <section class="recipe-generator">
    <h2 class="section-heading">Culinary AI Generated Recipes</h2>
    <div class="recipe-cards">
      <div class="card">
        <img src="Assests/steak.png" alt="Steak" />
        <p class="label">Steak</p>
      </div>
      <div class="card">
        <img src="Assests/cheeseburger.png" alt="Cheeseburger" />
        <p class="label">Cheeseburger</p>
      </div>
      <div class="card">
        <img src="Assests/pancakes.png" alt="Pancakes" />
        <p class="label">Pancakes</p>
      </div>
      <div class="card">
        <img src="Assests/pasta.png" alt="Pasta" />
        <p class="label">Pasta</p>
      </div>
    </div>
    <a href="AI gen.php"><button class="generate-btn" > 
      <i class="fa-regular fa-star"></i> Generate recipe with AI
    </button></a>
  </section>
  <section class="work-steps">
    <div class="step-card">
      <h3>1. Enter a prompt</h3>
      <p>
        Enter a recipe idea you've always wanted to try and Mr. Culinary AI
        will create a recipe for you. <br /><br />
        You can also enter a list of ingredients you would like to use. Mr.
        Culinary AI will then create a recipe for you that includes those
        ingredients. Perfect to create a leftover recipe! <br /><br />
        You can also enter your personal preferences such as vegetarian,
        vegan, gluten-free, lactose-free, etc.
      </p>
    </div>
    <div class="step-card">
      <h3>2. Generate a recipe</h3>
      <p>
        Mr. Culinary AI will then create a recipe for you. The recipe will be
        based on the prompt you enter. <br /><br />
        A special artificial intelligence is used to create these
        breath-taking recipes, within just a few seconds!
      </p>
    </div>
    <div class="step-card">
      <h3>3. Generate a recipe</h3>
      <p>
        You can then cook the recipe and enjoy your meal. <br /><br />
        Rate the recipe from 1-5 stars and let others know how you liked it.
        The recipe will be saved in your notebook. You can also share the
        recipe with your friends and family.
      </p>
    </div>
  </section>
  <section class="who-we-are">
    <h2>Who we are?</h2>
    <p>
      Welcome to AI-Powered Recipe Generator, where delicious and nutritious
      meals meet your unique preferences, skills, and lifestyle. With our
      advanced AI technology, we're changing the way you discover, create, and
      enjoy food.
    </p>
    <p>
      Our platform offers personalized recipes for everyone, whether you're
      health-conscious, busy, or have dietary restrictions. We empower you
      with ingredient substitutions and detailed nutritional info, enhancing
      your culinary experience.
    </p>
    <p>
      With a user-friendly interface and multilingual support, navigating our
      platform is seamless. Your privacy is our priority, and we ensure strict
      data security.
    </p>
    <p>
      Let's cook up something amazing together - join us on this culinary
      journey!
    </p>
  </section>
  <footer>
    <hr />
    <div class="footer-content">
      <div class="text">
        <h2>Join newsletter</h2>
        <p>
          You will receive regular development updates on Mr. Culinary AI.
        </p>
      </div>
      <button class="subscribe-btn">Join the newsletter</button>
    </div>

    <div class="lower-footer">
      <p class="copyright">&copy; 2024 Culinary AI. All rights reserved</p>
      <div class="social-media">
        <a href="https://www.instagram.com/culinary_.ai?igsh=MWhzbndydTE0N2lv">Instagram</a>
        <a href="https://youtube.com/@mr-culinaryai?si=Jqo-7QQYXnv0BeIm">Youtube</a>
      </div>
    </div>

  </footer>
</body>
<script src="https://kit.fontawesome.com/5a60f5786b.js" crossorigin="anonymous"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const button = document.querySelector(".generate-btn");
    button.addEventListener("click", function () {
      const input = document.querySelector(".input-group input");
      const inputValue = encodeURIComponent(input.value.trim());
      if (inputValue) {
        window.location.href = `AI gen.php?input=${inputValue}`;
      }
    });
  });
</script>

</html>