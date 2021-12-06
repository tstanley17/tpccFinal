<?php
    $dBServername = "localhost";
    $dBUsername = "root";
    $dBPassword = "Basketball14!";
    $dBName = "tpccmodel";
    
    //Creates connection
    $conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);
    
    //Checks connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
?>