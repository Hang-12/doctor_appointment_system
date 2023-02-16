<?php
    include 'dbadmin.php';
    session_start();
    error_reporting(0);
    
   
    if (isset($_SESSION['username'])) {
        $id=$_SESSION['id'] ;
        $query = "SELECT * FROM `admin` WHERE `id` = '$id'";
        $results=mysqli_query($conn,$query);
        $row=mysqli_fetch_assoc($results);
    }
    if (isset($_POST['update'])){
        $username = $_POST['UserName'];
        $email=$_POST['userEmail'];
        $query="UPDATE `admin` SET `username`='$username', `email`='$email' WHERE `id` = '$id' ";
        if(mysqli_query($conn, $query)){
            echo "<script>alert('Congratulations! Successfully update.')</script>";
        }else{
            echo "<script>alert('Sorry, Please try again !.')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="userprofile_senior.css">
    
</head>
<body>
    
    </header>
    <div align="center">
        <hr>
            <h3> User Information</h3>
        <hr>

        <div class="card">
            <div class="col-md-6" offset-3>
                <form action="#" method= "post" >
                    <?php 
                        
                                   
                                    ?>
                                        <div class ="form-group">
                                            <h2>Username</h2> <input type ="text" name ="UserName" class="form control" size = "50" style = "text-align :center; font-size :14pt;" value="<?php echo $row ['username']; ?>">
                                        </div>
                                        <div class ="form-group">
                                            <h2>E-mail</h2><input type ="email" name ="userEmail" class="form control" size = "50" style = "text-align :center;font-size :14pt;" value="<?php echo $row ['email']; ?>">
                                        </div>
                                        <br>
                                        <div class ="form-group">
                                            <input type ="submit" name ="update" class="btn btn-info" value="Update">
                                        </div>
 
                                    <?php

                                    ?>

            
</body>
</html