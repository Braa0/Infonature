<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'infonature_db';

    $conn = mysqli_connect($servername, $username, $password, $db);

    if($conn->connect_error) {

        echo "Error: " + $conn->connect_error;

    }
?>