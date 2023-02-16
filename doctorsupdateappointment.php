<?php
include 'dbConnection.php';

$id = $_GET['id'];

if (isset($_POST['update'])) {
    // $username = $_POST['username'];
    // $email = $_POST['email'];
    // $phoneNumber = $_POST['phoneNumber'];
    // $gender = $_POST['gender'];
    // $date = $_POST['date'];
    // $day = $_POST['day'];
    // $time = $_POST['time'];
    // $medicalAppointment = $_POST['medicalAppointment'];
    $attendance = $_POST['attendance'];

    // $query = "UPDATE `appointmentlists` SET `username`='$username',
    // `email`='$email',`phoneNumber`='$phoneNumber',`gender`='$gender',
    // `date`='$date', `day`='$day', `time`='$time', `medicalAppointment`='$medicalAppointment' WHERE id='$id'";
    $query = "UPDATE `appointmentlists` SET `attendance` = '$attendance' WHERE id='$id'";
    if (mysqli_query($connection, $query)) {
        echo '<script>alert("Update Successfully~Thank You")</script>';
        header('Refresh:2; url=doctorsviewappointment.php');
    } else {
        echo '<script>alert("Oops! Update unsuccessful! Try again")</script>';
    }
}

$query = "SELECT *FROM appointmentlists WHERE ID='$id'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Update Site</title>
    <link rel="stylesheet" type="text/css" href="updateappointment.css">
</head>
<body>
    <div class="upper-container">
        <h3>Senior Care</h3>
        <img class="img" src="doctor-update-image.jpg" alt="doctor-update-img">
    </div>
    <div class="lower-container">
        <form action="#" method="post">
            <table align="center">
                <tr>
                    <td>Username: </td>
                    <td><input class="input" type="text" name="username" value="<?php echo $row['username']; ?>" disabled></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input class="input" type="email"  name="email" value="<?php echo $row['email']; ?>" disabled></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input class="input" type="number"  name="phoneNumber" value="<?php echo $row['phoneNumber']; ?>" disabled></td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td>
                        <input type="radio" name="gender" value="Male"<?php if ($row['gender'] == 'Male') {echo 'checked';}?> disabled>Male
                        <input type="radio" name="gender" value="Female" <?php if ($row['gender'] == 'Female') {echo 'checked';}?> disabled>Female
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Date: </td>
                    <td><input class="input" type="date"  name="date" value="<?php echo $row['date']; ?>" disabled></td>
                </tr>
                <tr>
                    <td>Day: </td>
                    <td>
                    <select class="input" name="day" disabled>
                        <option value="Sunday" <?php if ($row['day'] == 'Sunday') {echo 'selected';}?>>Sunday</option>
                        <option value="Monday" <?php if ($row['day'] == 'Monday') {echo 'selected';}?>>Monday</option>
                        <option value="Tuesday" <?php if ($row['day'] == 'Tuesday') {echo 'selected';}?>>Tuesday</option>
                        <option value="Wednesday" <?php if ($row['day'] == 'Wednesday') {echo 'selected';}?>>Wednesday</option>
                        <option value="Thursday" <?php if ($row['day'] == 'Thursday') {echo 'selected';}?>>Thursday</option>
                        <option value="Friday" <?php if ($row['day'] == 'Friday') {echo 'selected';}?>>Friday</option>
                        <option value="Saturday" <?php if ($row['day'] == 'Saturday') {echo 'selected';}?>>Saturday</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Time: </td>
                    <td>
                    <select class="input" name="time" disabled>
                        <option value="8:00 a.m - 8:30 a.m"<?php if ($row['time'] == '8:00 a.m - 8:30 a.m') {echo 'selected';}?>>8:00 a.m - 8:30 a.m</option>
                        <option value="8:30 a.m - 9:00 a.m" <?php if ($row['time'] == '8:30 a.m - 9:00 a.m') {echo 'selected';}?>>8:30 a.m - 9:00 a.m</option>
                        <option value="9:00 a.m - 9:30 a.m" <?php if ($row['time'] == '9:00 a.m - 9:30 a.m') {echo 'selected';}?>>9:00 a.m - 9:30 a.m</option>
                        <option value="9:30 a.m - 10:00 a.m" <?php if ($row['time'] == '9:30 a.m - 10:00 a.m') {echo 'selected';}?>>9:30 a.m - 10:00 a.m</option>
                        <option value="10:00 a.m - 10:30 a.m" <?php if ($row['time'] == '10:00 a.m - 10:30 a.m') {echo 'selected';}?>>10:00 a.m - 10:30 a.m</option>
                        <option value="10:30 a.m - 11:00 a.m" <?php if ($row['time'] == '10:30 a.m - 11:00 a.m') {echo 'selected';}?>>10:30 a.m - 11:00 a.m</option>
                        <option value="1:00 p.m - 1:30 p.m" <?php if ($row['time'] == '1:00 p.m - 1:30 p.m') {echo 'selected';}?>>1:00 p.m - 1:30 p.m</option>
                        <option value="1:30 p.m - 2:00 p.m" <?php if ($row['time'] == '1:30 p.m - 2:00 p.m') {echo 'selected';}?>>1:30 p.m - 2:00 p.m</option>
                        <option value="2:00 p.m - 2:30 p.m" <?php if ($row['time'] == '2:00 p.m - 2:30 p.m') {echo 'selected';}?>>2:00 p.m - 2:30 p.m</option>
                        <option value="2:30 p.m - 3:00 p.m" <?php if ($row['time'] == '2:30 p.m - 3:00 p.m') {echo 'selected';}?>>2:30 p.m - 3:00 p.m</option>
                        <option value="3:00 p.m - 3:30 p.m" <?php if ($row['time'] == '3:00 p.m - 3:30 p.m') {echo 'selected';}?>>3:00 p.m - 3:30 p.m</option>
                        <option value="3:30 p.m - 4:00 p.m" <?php if ($row['time'] == '3:30 p.m - 4:00 p.m') {echo 'selected';}?>>3:30 p.m - 4:00 p.m</option>
                        <option value="4:00 p.m - 4:30 p.m" <?php if ($row['time'] == '4:00 p.m - 4:30 p.m') {echo 'selected';}?>>4:00 p.m - 4:30 p.m</option>
                        <option value="4:30 p.m - 5:00 p.m" <?php if ($row['time'] == '4:30 p.m - 5:00 p.m') {echo 'selected';}?>>4:30 p.m - 5:00 p.m</option>
                        <option value="7:00 p.m - 7:30 p.m" <?php if ($row['time'] == '7:00 p.m - 7:30 p.m') {echo 'selected';}?>>7:00 p.m - 7:30 p.m</option>
                        <option value="7:30 p.m - 8:00 p.m" <?php if ($row['time'] == '7:30 p.m - 8:00 p.m') {echo 'selected';}?>>7:30 p.m - 8:00 p.m</option>
                        <option value="8:00 p.m - 8:30 p.m" <?php if ($row['time'] == '8:00 p.m - 8:30 p.m') {echo 'selected';}?>>8:00 p.m - 8:30 p.m</option>
                        <option value="8:30 p.m - 9:00 p.m" <?php if ($row['time'] == '8:30 p.m - 9:00 p.m') {echo 'selected';}?>>8:30 p.m - 9:00 p.m</option>
                        <option value="9:00 p.m - 9:30 p.m" <?php if ($row['time'] == '9:00 p.m - 9:30 p.m') {echo 'selected';}?>>9:00 p.m - 9:30 p.m</option>
                        <option value="9:30 p.m - 10:00 p.m" <?php if ($row['time'] == '9:30 p.m - 10:00 p.m') {echo 'selected';}?>>9:30 p.m - 10:00 p.m</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Medical Appointment: </td>
                    <td>
                    <select class="input" name="medicalAppointment" disabled>
                        <option value="Basic Illness Treatment - Dr Lee" <?php if ($row['medicalAppointment'] == 'Basic Illness Treatment - Dr Lee') {echo 'selected';}?>>Basic Illness Treatment - Dr Lee</option>
                        <option value="Basic Body Check Up - Dr James" <?php if ($row['medicalAppointment'] == 'Basic Body Check-Up - Dr James') {echo 'selected';}?>>Basic Body Check-Up - Dr James</option>
                        <option value="ENT Treatment - Dr Amir" <?php if ($row['medicalAppointment'] == 'ENT Treatment - Dr Amir') {echo 'selected';}?>>ENT Treatment - Dr Amir</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Attendance: </td>
                    <td>
                        <input type="radio" name="attendance" value="PENDING" disabled>PENDING
                        <input type="radio" name="attendance" value="YES">YES
                        <input type="radio" name="attendance" value="NO">NO
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center"><input type="submit" name="update" value="Update Information" class="update"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>