<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./Styling/header&footer.css" />
    <link rel="stylesheet" href="./Styling/contact.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
    (function() {
        emailjs.init("HPaPcYZSOOv26zycI"); // Replace 'your_user_id' with your actual Email.js user ID.
    })();
    </script>


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
    <!-- Contact Form Section -->
    <div class="contact-form-container">
        <h2 class="contact-heading">Con<span>tact</span></h2>
        <div class="contact-form">
            <form>
                <!-- Name Field -->
                <div class="form-group">
                    <input type="text" id="name" name="name" required placeholder=" ">
                    <label for="name">Name</label>
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <input type="email" id="email" name="email" required placeholder=" ">
                    <label for="email">Email</label>
                </div>

                <!-- Message Field -->
                <div class="form-group">
                    <textarea id="message" required placeholder=" "></textarea>
                    <label for="message">Message</label>
                </div>

                <!-- Send Button -->
                <button type="button" onclick="sendEmail()" class="send-btn">Send</button>
            </form>
        </div>

    </div>

    <footer>
        <hr />
        <div class="lower-footer">
            <p class="copyright">&copy; 2024 Culinary AI. All rights reserved</p>
            <div class="social-media">
                <a href="https://www.instagram.com/culinary_.ai?igsh=MWhzbndydTE0N2lv">Instagram</a>
                <a href="https://youtube.com/@mr-culinaryai?si=Jqo-7QQYXnv0BeIm">Youtube</a>
            </div>
        </div>
    </footer>
    <script src="Email.js"></script>
</body>

</html>