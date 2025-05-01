<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to Speedies">
    <link rel="icon" href="img\speedies icon-black-2.png" type="image/x-icon">
    <title>Home | Speedies</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>  
    <main class="home">
        <div id="popupOverlay">
            <div class="container-form">
                <div class="form-box">
                    <h2 class="h2-form">Fill Your Details</h2>
                    <form action="contact-form.php" method="post" id="contact">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
    
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
    
                        <label for="phone">Phone:</label>
                        <input type="tel" id="phone" name="phone" required>
    
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
    
                        <button type="submit" id="sumbitBtn"><b>Submit</b></button>
                        <button type="close" id="closeBtn"><b>Close</b></button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <section class="shipping-section">
        <div class="content-box">
            <h2 class="h2-ship">Document and Parcel Shipping</h2>
            <p class="subheading">For All Shippers</p>
            <p class="service-description">
                Learn about Speedies – the unmatched leader in express shipping across Pakistan.
            </p>
            <div class="services-ship">
                <div class="service-item">
                    <img src="img\24-7.png" alt="Business Day">
                    <span>Next Possible Business Day</span>
                </div>
                <div class="service-item">
                    <img src="img\hand.png" alt="Business Solutions">
                    <span>Tailored Business Solutions</span>
                </div>
                <div class="service-item">
                    <img src="img\shipping.png" alt="Flexible shipping">
                    <span>Flexible shipping Options</span>
                </div>
                <div class="service-item">
                    <img src="img\menu.png" alt="Optional Services">
                    <span>Wide Variety of Optional Services</span>
                </div>
            </div>
            <a href="#" class="btn-ship">Explore Speedies</a>
        </div>

        <div class="image-box">
            <img src="img\speddies parcel post.jpg" alt="speedies parcel post">
        </div>
    </section>
    <hr>
    <section class="ecom-solutions">
        <h2 class="h2-ecom">E-com Solutions</h2>
        <div class="underline"></div>
        <p class="ecom-description">
            Increase the productivity of your business applications by integrating them with Speedies products and services through APIs.
        </p>
        
        <div class="solutions-container">
            <div class="solution">
                <img src="img\application.png" alt="Speedies Developer Portal" class="icon">
                <h3>Speedies Developer Portal</h3>
                <p>Our Developer Portal allows the developers to augment their applications by integrating them with Speddies APIs.</p>
                <a href="#" class="ecom-btn">More Details</a>
                <!-- <button class="ecom-btn">More Details</button> -->
            </div>

            <div class="solution">
                <img src="img\plugin.png" alt="Speedies Plug-ins" class="icon">
                <h3>Speddies Plug-ins</h3>
                <p>Our plug-ins allow you to add specific features to your existing business applications — whether your own or third-party — by adding customizations and additional functionalities to suit your purpose.</p>
                <!-- <button class="ecom-btn">More Details</button> -->
                <a href="#" class="ecom-btn">More Details</a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
