<?php session_start(); ?>
<?php
// echo $_SESSION['username'];

if (isset($_SESSION['username'])) {

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail</title>
    </head>

    <body>

        <div>
            Users have access to secret data
            <a href="logout.php">logout</a>
        </div>
    </body>

    </html>

<?php
} else {
    echo "Login First";
?>
    <a href="login.php">login</a>
<?php
}
?>