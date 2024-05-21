const express = require("express");
const cors = require("cors");
const OpenAI = require("openai");

const app = express();
const port = 3004;
let initialState = true; // Track if the initial system message has been sent

app.use(express.json());
app.use(cors());

// Initialize the OpenAI API with your API key
const openai = new OpenAI({
  apiKey: "sk-proj-tDmeqm6Mx5fKZdSAbbfTT3BlbkFJYDkqyEM2oXPpPdchExEO", // Make sure to replace this with your actual API key
});

app.post("/chat", async (req, res) => {
  const userMessage = req.body.message;

  if (initialState) {
    // Send initial message to GPT and don't return it to the client
    try {
      await openai.chat.completions.create({
        model: "gpt-3.5-turbo",
        messages: [
          {
            role: "system",
            content:
              "The user will enter ingredients to receive a recipe suggestion.",
          },
        ],
        max_tokens: 1,
      });
      initialState = false;
      res.json({
        response: "Please enter your ingredients to get a recipe suggestion.",
      });
    } catch (error) {
      console.error("Error:", error);
      res.status(500).json({ error: error.message });
    }
  } else {
    // Handle user ingredient input
    try {
      const chatCompletion = await openai.chat.completions.create({
        model: "gpt-3.5-turbo",
        messages: [{ role: "user", content: userMessage }],
        max_tokens: 150,
        temperature: 0.7,
      });
      const botResponse = chatCompletion.choices[0].message.content;
      res.json({ response: botResponse });
    } catch (error) {
      console.error("Error:", error);
      res.status(500).json({ error: error.message });
    }
  }
});

app.listen(port, () => {
  console.log(`Server running at http://localhost:${port}`);
});
