<?php

    include 'dbConnection.php';

    error_reporting(0);

    session_start();

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $gender = $_POST['gender'];
        $date = $_POST['date'];
        $day = $_POST['day'];
        $time = $_POST['time'];
        $medicalAppointment = $_POST['medicalAppointment'];
        $attendance = $_POST['attendance'];

        $query = "SELECT * FROM appointmentlists WHERE email='$email'";
        $result = mysqli_query($connection, $query);
        if(!$result->num_rows > 0) {
            $query = "INSERT INTO `appointmentlists`(`username`, `email`, `phoneNumber`, `gender`, `date`, `day`, `time`, `medicalAppointment`, `attendance`) 
            VALUES ('$username','$email','$phoneNumber','$gender','$date','$day','$time','$medicalAppointment','$attendance')";
            $query = "SELECT * FROM appointmentlists WHERE date='$date' and time='$time' and medicalAppointment='$medicalAppointment'";
            $result = mysqli_query ($connection, $query);
            if(!$result->num_rows > 0) {
                $query = "INSERT INTO `appointmentlists`(`username`, `email`, `phoneNumber`, `gender`, `date`, `day`, `time`, `medicalAppointment`, `attendance`) 
                VALUES ('$username','$email','$phoneNumber','$gender','$date','$day','$time','$medicalAppointment','$attendance')";
                $result = mysqli_query ($connection, $query);
                if ($result) {
                    echo '<script>alert("Booking Successfully~Thank You")</script>';
                    header('Refresh:2; url=seniorshomepage.php');
                    $username = "";
                    $email = "";
                    $phoneNumber = "";
                    $gender = "";
                    $date = "";
                    $day = "";
                    $time = "";
                    $medicalAppointment = "";
                    $attendance = "";
                }  else {
                    echo '<script>alert("Oops! Booking unsuccessful!")</script>';
                }
            } else {
                echo "<script>alert('Oops! This day and time have been taken. Please choose another day and time.')</script>";
            }
        } else {
            echo "<script>alert('Oops! This email has been taken. Please choose another email.')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bookappointment.css">
    <title>Appointment Form</title>
</head>
<body>
    <div class="upper-container">
        <img class="cloud" src="cloud.png" alt="cloud.png">
        <marquee width="500px">Welcome to Senior Care!!!</marquee>
    </div>
    <h3>Book an appointment~</h3>
    
    <div class="lower-container">
    <img class="doctor-img circular" src="doctor-image.jpg" alt="doctor-img" >
    <form action="#" method="post">
        <table>
            <tr>
                <td>Username: </td>
                <td><input class="input" type="text" name="username" placeholder="e.g. ali" required></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input class="input" type="email"  name="email" placeholder="e.g. ali@gmail.com" required></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input class="input" type="number"  name="phoneNumber" placeholder="e.g. 60125847593" required></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td>
                    <input type="radio" name="gender" value="Male" required>Male
                    <input type="radio" name="gender" value="Female" required>Female
                </td>
            </tr>
            <tr>
                <td>Date: </td>
                <td><input class="input" type="date"  name="date" value="Date" required></td>
            </tr>
            <tr>
                <td>Day: </td>
                <td>
                <select class="input" name="day" required>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Time: </td>
                <td>
                <select class="input" name="time" required>
                    <option value="8:00 a.m - 8:30 a.m">8:00 a.m - 8:30 a.m</option>
                    <option value="8:30 a.m - 9:00 a.m">8:30 a.m - 9:00 a.m</option>
                    <option value="9:00 a.m - 9:30 a.m">9:00 a.m - 9:30 a.m</option>
                    <option value="9:30 a.m - 10:00 a.m">9:30 a.m - 10:00 a.m</option>
                    <option value="10:00 a.m - 10:30 a.m">10:00 a.m - 10:30 a.m</option>
                    <option value="10:30 a.m - 11:00 a.m">10:30 a.m - 11:00 a.m</option>
                    <option value="1:00 p.m - 1:30 p.m">1:00 p.m - 1:30 p.m</option>
                    <option value="1:30 p.m - 2:00 p.m">1:30 p.m - 2:00 p.m</option>
                    <option value="2:00 p.m - 2:30 p.m">2:00 p.m - 2:30 p.m</option>
                    <option value="2:30 p.m - 3:00 p.m">2:30 p.m - 3:00 p.m</option>
                    <option value="3:00 p.m - 3:30 p.m">3:00 p.m - 3:30 p.m</option>
                    <option value="3:30 p.m - 4:00 p.m">3:30 p.m - 4:00 p.m</option>
                    <option value="4:00 p.m - 4:30 p.m">4:00 p.m - 4:30 p.m</option>
                    <option value="4:30 p.m - 5:00 p.m">4:30 p.m - 5:00 p.m</option>
                    <option value="7:00 p.m - 7:30 p.m">7:00 p.m - 7:30 p.m</option>
                    <option value="7:30 p.m - 8:00 p.m">7:30 p.m - 8:00 p.m</option>
                    <option value="8:00 p.m - 8:30 p.m">8:00 p.m - 8:30 p.m</option>
                    <option value="8:30 p.m - 9:00 p.m">8:30 p.m - 9:00 p.m</option>
                    <option value="9:00 p.m - 9:30 p.m">9:00 p.m - 9:30 p.m</option>
                    <option value="9:30 p.m - 10:00 p.m">9:30 p.m - 10:00 p.m</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Medical Appointment: </td>
                <td>
                <select class="input" name="medicalAppointment" required>
                    <option value="Basic Illness Treatment - Dr Lee">Basic Illness Treatment - Dr Lee</option>
                    <option value="Basic Body Check Up - Dr James">Basic Body Check-Up - Dr James</option>
                    <option value="ENT Treatment - Dr Amir">ENT Treatment - Dr Amir</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Attendance: </td>
                <td>
                    <input type="radio" name="attendance" value="PENDING" checked>PENDING
                    <input type="radio" name="attendance" value="YES" disabled>YES
                    <input type="radio" name="attendance" value="NO" disabled>NO
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center"><input type="submit" name="submit" value="Book Now!" class="btnSubmit"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>