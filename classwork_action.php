<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total</title>
</head>
<body>
    <?php

        $x = $_GET['numx'];
        $y = $_GET['numy'];
        $operator = $_GET['operator'];

        echo "Show Result <br>";
        echo "Num X = ".$x."<br>";
        echo "Num Y = ".$y."<br>";
        echo "Operator is ".$operator."<br>";

        switch($operator){
            case "+" :
                echo "X + Y = ".($x+$y)."<br>";
                break ;
            case "-" :
                echo "X - Y = ".($x-$y)."<br>";
                break ;
            case "*" :
                echo "X * Y = ".($x*$y)."<br>";
                break ;
            case "/" :
                echo "X / Y = ".($x/$y)."<br>";
                break ;
            default ;
        }

    ?>
</body>
</html>