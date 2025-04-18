<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="services.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Welcome To E-Health Care</h2>
            <div class="nav-links">
                <a href="home.php">Home</a>
                <a href="doctors.php">Doctors</a>
                
                <a href="services.php">Services</a>
                <a href="adminPatForm.php">Sign Up</a>
                <a href="login.php">Log In</a>
                <a href="about.php">About Us</a>
            </div>

            <div class="search-bar-wrapper">
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                    <button>Search</button>
                </div>
            </div>
        </div>
        <div class="content">
            <!-- Services Section -->
            <div class="services">
                <h3>Our Services</h3>
                <div class="service-list">
                    <a href="doctors.html">
                        <div class="service-item">
                        
                            <div class="image-size">
                                <img src="telemedicine.png" alt="Telemedicine">
                            </div>
                            <h4>Telemedicine</h4>
                            <p>Consult with our healthcare professionals online from the comfort of your home.</p>
                        </div>
                    </a>
                    <div class="service-item">
                       <div class="image-size">
                        <img src="pharmacy.png" alt="Online Pharmacy">
                       </div>
                        <h4>Online Pharmacy</h4>
                        <p>Order medications online and have them delivered to your doorstep.</p>
                    </div>
                    <div class="service-item">
                    <div class="image-size">
                        <img src="health-checkup.png" alt="Health Checkup">
                    </div>
                        <h4>Health Checkups</h4>
                        <p>Book regular health checkups and screenings to stay healthy.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            &copy; 2024 E-Health Care. All Rights Reserved.
        </div>
    </div>
</body>
</html>
