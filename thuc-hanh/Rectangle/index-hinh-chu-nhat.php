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
    include("./class_Rectangle.php");
    $rectangle = new rectangle(10,10);
    $rectangle->set(20,30);
    echo $rectangle->get_rectangular() .'<br>' . 'la dien tich';
    echo $rectangle->perimeter() . '<br>' . 'la chu vi';
    echo $rectangle->display();
    

    $rectangle->whicht =50;
    echo $rectangle->get_rectangular();
    // $whicht = 20;
    // $hieght = 10;
    // $rectangle = new rectangle($whicht, $hieght);
    // echo $rectangle->whicht;
    // echo $rectangle->hieght;
    // $rectangle->whicht = 30;
    // $rectangle->hieght = 20;
    // echo $rectangle->whicht;
    // echo $rectangle->hieght;
    // echo $rectangle->get_rectangular();
    // echo $rectangle->perimeter();
    // echo ("your rectangle " . $rectangle->display());
    ?>
</body>

</html>