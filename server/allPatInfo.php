<?php
include 'D:\SEMESTER\eHealth\server\connect.php';
$patients = [];
$sql = "SELECT * FROM patients";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $patients[] = $row;
    }
}
$connection->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Patient Information</title>
    <link rel="stylesheet" href="/client/index.css">
    <link rel="stylesheet" href="/server/pInfo.css">
    <style>
        table {
    margin: 0 auto;
    margin-top: 50px;
    border-collapse: collapse;
    width: 80%;
    font-family: Arial, sans-serif;
    text-align: center;
}

table th {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: 1px solid #ddd;
}

table td {
    padding: 10px;
    border: 1px solid #ddd;
}

table tr:hover {
    background-color: #f1f1f1;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
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
            <h1>All Patient Information</h1>
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Medical History</th>
                        <th>Department</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($patients)): ?>
                        <?php foreach ($patients as $patient): ?>
                            <tr>
                                <td><?= htmlspecialchars($patient['pID']) ?></td>
                                <td><?= htmlspecialchars($patient['pName']) ?></td>
                                <td><?= htmlspecialchars($patient['pEmail']) ?></td>
                                <td><?= htmlspecialchars($patient['pNumber']) ?></td>
                                <td><?= htmlspecialchars($patient['date']) ?></td>
                                <td><?= htmlspecialchars($patient['gender']) ?></td>
                                <td><?= htmlspecialchars($patient['medicalHistory']) ?></td>
                                <td><?= htmlspecialchars($patient['department']) ?></td>
                                <td><?= htmlspecialchars($patient['address']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9">No patient records found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="footer">
            &copy; 2024 E-Health Care. All Rights Reserved.
        </div>
    </div>
</body>
</html>
