<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Santini's Grille</title>
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="icon" href="favicon/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <header>
        <!-- Header Logo -->
        <div class="header-branding">
            <img src="santinis-grille_wordmark.svg" class="wordmark" alt="">
            <img src="meatball-man_transparent.png" class="meatball-man" alt="Santini's 'Meatball Man' cartoon mascot" />
            <h1>Santini's Grille</h1>
        </div>

        <!-- Mobile Button Container -->
        <div class="mobile-btn-container">
            <!-- Contact Info Button -->
            <button class="mobile-btn" id="contact-info-btn">Contact Info</button>

            <!-- Call Now Button -->
            <a class="mobile-btn" href="tel:+1215-437-7236">Call to Order</a>
        </div>

        <!-- Contact Info -->
        <address id="contact-blocks-container">
            <button class="close_contact-info_btn">X</button>
            <!-- Phone -->
            <div class="contact-block">
                <img src="icons/phone.svg" alt="">
                <div class="contact-block__text">
                    <h3>Call to order</h3>
                    <a href="tel:+1215-437-7236">(215) 437-7236</a>
                </div>
            </div>
            <!-- Hours -->
            <div class="contact-block">
                <img src="icons/clock.svg" alt="">
                <div class="contact-block__text">
                    <h3>Hours</h3>
                    <p>Wednesday-Saturday: <time datetime="Su 11:00-20:00">11am-8pm</time></p>
                    <p>Sunday: <time datetime="Su 11:00-19:00">11am-7pm</time></p>
                </div>
            </div>
            <!-- Location -->
            <div class="contact-block">
                <img src="icons/map-pin.svg" alt="">
                <div class="contact-block__text">
                    <h3>Location</h3>
                    <p>3294 Red Lion Rd, Philadelphia, PA 19114</p>
                </div>
            </div>
            <!-- Instagram -->
            <div class="contact-block">
                <img src="icons/instagram.svg" alt="">
                <div class="contact-block__text">
                    <h3>Follow us on Instagram</h3>
                    <a href="https://www.instagram.com/santinis_grille/" target="_blank" rel="noopener noreferrer">@santinis_grille</a>
                </div>
            </div>   
        </address>
    </header>

    <!-- Food Menu -->
    <main>
        <?php include 'menu-render.php'; ?>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Santini's Grille. All rights reserved.</p>
        <p>Website by <a href="https://jermestes.github.io">Jeremy Estes</a>
    </footer>
<script src="script.js"></script>
</body>
</html>