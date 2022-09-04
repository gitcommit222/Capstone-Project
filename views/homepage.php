<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="icon" type="image/x-icon" href="../assets/Global_Assets/favicon.png">
    <!-- CDN -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../static/css/global.css">
    <link rel="stylesheet" href="../static/css/start.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- JavaScript -->
</head>
<body>

    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="../views/homepage.php"><img src="../assets/Global_Assets/A's Logo.png" width="50px"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="../views/homepage.php" style="font-weight: 600;">Home<span class="line">|</span></a></li>
                    <li><a href="../views/products.php">Products<span class="line">|</span></a></li>
                    <li><a href="../views/completed.php">Completed Projects<span class="line">|</span></a></li>
                    <li><a href="../views/services.php">Services<i class="bi bi-chevron-compact-down"></i><span class="line">|</span></a></li>
                    <div class="dropdown">
                        <li><a href="">Account<i class="bi bi-chevron-compact-down"></i></a></li>
                            <div class="dropdown-content">
                                <a href="#">User Profile<i class="bi bi-person-circle"></i></a>
                                <a href="../logout.php">Log out<i class="bi bi-box-arrow-in-right"></i></a>
                            </div>
                    </div>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Welcome to A's Glass & <br>Aluminum Works</h1>
                <p>We offer high quality service together <br> with high quality products</p>
                <a href="" class="btn">Book Now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="../assets/Global_Assets/glass-building.png">
            </div>
        </div>
    </div> 
</div>
<!-- featured Products -->
<div class="ftCats">
    <div class="small-container">
        <h2 class="title">About Us</h2>
        <div class="row">
            <div class="col-3">
                <img src="../assets/Start_Assets/window1.jpg">
            </div>
            <div class="col-3">
                <img src="../assets/Start_Assets/kitchen.jpg">
            </div>
            <div class="col-3">
                <img src="../assets/Start_Assets/kfurnitures.jpg">
            </div>
        </div>
    </div>
</div>
<!-- featured products -->
<div class="small-container">
    <h2 class="title">Our Services</h2>
    <div class="row">
        <div class="col-4">
            <img src="../assets/Start_Assets/prod1.jpg">
            <h4>Kitchen Cabinets</h4>
        </div>
        <div class="col-4">
            <img src="../assets/Start_Assets/prod2.jpg">
            <h4>Cabinet</h4>
        </div>
        <div class="col-4">
            <img src="../assets/Start_Assets/prod3.jpg">
            <h4>Installed Sliding Window</h4>
        </div>
        <div class="col-4">
            <img src="../assets/Start_Assets/prod4.jpg">
            <h4>Living Room Cabinet</h4>
        </div>
        <div class="col-4">
            <img src="../assets/Start_Assets/prod5.jpg">
            <h4>Kitchen Cabinet</h4>
        </div>
        <div class="col-4">
            <img src="../assets/Start_Assets/prod6.jpg">
            <h4>Kitchen Cabinet Drawer</h4>
        </div>
    </div>
</div>
<!-- Offer -->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="../assets/Start_Assets/offer.png" class="offer-img">
            </div>
            <div class="col-2">
                <p>Exclusively Available on A's Glass & Aluminum</p>
                <h1>Cabinet</h1>
                <small>Who says gray is a dull color, <br>if this cabinets are superb.

                </small><br>
                <a href="" class="btn">Buy Now &#8594;</a>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<div class="footer">
    <div class="ftcontainer">
        <div class="row">
            <div class="footer-col-1">
                <h3>Where we are?</h3>
                <ul>
                    <li><a href="https://www.google.com/maps/place/Calansayan,+San+Jose,+Batangas/@13.8530923,121.0842163,14.27z/data=!4m5!3m4!1s0x33bd121e614fc5c3:0x8133cc2b344769da!8m2!3d13.8543867!4d121.0936983">
                    <i class="bi bi-geo-alt"></i>We are located at Calansayan, San Jose , Batangas</a></li>
                </ul>
            </div>
            <div class="footer-col-2">
                <img src="../assets/Global_Assets/new.png">
                <p>Home Improvement with high quality and affordable Glass & Aluminum Products.</p>
            </div>
            <div class="footer-col-3">
                <h3>Follow Us</h3>
            <ul>
                <li><a href="https://web.facebook.com/AtienzasGlassandAluminum"><i class="bi bi-facebook"></i>Facebook</a></li>
                <li><a href="#"><i class="bi bi-twitter"></i>Twitter</a></li>
                <li><a href="#"><i class="bi bi-instagram"></i>Instagram</a></li>
            </ul>
            </div>
        </div>
        <hr>
    <div class="bottoms">
        <ul><li><a href="">Terms and Conditions</a></li></ul>
        <p>©2022 | Batangas State University Student's.</p>
        <ul><li><a href="">Privacy and Policy</a></li></ul>
    </div>
    </div>
</div>
</body>
</html>