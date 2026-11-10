<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "loginregister";
    $conn = mysqli_connect($servername,$username,$password,$databasename);
    if(!$conn){
        die("Connection error" . mysqli_error());
    }
    // else{
    //     echo "Database Connected";
    // }
?>