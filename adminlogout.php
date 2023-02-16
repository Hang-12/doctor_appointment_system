<?php

session_start();
session_destroy();

header("Location: adminloginpage.php");

?>