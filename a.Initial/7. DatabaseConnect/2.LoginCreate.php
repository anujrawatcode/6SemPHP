<!-- Creating entry into Table -->
<?php
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if (!$connection) {
        die("Database connection failed");
    }


    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed');
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
            <form action="2.LoginCreate.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit">

            </form>
        </div>
    </div>
</body>

</html>