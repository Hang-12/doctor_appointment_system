<?php
    include 'dbConnection.php';
    $query = 'SELECT * FROM appointmentlists ORDER BY date ASC';
    $result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="doctorsviewappointment.css">
    <title>Appointments View for Doctors</title>
</head>
<body>
    <h2>Appointment List</h2>
    <div class="upper-container">
        <form action="#" method="post" class="form">
        <select class="input" name="medicalAppointment">
            <option value="Select One">- - - - Select Doctor - - - -</option>
            <option value="Basic Illness Treatment - Dr Lee" >Basic Illness Treatment - Dr Lee</option>
            <option value="Basic Body Check Up - Dr James" >Basic Body Check-Up - Dr James</option>
            <option value="ENT Treatment - Dr Amir">ENT Treatment - Dr Amir</option>
        </select>
        <input type="submit" value="Search" name="search" class="search">
        </form>

        <?php
            if (isset($_POST['search'])) {
                $medical = $_POST['medicalAppointment'];
                $query = "SELECT * FROM appointmentlists WHERE medicalAppointment = '$medical'";
                $result = mysqli_query($connection, $query);
            }
        ?>
    </div>
    <div class="lower-container">
        <table border="0" align="center">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Date</th>
                <th>Day</th>
                <th>Time</th>
                <th>Medical Appointment</th>
                <th>Attendance</th>
                <th>Operation</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phoneNumber']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['day']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td><?php echo $row['medicalAppointment']; ?></td>
                    <td><?php echo $row['attendance']; ?></td>
                    <td><a href="doctorsupdateappointment.php?id=<?php echo $row['ID']; ?>">EDIT</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <?php  mysqli_close($connection); ?>
</body>
</html>


    

   
