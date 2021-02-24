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
        $seFruit = $_GET['fruit'];
        $width = $_GET['width'];
        echo"<img src='image/$seFruit.jpg'  width='$width' >";
        $kg = $_GET['kg'];
        if($seFruit == 'apple'){
            echo "<br>ราคากิโลละ : 100 บาท $kg kg." , 100*$kg; 
        }else if($seFruit == 'orange'){
            echo "<br>ราคากิโลละ : 200 บาท $kg kg." , 200*$kg; 
        }else if($seFruit == 'banana'){
            echo "<br>ราคากิโลละ : 300 บาท $kg kg." , 300*$kg; 
        }
    ?>
</body>
</html>