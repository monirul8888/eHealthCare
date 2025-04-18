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

        <div class="adminPatSignUP">
        <button><a href="signup.php">Patient Sign UP</a></button>
        <button><a href="adminForm.php">Admin Sign UP</a></button>
        </div>
            

                
        </div>

        <!-- Footer Section -->
        <div class="footer">
            &copy; 2024 E-Health Care. All Rights Reserved.
        </div>
    </div>
</body>
</html>
