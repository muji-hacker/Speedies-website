<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img\speedies icon-black-2.png" type="image/x-icon">
    <title>Service - Domestic | Speedies</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main class="domestic">
    </main>

    <div class="container-express">
        <h1 class="title-express">Domestic</h1>
        <div class="underline-2"></div>
        <p class="description-express">
            Speedies Courier Services is Pakistan's leading Cash on Delivery (COD) service provider, boasting an extensive delivery network, rapid payment processing, and a strong track record of secure and timely deliveries. 
            As the e-commerce market in Pakistan thrives, we introduce Leopards COD Retail to facilitate startups, enabling them to operate without establishing physical offices. 
            This service caters to individuals with limited resources, including housewives, students, and young entrepreneurs working from home or remotely. 
            Our mission is to be your partner in making your customers' lives convenient and easy, ensuring successful business operations in the digital era.
        </p>

        <div class="services-express">
            <a href="domestic-economy.php" class="service-box active">Economy</a>
            <a href="domestic-overnight.php" class="service-box ">Overnight</a>
            <a href="domestic-cod.php" class="service-box">Cod Retail</a>
        </div>

        <div class="express-section">
            <h2 class="express-title">Economy</h2>
            <hr>
            <div class="express-content">
                <img src="img/delivery box.jpg" alt="speedies Economy Service" >
            </div>
            <p class="express-text">
                Speedies offers economical shipping solutions for packages weighing a minimum of 5 kilograms, with convenient door-to-door pickup service. 
                Our Speedies services provide highly cost-effective logistics solutions, enabling you to save on shipping costs and send parcels at discounted rates. 
                Expect timely delivery within two days across Pakistan for all your shipments. Please note that the minimum chargeable weight is 5kg.
                <br>
                <br>
                Additionally, it's essential to consider the standard size of the shipment, which is 12cm x 12cm x 12cm. For shipments exceeding these dimensions, 
                weight will be calculated using the formula: [Length(cm) x Breadth(cm) x Height(cm)] / 5000.
            </p>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>