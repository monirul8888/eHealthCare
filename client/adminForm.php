<?php
// Include necessary files for database connection and processing
include 'D:\SEMESTER\eHealth\server\connect.php';
include 'D:\SEMESTER\eHealth\server\adminInsert.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Health Care</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="signup.css">
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
            <div class="form">
                <form action="\client\adminForm.php" method="POST">
                    <h2>Admin Registration Form</h2>
                    <table>
                        <tr>
                            <th>
                                <label for="adminName">NAME</label>
                            </th>
                            <td><input type="text" name="adminName" id="adminName" required></td>
                        </tr>
                        <tr>
                            <th>
                                <label for="adminPhone">PHONE</label>
                            </th>
                            <td><input type="text" name="adminPhone" id="adminPhone" required></td>
                        </tr>
                        <tr>
                            <th>
                                <label for="adminEmail">EMAIL</label>
                            </th>
                            <td><input type="email" name="adminEmail" id="adminEmail" required></td>
                        </tr>
                        <tr>
                            <th><label for="designation">DESIGNATION</label></th>
                            <td><input type="text" name="designation" id="designation" required></td>
                        </tr>
                        <tr>
                            <th><label for="joinDate">JOIN DATE</label></th>
                            <td><input type="date" name="joinDate" id="joinDate" required></td>
                        </tr>
                        <tr>
                            <th><label for="adminPassword">PASSWORD</label></th>
                            <td><input type="password" name="adminPassword" id="adminPassword" required></td>
                        </tr>
                        <tr>
                            <th><input type="submit" name="submit" value="Register"></th>
                            <td><input type="reset" value="Reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="footer">
            &copy; 2024 E-Health Care. All Rights Reserved.
        </div>
    </div>
</body>
</html>
