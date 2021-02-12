<?php

if (isset($_POST['submit'])) {

    $name = array("Adarsh", "Aman", "Shobhit", "Peter");

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) == 0 && strlen($password) == 0)
        echo ("Enter something");
    else if (strlen($username) == 0)
        echo "Enter username";
    else if (strlen($password) == 0)
        echo "Enter password";
    else if (strlen($username) < 3) {
        echo "username have to be longer";
    } else if (!in_array($username, $name))
        echo "Access Denied";
    else
        echo "welcome";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="3.FromValidation.php" method="POST">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>