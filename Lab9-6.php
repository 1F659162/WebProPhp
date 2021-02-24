<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 9-6 </title>
    </head>
    <body>
        <?php
        $month = array( array ( 2555, 230000, 300400, 200900,249000),
        array ( 2556,300000, 380400, 290000,149000),
        array ( 2557,330000, 350000, 400900,490000),
        array (2558,380000, 395000, 290000,349000),
        array (2559,335000, 400400, 300900,490000 ) );
        $totall = 0 ;
        // ผลรวมของปี
        for($i = 0 ; $i < count($month) ; $i++){
            $total = 0 ;
            for($e = 1 ; $e < count($month[$i]) ; $e++){
                $totall += $month[$i][$e];
                $total += $month[$i][$e];
            }
            array_push($month[$i],$total);
        }

        // ผลรวมไตรมาส
        $arrnew = ["ผลรวมไตรมาส"];
        $count = 1 ;
        for($r = 0 ; $r < count($month)-1 ; $r++){
            $total = 0 ;
            for($i = 0 ; $i < count($month) ; $i++){
                $total += $month[$i][$count];
            }
            array_push($arrnew,$total);
            $count ++;
        }
        array_push($arrnew,$totall);
        array_push($month,$arrnew);
        
        
        $title = array(" ปี","ไตรมาส 1","ไตรมาส 2","ไตรมาส 3","ไตรมาส 4","ผลรวมของปี");
        $maxRow = count( $month );
        $maxCol = count ( $month[0]) ;
        echo "<table border='1' align='center' width='100%'>";
        echo "<tr>";
        for ( $c = 0; $c < $maxCol ; $c++ ) {
            echo "<td width='50' align='center'>" . $title[$c] . "</td>";
        }
        echo "</tr>";
        for ( $r = 0; $r < $maxRow ; $r++ ) {
            echo "<tr>";
            for ( $c = 0; $c < $maxCol ; $c++ ) {
                echo "<td width='50' align='center'>" . number_format($month[$r][$c]) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        
        ?>
    </body>
</html>