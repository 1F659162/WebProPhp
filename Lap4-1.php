<html>
    <head>
        <title>การกำหนดค่าตัวแปร</title>
    </head>

    <body>
        <?php
        $x = 100;
        $y = "200";
        $z = '300';
        $add = $x + $y;
        $sub = $z - $y;
        $mult = $y * $z;
        $message = "Hello world";
        echo $x;            echo "<br>";
        echo $y;            echo "<br>";
        echo $z;            echo "<br>";
        echo $add;          echo "<br>";
        echo $sub;          echo "<br>";
        echo $message;      echo "<br>";

        echo "ผลบวก ". $x . " + " . $y . " = " . $add ;             echo "<br>";
        echo "ผลลบ ". $z . " - " . $y . " = " . $sub ;              echo "<br>";
        echo "ผลคูณ ". $y . " * " . $z . " = " . $mult ;             echo "<br>";
        echo "ผลหาร ". $mult . " / " . $z . " = " . ($mult/$z) ;    echo "<br>";
        
        ?>
    </body>
</html>