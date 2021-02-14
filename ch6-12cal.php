<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ผลลัพธ์ ตัวอย่าง Control statement ที่12 </title>
</head>
<body>
    <?php
    $row = $_POST['row'];
    $column = $_POST['column'];
    $rowMax = intval( $row);
    $colMax = intval( $column);
    echo "<table align='center' border='4' width='300'>";
    for($r = 1; $r <= $rowMax ; $r++) {
        echo "<tr>";
        for($c = 1; $c <= $colMax ; $c++) {
            $randnum = intval(rand(1,99));
            $colorFont = 'red';
            if(($randnum%2)==0){
                $colorFont = 'blue';
            };
            if ($r == $c){
                echo "<td align='center'><font color='$colorFont'>" ;
                echo $randnum; 
                echo "</font></td>";
            }else {
                echo "<td align='center'><font color='$colorFont'>";
                echo $randnum;
                echo " </font></td>";
            }
            
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <a href='ch6-12.php'> Back </a>
</body>
</html>