<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 9-2 </title>
    </head>
    <body>
    <center>
        <form action="#" method ="get">
            <tr>
                <td>จำนวนนักเรียน : </td>
                <td><input type="number" name="stunum"></td>
            </tr>
            <tr><input type="submit"></tr>
        </form>
    </center><br>
        <?php 
        $MaxStudent = 0;
        if(isset($_GET['stunum'])){
            $MaxStudent = $_GET['stunum'];
        }else {
            $MaxStudent = 0;
        }
        $score = array();
        for($n = 0 ; $n < $MaxStudent; $n++) {
            $score[$n] = rand(0, 100);
        }
        echo '<center><font size="4" color="blue"> Grade Report </font></center>';
        echo '<table border="1" align="center">';
        echo '<tr><td align="center" width="90">Student No.</td>';
        echo '<td align="center" width="90">Score</td><td align="center" width="90">Grade</td></tr>';
        for($n = 0 ; $n < $MaxStudent; $n++) {
            echo '<tr><td align="center" width="90">' . ($n+1 ) . '</td>';
            echo '<td align="center" width="90">' . $score[$n] . '</td>';
            echo '<td align="center" width="90">'.chkGrade($score[$n]); '</td>'.'</tr>';
        }
        echo '<tr><td colspan="3" align="center"> Average Score : ';
        echo average( $score, $MaxStudent);
        echo '</td></tr>';
        echo '<tr><td colspan="3" align="center">max student '.chkindex($score ,max($score)).' max score: ';
        echo max($score);
        echo '</td></tr>';
        echo '<tr><td colspan="3" align="center">min student '.chkindex($score ,min($score)).' max score: ';
        echo min($score);
        echo '</td></tr>';
        echo '<tr><td colspan="3" align="center">A student =  '.chkA($score);
        echo '</td></tr>';
        echo '<tr><td colspan="3" align="center">B student =  '.chkB($score);
        echo '</td></tr>';
        echo '<tr><td colspan="3" align="center">C student =  '.chkC($score);
        echo '</td></tr>';
        echo '<tr><td colspan="3" align="center">D student =  '.chkD($score);
        echo '</td></tr>';
        echo '<tr><td colspan="3" align="center">F student =  '.chkF($score);
        echo '</td></tr>';
        function average($data, $max) {
            $total = 0;
            for($n = 0 ; $n < $max; $n++) {
                $total += $data[$n];
            }
            return( $total / $max );
        }

        function chkGrade($score){
            
            if($score >= 80){
                return "A";
            }else if($score >= 70){
                return "B";
            }else if($score >= 60){
                return "C";
            }else if($score >= 50){
                return "D";
            }else {
                return "F";
            }
        }

        function chkindex($score , $num){
            for($i = 0 ; $i < count($score); $i++){
                if($score[$i] == $num){
                    return $i+1;
                }
            }
        }

        function chkA($score){
            $countA = 0 ;
            for($i = 0 ; $i < count($score) ; $i++){
                if($score[$i] >= 80){
                    $countA ++ ;
                }
            }
            return $countA;
        }

        function chkB($score){
            $countB = 0 ;
            for($i = 0 ; $i < count($score) ; $i++){
                if($score[$i] >= 70 && $score[$i] < 80){
                    $countB ++ ;
                }
            }
            return $countB;
        }

        function chkC($score){
            $countC = 0 ;
            for($i = 0 ; $i < count($score) ; $i++){
                if($score[$i] >= 60 && $score[$i] < 70){
                    $countC ++ ;
                }
            }
            return $countC;
        }

        function chkD($score){
            $countD = 0 ;
            for($i = 0 ; $i < count($score) ; $i++){
                if($score[$i] >= 50 && $score[$i] < 60){
                    $countD ++ ;
                }
            }
            return $countD;
        }

        function chkF($score){
            $countF = 0 ;
            for($i = 0 ; $i < count($score) ; $i++){
                if($score[$i] < 50){
                    $countF ++ ;
                }
            }
            return $countF;
        }
        ?>
        
    </body>
</html>