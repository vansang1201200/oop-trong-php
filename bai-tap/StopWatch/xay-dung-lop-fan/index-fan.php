<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include "class-fan.php";
    $quat = new Fan();
    $quat->set_status(true);
    $quat->set_speed (10);
    $quat->set_color( "yellow");
    $quat->set_radius(11);
    echo $quat->__toString();
    $quat->set_status(false);
    echo $quat->__toString();
    
    ?>
</body>
</html>