<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meal Planner</title>
    <link rel="stylesheet" href="./Styling/Ai.css" />
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

    <div class="container">
      <header>
        <h1 id="pageTitle">
          Where Every Meal is a Personal
          <span>Masterpiece!</span>
        </h1>
      </header>
      <main>
        <div class="chat-container">
          <input
            type="text"
            id="messageInput"
            placeholder="Type your message here..."
          />
          <button onclick="fetchRecipeDetails()">Send</button>
        </div>

        <section class="meal-planner">
          <h1 class="title" id="recipeTitle">Meal Planner</h1>
          <div class="columns">
            <div class="column" onclick="speakColumn('ingredients')">
              <h2>Ingredients</h2>
              <div id="ingredients" class="box-content">
                Loading ingredients...
              </div>
            </div>

            <div class="column" onclick="speakColumn('recipe')">
              <h2>Recipe</h2>
              <div id="recipe" class="box-content">Loading recipe...</div>
            </div>

            <div class="column" onclick="speakColumn('substitutes')">
              <h2>Substitute Ingredients</h2>
              <div id="substitutes" class="box-content">
                Loading substitutes...
              </div>
            </div>

            <div class="column" onclick="speakColumn('nutritionalValues')">
              <h2>Nutritional Values</h2>
              <div id="nutritionalValues" class="box-content">
                Loading nutritional values...
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>

    <footer>
      <hr>
      <div class="lower-footer">
        <p class="copyright">&copy; 2024 Culinary AI. All rights reserved</p>
        <div class="social-media">
        <a href="https://www.instagram.com/culinary_.ai?igsh=MWhzbndydTE0N2lv">Instagram</a>
        <a href="https://youtube.com/@mr-culinaryai?si=Jqo-7QQYXnv0BeIm">Youtube</a>
      </div>
      </div>
    </footer>
    <script src="scripts.js"></script>
  </body>

  <script>
    let currentSpeech = null; // This will store the current speech synthesis process

    function speakColumn(columnId) {
      const heading = document.querySelector(`#${columnId}`)
        .previousElementSibling.innerText;
      const content = document.getElementById(columnId).textContent;

      const fullText = `${heading}. ${content}`;

      // Stop any currently playing speech
      if (currentSpeech) {
        window.speechSynthesis.cancel();
        currentSpeech = null;
      }

      // Start new speech synthesis
      currentSpeech = new SpeechSynthesisUtterance(fullText);
      currentSpeech.onend = () => {
        currentSpeech = null; // Clear the speech object once done
      };

      window.speechSynthesis.speak(currentSpeech);
    }

    function displayError(message, elementId = "messages") {
      const messageContainer = document.getElementById(elementId);
      messageContainer.textContent = message;
    }
  </script>
</html>