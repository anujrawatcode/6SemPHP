<?php

if (isset($_POST['submit'])) {
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if (!$connection) {
        die("Database connection failed");
    }

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error($connection));
    }

    $query1 = "UPDATE users SET ";
    $query1 .= "username = '$username', ";
    $query1 .= "password = '$password' ";
    $query1 .= "WHERE id = $id ";

    $result1 = mysqli_query($connection, $query1);

    if (!$result1) {
        die('Query Failed' . mysqli_error($connection));
    }
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

        <div class="col-sm-6">
            <form action="4.LoginUpdate.php" method="post">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>


                <select name="id" id="">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        echo "<option value='$id'>$id</option>";
                    }
                    ?>

                </select>



                <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">

            </form>
        </div>
    </div>
</body>

</html>