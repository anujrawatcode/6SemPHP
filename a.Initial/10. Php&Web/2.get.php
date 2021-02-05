<!--
$_GET  super global (available everywhere), assoc array
?      portion of the URL (ie. after the ?) is known as the query string
&      divide each parameter 
-->

<!-- http://localhost/demo1/2.get.php?id=12&source=13 -->

<?php

print_r($_GET); // print_r  show inside array

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <a href="2.get.php?id=12">Click</a>

    <!-- dynamically sending -->
    <?php
    $source = 19;
    ?>
    <br>
    <a href="2.get.php?source=  <?php echo $source; ?>  ">Click me</a>

</body>

</html>