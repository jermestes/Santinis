<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Santini's Grille</title>
</head>
<body>
    <header>
        <!-- Header Logo -->
        <div class="header-branding">
            <img src="meatball-man_transparent.png" alt="Santini's 'Meatball Man' cartoon mascot" />
            <h1><span class="bubble-text">Santini's</span> <span>Grille</span></h1>
        </div>

        <!-- Mobile Button Container -->
        <div class="mobile-btn-container">
            <!-- Contact Info Button -->
            <button class="mobile-btn">Contact Info</button>

            <!-- Call Now Button -->
            <a class="mobile-btn" href="tel:+1215-437-7236">Call to Order</a>
        </div>
    </header>

    <!-- Contact Info -->
    <address>
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

    <!-- Food Menu -->
    <main>
        <?php include 'menu-render.php'; ?>
    </main>
</body>
</html>