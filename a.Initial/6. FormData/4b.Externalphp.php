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