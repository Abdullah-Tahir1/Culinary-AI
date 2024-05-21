document.addEventListener("DOMContentLoaded", function () {
  const params = new URLSearchParams(window.location.search);
  const inputText = params.get("input");
  if (inputText) {
    const messageInput = document.getElementById("messageInput");
    messageInput.value = decodeURIComponent(inputText);
    fetchRecipeDetails(); // Start fetching recipe details automatically if there's input
  }
});

async function fetchRecipeDetails() {
  const ingredients = document.getElementById("messageInput").value;
  if (!ingredients) return displayError("Please enter some ingredients.");

  // Reset input
  document.getElementById("messageInput").value = "";

  // Fetch and display each part of the recipe sequentially
  const parts = {
    name: "title",
    ingredients: "ingredients",
    substitutes: "substitutes",
    recipe: "recipe",
    nutritionalInfo: "nutritionalValues",
  };

  for (const [key, elementId] of Object.entries(parts)) {
    const prompt = `Given these ingredients: ${ingredients}, please provide the ${key} of the recipe. but dont include ingredients in the recipe or include recipe in the ingredients, dont suggest anything that i dont have, only suggest recipes from the ingredients i have and for the nutritional value, even if the quantity of the ingredients is not specified, give me at least some idea of the nutritional `;
    const data = await fetchDetail(prompt);
    if (data && data.response) {
      displayDetail(elementId, data.response, key);
    } else {
      displayError(`Failed to load ${key} of the recipe.`, elementId);
    }
  }
}

async function fetchDetail(prompt) {
  const response = await fetch("http://localhost:3004/chat", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ message: prompt }),
  });

  return response.json();
}

function displayDetail(elementId, detail, part) {
  const element = document.getElementById(elementId);
  if (element) {
    // Special handling for the recipe name
    if (part === "name") {
      document.querySelector(".title").textContent = detail; // Update the Meal Planner title
      document.title = detail; // Update the page title
    } else {
      element.textContent = detail; // Update text content directly
    }
  }
}

function displayError(message, elementId = "messages") {
  const messageContainer = document.getElementById(elementId);
  messageContainer.textContent = message;
}
