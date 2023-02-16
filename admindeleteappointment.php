<?php
include 'dbConnection.php';

$id = $_GET['id'];

    $query = "DELETE FROM `appointmentlists` WHERE ID='$id'";
    if (mysqli_query($connection, $query)) {
        echo '<script>alert("Delete Successfully~Thank You")</script>';
        header('Location: adminviewappointment.php');
    } else {
        echo '<script>alert("Oops! Delete unsuccessful! Try again")</script>';
    }

$query = "SELECT *FROM appointmentlists WHERE ID='$id'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result); 

?>