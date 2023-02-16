<?php

include 'dbdoctors.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: doctorshomepage.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM doctors WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION["id"] = $row["id"];
        $_SESSION["username"] = $row["username"];
        header("Location: doctorshomepage.php");
    } else {
        echo "<script>alert('Oops! Invalid email or password. Please try again.')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="doctorslogin.css">
    <title>Doctors Login Page</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>       
            <p class="login-register-text">Don't have an account? <a href="doctorsregisterpage.php" target="_blank">Register Here</a>.</p>
        </form>
    </div>
</body>
</html>