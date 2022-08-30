
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../static/css/global.css">
    <link rel="stylesheet" href="../static/css/home.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="../views/startpage.html"><img src="../assets/Global_Assets/A's Logo.png" width="140px"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="../views/homepage.php">Home</a></li>
                        <li><a href="../views/products.html">Products</a></li>
                        <li><a href="../views/aboutpage.html">About</a></li>
                        <li><a href="../views/contactpage.html">Contact</a></li>
                        <div class="dropdown">
                        <li><a href="">Account</a>
                            <div class="dropdown-content">
                                <a href="#">User Profile</a>
                                <a href="../logout.php">Log Out</a>
                            </div>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>