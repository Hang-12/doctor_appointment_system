<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="seniorsviewappointment.css">
    <title>View your Appointment</title>
</head>
<body>
    <div class="upper-container">
        <h2>Search your appointment</h2>
        <form action="#" method="post" class="searchbar">
            Username: <input type="text" name="username" class="username" placeholder="messi" required>
        <input type="submit" value="Search" name="search"class="search">
        </form>
        <?php
            include 'dbConnection.php';
            if (isset($_POST['search'])) {
                $username = $_POST['username'];
                $query = "SELECT * FROM appointmentlists WHERE username = '$username'";
                $result = mysqli_query($connection, $query);
                if (mysqli_num_rows($result) > 0) {
        ?>
    </div>
    <div class="lower-container">
        <br>
        <table border="1" align="center">
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
                </tr>
            <?php } ?>
        </table>
    </div>
    <?php  
        } else{
            echo "<marquee width='500px'>You haven't make your appointment yet :(</marquee>";
        }
    }
    mysqli_close($connection); ?>
</body>
</html>


    

   
