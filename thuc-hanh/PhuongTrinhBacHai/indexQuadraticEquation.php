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
    include("classQuadraticEquation.php");
    $ptbhai = new QuadraticEquation(2,3,4);
    $delta = $ptbhai->getDiscriminant();
    if($delta <0 ){
        echo 'Vo nghiem';
    }
    else if($delta=0){
        echo $ptbhai->getRootBoth();
    }
    else{
        echo $ptbhai->getRoot1();
        echo $ptbhai->getRoot2();
    }
    
    ?>
</body>
</html>