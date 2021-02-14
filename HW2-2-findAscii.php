<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW2-2:Find Ascii</title>
</head>
<center>
<body style="text-align:center;">
    <div style="border:solid black 1px;width:500px">
        <h2>HW2-2:Find Ascii</h2>
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
                for($i = 0 ; $i < strlen(count_chars($str,3)); $i++){
                    if(ord(count_chars($str,3)[$i]) >= 65 && ord(count_chars($str,3)[$i]) <=90){
                        echo count_chars($str,3)[$i]," : Ascii = ",ord(count_chars($str,3)[$i]),"<br>";
                    }
                    if(ord(count_chars($str,3)[$i]) >= 97 && ord(count_chars($str,3)[$i]) <=122){
                        echo count_chars($str,3)[$i]," : Ascii = ",ord(count_chars($str,3)[$i]),"<br>";
                    }
                }                
            }
        ?>
        <br><br>
    </div>
    
</body>
</center>
</html>