<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Styling/header&footer.css" />
    <link rel="stylesheet" href="./Styling/pricing.css" />
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
    (function() {
        emailjs.init({
            publicKey: "HPaPcYZSOOv26zycI",
        });
    })();
    </script>

    <title>Pricing</title>
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

    <div class="Pricing-1">
        <div class="heading">
            <h1>Try for free, affordable<span> paid plans!</span></h1>
        </div>
        <div class="sub-heading">
            <h3>
                The best AI-powered recipe generator and recipe management platform.<br>
                Organize and share all your recipes in one platform.
            </h3>
        </div>
    </div>

    </div>
    <div class="Pricing-2">
        <div class="box-container">
            <!-- Existing plan options -->
            <div class="type">
                <h1>Free</h1>
                <p>Try Mr. Culinary AI for free.</p>
                <h3>0$<span> / Months</span></h3>
                <ul>
                    <li><i class="fa-solid fa-check fa-lg"></i>Allergy Information</li>
                    <li><i class="fa-solid fa-check fa-lg"></i>10 Questions per day</li>
                    <li><i class="fa-solid fa-check fa-lg"></i>10 Personalized recipes</li>
                </ul>
                <button class="free-btn" id="paypal-button-container-free">Start today for free</button>
            </div>
            <div class="type">
                <h1><span style="color: #e48a7d">Freemium</span></h1>
                <p>Get more out of Mr. Culinary AI</p>
                <h3>5$<span> / Months</span></h3>
                <ul>
                    <li><i class="fa-solid fa-check fa-lg"></i>Allergy Information</li>
                    <li><i class="fa-solid fa-check fa-lg"></i>Ingredient Substitution</li>
                    <li><i class="fa-solid fa-check fa-lg"></i>35 Questions per day</li>
                    <li><i class="fa-solid fa-check fa-lg"></i>30 Personalized recipes</li>
                </ul>
                <button class="freemium-btn" id="paypal-button-container-freemium">Upgrade</button>
            </div>
            <div class="type">
                <h1><span style="color: #7d87e4">Premium</span></h1>
                <p>Unlock the full potential.</p>
                <h3>15$<span> / Months</span></h3>
                <ul>
                    <li><i class="fa-solid fa-check fa-lg"></i>Audible Recipes</li>
                    <li><i class="fa-solid fa-check fa-lg"></i>Allergy Information</li>
                    <li><i class="fa-solid fa-check fa-lg"></i>Multilingual Support</li>
                    <li><i class="fa-solid fa-check fa-lg"></i>Nutritional Information</li>
                    <li><i class="fa-solid fa-check fa-lg"></i>Ingredient Substitution</li>
                    <li><i class="fa-solid fa-check fa-lg"></i>Unlimited questions per day</li>
                    <li><i class="fa-solid fa-check fa-lg"></i>Unlimited personalized recipes</li>
                </ul>
                <button class="premium-btn" id="paypal-button-container-premium">Upgrade</button>
            </div>
        </div>
        <!-- Newsletter Subscription Popup -->
        <div id="newsletter-popup" class="newsletter-popup">
            <div class="popup-content">
                <span class="close-button" onclick="closePopup()">&times;</span>
                <h2>Subscribe to Our Newsletter</h2>
                <p>Enter your email to stay updated with our latest news and offers!</p>
                <input type="email" id="email" placeholder="Your Email" required>
                <button onclick="subscribeToNewsletter()">Subscribe</button>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="text">
                <h2>Join newsletter</h2>
                <p>
                    You will receive regular development updates on Mr. Culinary AI.
                </p>
            </div>
            <button onclick="openPopup()" class="subscribe-btn">Join the newsletter</button>
        </div>
        <div class="lower-footer">
            <p class="copyright">&copy; 2024 Culinary AI. All rights reserved</p>
            <div class="social-media">
                <a href="https://www.instagram.com/culinary_.ai?igsh=MWhzbndydTE0N2lv">Instagram</a>
                <a href="https://youtube.com/@mr-culinaryai?si=Jqo-7QQYXnv0BeIm">Youtube</a>
            </div>
        </div>
    </footer>
    <script src="popup.js"></script>
    <script src="Email.js"></script>

</body>

</html>