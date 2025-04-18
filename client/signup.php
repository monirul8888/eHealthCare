
<?php
include 'D:\SEMESTER\eHealth\server\connect.php';
include 'D:\SEMESTER\eHealth\server\insert.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form | E-Health Care</title>
    <link rel="stylesheet" href="signup.css">
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

        <div class="content">


        <div class="form">
        <form action="signup.php" method="POST">

           
                    <h2>Patient Registration Form</h2>
                    <table>
                        <tr>
                            <th>
                                <label for="name">Enter Your Name</label>
                            </th>
                            <td>
                                <input type="text" name="pName" id="pName" placeholder="Enter Your Name" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="pEmail">Enter Email</label>
                            </th>
                            <td>
                                <input type="email" name="pEmail" id="pEmail" placeholder="Enter Your Email" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="pNumber">Mobile Number</label>
                            </th>
                            <td>
                                <input type="tel" name="pNumber" id="pNumber" placeholder="Enter Your Mobile Number" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="date">Date of Birth</label>
                            </th>
                            <td>
                                <input type="date" name="date" id="date" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="gender">Gender</label>
                            </th>
                            <td>
                                <input type="radio" name="gender" value="male" id="male" required>
                                <label for="male">Male</label>
                                <input type="radio" name="gender" value="female" id="female" required>
                                <label for="female">Female</label>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="history">Medical History</label>
                            </th>
                            <td>
                                <label for="Hypertension">Hypertension</label>
                                <input type="checkbox" name="history[]" value="Hypertension" id="Hypertension">
                                <label for="diabetes">Diabetes</label>
                                <input type="checkbox" name="history[]" value="Diabetes" id="diabetes">
                                <label for="Allergies">Allergies</label>
                                <input type="checkbox" name="history[]" value="Allergies" id="Allergies">
                                <label for="other">Other</label>
                                <input type="checkbox" name="history[]" value="Other" id="other">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="department">Select Your Concern</label>
                            </th>
                            <td>
                                <select name="department" id="department" required>
                                    <option value="" disabled selected>Select Your Concern</option>
                                    <option value="General Health">General Health</option>
                                    <option value="Heart Problems">Heart Problems</option>
                                    <option value="Children's Health">Children's Health</option>
                                    <option value="Bone & Joint Issues">Bone & Joint Issues</option>
                                    <option value="Brain & Nerve Issues">Brain & Nerve Issues</option>
                                    <option value="Pregnancy & Women's Health">Pregnancy & Women's Health</option>
                                    <option value="Skin Conditions">Skin Conditions</option>
                                    <option value="Mental Health">Mental Health</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <label for="address">Home Address</label>
                            </th>
                            <td>
                                <textarea name="address" id="address" rows="5" cols="30" placeholder="Street Address, City, ZIP Code"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                                <label for="file">Attach The Previous Prescription, If Any.</label>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="file" name="file" id="file" accept=".pdf,.doc,.docx">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="pPassword">Enter Password</label>
                            </th>
                            <td>
                                <input type="password" name="pPassword" id="pPassword" placeholder="Enter Password" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Submit">
                            </td>
                            <td>
                                <input type="reset" value="Reset">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

            <!-- Form Section -->
       
        </div>

        <!-- Footer Section -->
        <div class="footer">
            &copy; 2024 E-Health Care. All Rights Reserved.
        </div>
    </div>
</body>
</html>














