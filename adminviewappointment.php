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
    <link rel="stylesheet" type="text/css" href="adminviewappointment.css">
    <title>Appointments View for Admin</title>
</head>
<body>
    <h2>Appointment List</h2>
    <br>
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
                <td>
                    <a href="adminupdateappointment.php?id=<?php echo $row['ID']; ?>">EDIT</a>
                    <a href="admindeleteappointment.php?id=<?php echo $row['ID']; ?>">DELETE</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <?php  mysqli_close($connection); ?>
</body>
</html>


    

   
