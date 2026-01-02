<?php 
    $servername = "localhost";
    $username = "wikiadmin";
    $password = "b3y0ndM1ki";
    $dbname = "beyond-wiki";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: ". mysqli_connect_error());
    }
?>