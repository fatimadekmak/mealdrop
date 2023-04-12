<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Installation</title>
</head>
<body>
    <div class="container">
        <h2>Fill in your information to create and insert data into your database</h2>
    </div>
    <div class="container mb-4" style="width: 400px;">
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="form-group mb-2">
                <label for="name">Database Username</label>
                <input class="form-control" type="text" placeholder="root" name="name">
            </div>
            <div class="form-group mb-2">
                <label for="pass">Database Password</label>
                <input class="form-control" type="password" placeholder="123123" name="pass">
                <small>keep it empty if no password</small>
            </div>
            
            <input class="btn btn-danger mb-2" type="submit" name="btn" value="connect">
        </form>
    </div>
</body>
</html>

<?php

    if(isset($_POST['btn'])) {
        $servername = "localhost";
        $username = $_POST['name'];
        $password = $_POST['pass'];

        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Create database

        $database_name = "mealdropdb";

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
    }
    
?>