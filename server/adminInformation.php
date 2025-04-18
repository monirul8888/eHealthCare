<?php
include 'D:\SEMESTER\eHealth\server\connect.php';
session_start();

// Check if the user is logged in (assuming a session is used to track the logged-in user)
if (!isset($_SESSION['adminId'])) {
    // Redirect to login page if the user is not logged in
    header("Location: login.php");
    exit();
}

$adminId = $_SESSION['adminId'];  // Get the logged-in patient's ID

// Prepare the SQL query to fetch the patient data from the database
$stmt = $connection->prepare("SELECT adminName,joinDate,designation,adminPhone,adminEmail FROM admin WHERE adminId = ?");
$stmt->bind_param("i", $adminId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // If the patient is found, fetch and display their data
    $row = $result->fetch_assoc();
    $adminName = $row['adminName'];
    $adminEmail = $row['adminEmail'];
   $adminPhone = $row['adminPhone'];
    $joinDate = $row['joinDate'];
    $designation = $row['designation'];
   // $medical_history = $row['medicalHistory'];
   // $department = $row['department'];
   // $address = $row['address'];

    // Display the patient's data
    echo '<div class="content">';
    echo '<div class="pInfo">';
    
    echo "<h2>Welcome, " . htmlspecialchars($adminName) . "</h2>";
    echo "<p><strong>Name:</strong> " . htmlspecialchars($adminName) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($adminEmail) . "</p>";
   echo "<p><strong>Phone Number:</strong> " . htmlspecialchars($adminPhone) . "</p>";
    echo "<p><strong>Join Date:</strong> " . htmlspecialchars($joinDate) . "</p>";
   echo "<p><strong>Designation:</strong> " . htmlspecialchars($designation) . "</p>";
    //echo "<p><strong>Medical History:</strong> " . htmlspecialchars($medical_history) . "</p>";
   // echo "<p><strong>Department:</strong> " . htmlspecialchars($department) . "</p>";
   // echo "<p><strong>Address:</strong> " . htmlspecialchars($address) . "</p>";

   echo "<button><a href=\"allPatInfo.php\">All Patient Information</a></button>";




    echo '</div>';
    echo '</div>';
} else {
    // If no record is found for the user
    echo "<p>No record found for this user.</p>";
}

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/client/index.css">
    <link rel="stylesheet" href="/server/pInfo.css">

    <style>
        button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
}

button a {
    color: white;
    text-decoration: none;
}

button:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    <div class="container">
        
        <div class="header">
            <h2>Welcome To E-Health Care</h2>
            <div class="nav-links">
                <a href="/client/home.php">Home</a>
                <a href="/client/doctors.php">Doctors</a>
                <a href="/client/services.php">Services</a>
                <a href="/client/adminPatForm.php">Sign Up</a>
                <a href="/client/login.php">Log In</a>
                <a href="/client/about.php">About Us</a>
            </div>

            <div class="search-bar-wrapper">
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                    <button>Search</button>
                </div>
            </div>
        </div>
        <div class="content">
            
         
                <!-- Patient info will be displayed here by PHP -->
            </div>
        </div>
        <div class="footer">
            &copy; 2024 E-Health Care. All Rights Reserved.
        </div>
    </div>
</body>
</html>
