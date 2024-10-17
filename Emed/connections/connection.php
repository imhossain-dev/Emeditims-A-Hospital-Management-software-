<?php

    $dbserver = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname= "emeditim_users";

    $conn = mysqli_connect("localhost","emeditim_username","password@000","emeditim_users");

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

?>