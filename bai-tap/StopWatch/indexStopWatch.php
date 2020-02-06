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
    include("classStopWatch.php");
    $time = new StopWatch();
    $time->endTime = 5;
    $time->startTime = 4;
    echo $time->start() .' là thời gian bắt đầu <br>';
    echo $time->stop().' là thời gian kết thúc <br>';
    echo $time->getElapsedTime() .'getElapsedTime <br> ';
    ?>
</body>
</html>