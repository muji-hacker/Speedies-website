<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img\speedies icon-black-2.png" type="image/x-icon">
    <title>Service - Express | Speedies</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main class="express">
    </main>

    <div class="container-express">
        <h1 class="title-express">Express</h1>
        <div class="underline-2"></div>
        <p class="description-express">
            Speedies Courier Services stands as the undisputed leader in the Express Business, symbolizing speed, discounts, trust, security, sensitivity, 
            a vast network, and even our own branded cargo plane. With an array of services, we redefine efficiency and reliability.
        </p>

        <div class="services-express">
            <a href="express-overnight.php" class="service-box ">Overnight</a>
            <a href="express-economy.php" class="service-box ">Economy</a>
            <a href="express-flyer.php" class="service-box">Flyer Express</a>
            <a href="express-box.php" class="service-box">Speedies Box</a>
            <a href="express-time.php" class="service-box active">Make in Time Delivery</a>
            <a href="express-student.php" class="service-box">Student Express</a>
            <a href="express-care.php" class="service-box">Documents & Care</a>
        </div>

        <div class="express-section">
            <h2 class="express-title">Make in Time Delivery</h2>
            <hr>
            <div class="express-content">
                <img src="img/speedies van with a guy.jpg" alt="speedies overnight Service" >
            </div>
            <p class="express-text">
                Make in Time Delivery offers guaranteed delivery within specific time slots in all major cities of Pakistan. 
                Take control of your deliveries, aligning them with your preferences, and enjoy the security of our money-back guarantee.
                Operating at affordable rates, this service offers specific 2-hour time slots for parcel drop-offs.    
            </p>
            <div class="delivery-table">
                <table>
                    <thead>
                        <tr>
                            <th>Delivery Time Slots</th>
                            <th>Delivery Time Slots</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>10:00AM to 12:00PM</td><td>12:00PM to 02:00PM</td></tr>
                        <tr><td>02:00PM to 04:00PM</td><td>04:00PM to 06:00PM</td></tr>
                        <tr><td>06:00PM to 08:00PM</td><td>08:00PM to 10:00PM</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="note">
                <strong>Note:</strong><br>
                <span>Please note that terms and conditions apply, and additional charges may apply.</span>
            </p>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>