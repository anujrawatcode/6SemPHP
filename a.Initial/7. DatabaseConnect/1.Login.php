<?php
if (isset($_POST['submit'])) {

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    //  var         API             server     user   pwd    dB 
    if ($connection) {
        echo "We are connected";
    } else {
        die("Database connection failed");
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
            <form action="1.Login.php" method="post">
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