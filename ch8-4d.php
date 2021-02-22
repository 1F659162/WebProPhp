<?php
// declare function page_header with argument and defualt value
function page_header($title, $bgcolor = "ffffff") {
echo '<html lang="en"><head><meta charset="UTF-8">';
echo '<title>' . $title . '</title></head>';
echo '<body bgcolor="#' . $bgcolor . '">';
}
// declare function page_footer
function page_footer($message = "ขอบคุณ") {
echo '<hr>' . $message ;
echo '</body></html>';
}

?>
    <center>
        <form action="#" method ="get">
        <table>
                <tr>
                    <td>    <label >Row : </label></td>
                    <td>    <input type="number" name = "row" id="row" value="<?php if(isset($_GET['row']))echo $_GET['row'];?>"><br></td>
                </tr>
                <tr>
                    <td>    <label >Column : </label></td>
                    <td>
                    <input type="number" name = "col" id="col" value="<?php if(isset($_GET['col']))echo $_GET['col'];?>"><br></td>
                </tr>
                <tr>
                    <td>    <label >Start Num : </label></td>
                    <td>    <input type="number" name = "snum" id="snum" value="<?php if(isset($_GET['snum']))echo $_GET['snum'];?>"><br></td>
                </tr>
                <tr>
                    <td>    <label >End Num : </label></td>
                    <td>    <input type="number" name = "enum" id="enum" value="<?php if(isset($_GET['enum']))echo $_GET['enum'];?>"><br></td>
                </tr>
            </table>
            <input type="submit">
        </form>
    </center>
    <br>
<br>
    <?php
// declare function checker
function show_checker( $maxRow, $maxCol, $bgcolor1, $bgcolor2) {
    $min = 99999;
    $max = 0;

    echo "<p align='center'> Row = $maxRow , Column = $maxCol </p>";
    echo '<table align="center" border="1">' ;
    for($r = 1; $r <= $maxRow; $r++) {    
        echo '<tr >';
        for($c = 1; $c <= $maxCol; $c++) {
            if ( $r % 2 == 1) {
                echo '<td bgcolor="#' . (($c % 2 == 1)?$bgcolor1:$bgcolor2) . '">';
            }
            else {
                echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
            }
            $s = rand($_GET['snum'] , $_GET['enum']);
            echo $s. '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    if ($maxRow == $maxCol) $message = "This is Square";
    else $message = "This is Rectangle";
    echo "<p align='center'> $message</p>";
    echo "min = $min <br>";
    echo "max = $max <br>";
}
page_header("Example 8-4", "FFDDEE");
show_checker($_GET['row'],$_GET['col'],"33ff99","ffff99");
page_footer("Thank You.");
?>