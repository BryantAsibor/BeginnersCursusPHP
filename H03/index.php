<!doctype html>
<html lang="en">
<head>
    <title>PHP Opdrachten</title>
</head>
<body>
<?php

//    for($i = 1; $i<=10 ;$i++) {
//        echo "<img src='img/lion".$i.".jpg'>";
//    }

$i = 1;
while($i <= 10) {
    echo "<img src='../img/lion".$i.".jpg'>";
    $i++;
}

    ?>
</body>
</html>
