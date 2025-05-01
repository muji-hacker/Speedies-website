<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img\speedies icon-black-2.png" type="image/x-icon">
    <title>Service - Logistics | Speedies</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="logistics">
    </main>

    <div class="container-express">
        <h1 class="title-express">Logistics</h1>
        <div class="underline-2"></div>
        <p class="description-express">
            With an unparalleled legacy, Speedies Courier Services stands as Pakistan's foremost logistics and supply chain leader. 
            Our extensive network encompasses cutting-edge warehousing, efulfillment and distribution facilities and boasts one of the nation's largest fleets of company-owned primary and secondary distribution vehicles. 
            Speedies Courier Services is committed to delivering exceptional service, serving not only large corporations but also small and medium-sized enterprises with distinction.
        </p>

        <div class="services-express">
            <a href="logistics-overland.php" class="service-box active">Overland</a>
            <a href="logistics-wearhouse.php" class="service-box ">Wearhouse</a>
            <a href="logistics-Efulfillment.php" class="service-box">Efulfillment</a>
            <a href="logistics-Transportation.php" class="service-box">Transportation</a>
        </div>

        <div class="express-section">
            <h2 class="express-title">Overland</h2>
            <hr>
            <div class="express-content">
                <img src="img/speedies container.jpg" alt="speedies Overland Service" >
            </div>
            <p class="express-text">
                Speedies Overland offers economical shipping solutions for heavy and bulky packages weighing over 10KG. With door-to-door pickup service, our extensive network ensures convenient and affordable deliveries.
                Please note that the minimum chargeable weight is 10 kilograms.
                <br>
                For shipments surpassing standard size, weight is calculated using the formula: [Length(cm) x Breadth(cm) x Height(cm)] / 5000.
            </p>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>