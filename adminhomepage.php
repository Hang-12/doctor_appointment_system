<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: adminloginpage.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
    <link rel="stylesheet" href="adminhome.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <nav>
        <label class="logo"><img src="seniorcare.jpg" alt="seniorcarelogo" height="60px" width="70px"></label>
        <label class="logo">SeniorCare</label>
        <ul>
            <li><a class="" href="#">Home</a></li>
            <li><a href="admin_profile.php" target="_blank">Profile</a></li>
            <li><a href="aboutus.html" target="_blank">About Us</a></li>
            <li><a href="adminviewappointment.php" target="_blank">View Appointment</a></li>
            <li><a href="adminlogout.php">Log Out</a></li>
        </ul>
    </nav>
    <div>
        <?php echo "<h2><font color=black size='6.5rem'>Welcome, " . $_SESSION['username']  . "</h2>"; ?>
    </div>
    <div>
        <h1>Expert Services only at Senior Care!</h1>
    </div>
    <div id="container">
        <div>
            <a href="checkoutservicesadminpage.html" target="_blank"><button type="button" class="button">
                <span class="button__text">Check Out Services</span>
                <span class="button__icon">
                    <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                </span>
            </button></a>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </div>
        <div>
            <a href="adminviewappointment.php" target="_blank"><button type="button" class="button">
                <span class="button__text">View Appointment</span>
                <span class="button__icon">
                    <ion-icon name="bag-add-outline"></ion-icon>
                </span>
            </button></a>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </div>            
        <div>
            <a href="contactuspage.html" target="_blank"><button type="button" class="button">
                <span class="button__text">Have Inqueries?Contact Us!</span>
                <span class="button__icon">
                    <ion-icon name="call-outline"></ion-icon>
                </span>
            </button></a>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </div>
    </div>
   
</body>
</html>