<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW2-1:Find Character</title>
</head>
<center>
<body style="text-align:center;">
    <div style="border:solid black 1px;width:500px">
        <h2>HW2-1:Find Charactor</h2>
        <form action="#" method="get">
            <label for="text">Your Text:</label>
            <input type="text" name="text" id="text" value="<?php if(isset($_GET['text'])){echo $_GET['text'];} ?>"><br><br>
            <input type="submit">
            <button onclick="document.getElementById('text').value=''">clear</button>
            
        </form>

        <h3>Count Char in Sentence</h2><br><br>
        <?php
            $arrStr = array();
            if(isset($_GET['text'])){
                $str = $_GET['text'];
                
                $loop = 0 ;
                foreach(count_chars($str,1) as $val){
                    if(count_chars($str,3)[$loop] == ' '){
                        echo "space = " , $val , " , ";
                    }else {
                        echo count_chars($str,3)[$loop], " = ", $val , " , ";
                    }
                    $loop+=1;
                    if(($loop%4) == 0){
                        echo "<br>";
                    }
                }
            }
        ?>
        <br><br>
    </div>
    
</body>
</center>
</html>