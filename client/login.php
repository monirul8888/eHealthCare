<?php
include 'D:\SEMESTER\eHealth\server\connect.php';
include 'D:\SEMESTER\eHealth\server\pLogin.php';
include 'D:\SEMESTER\eHealth\server\adminLogin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | E-Health Care</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <!-- Header Section -->
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

        <!-- Content Section -->
        <div class="content">
            <div class="form">
                <h2>Sign In</h2>
                <form action="login.php" method="POST">
                    <?php if (!empty($errorMessage)) { ?>
                        <div class="error-message">
                            <?php echo htmlspecialchars($errorMessage); ?>
                        </div>
                    <?php } ?>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="pEmail" placeholder="Enter your email" required>
                    
                    <label for="password">Password</label>
                    <input type="password" id="password" name="pPassword" placeholder="Enter your password" required>
                    
                    <button type="submit">Login</button>
                    <p class="register-link">Don't have an account? <a href="signup.php">Sign up</a></p>
                </form>
            </div>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            &copy; 2024 E-Health Care. All Rights Reserved.
        </div>
    </div>
</body>
</html>
