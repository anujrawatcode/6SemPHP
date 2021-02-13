<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if (!$connection) {
    die("Database connection failed");
}


$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if (!$result) {
    die('Query Failed');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="col-lg-6">

            <?php
            while (mysqli_fetch_row($result)) {
                $row = mysqli_fetch_assoc($result);
                print_r($row);
                echo '<br>';
            }
            ?>
        </div>
    </div>
</body>

</html>