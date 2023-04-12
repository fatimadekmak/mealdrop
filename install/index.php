<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database

    $database_name = "test";

    $sql = "CREATE DATABASE IF NOT EXISTS $database_name";
    if ($conn->query($sql) === FALSE) {
        echo "Error creating database: " . $conn->error;
    }

    $conn = new mysqli($servername, $username, $password, $database_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



    // header('Location: create_tables.php');
    include('create_tables.php');

    $conn->close();
    
?>