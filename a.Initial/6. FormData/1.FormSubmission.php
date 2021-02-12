<!-- $_POST is a superglobal variable
pick up data send using forms  
It is an associative array
-->

<?php

if (isset($_POST['submit'])) {
    echo "Yes it works";
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
    <form action="1.FormSubmission.php" method="POST">
        <input type="text" placeholder="Username"><br>
        <input type="password" placeholder="Password"><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>