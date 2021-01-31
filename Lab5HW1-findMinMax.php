<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW1 : Find Min Max Average</title>
</head>
<body style="text-align : center;">

    <!-- input text number-->
    <h1>HW1 : Find Min Max Average</h1>
    <form action="#" method="get">
        <label for="num1" style="font-size:20px;">Num1 : </label>
        <input type="text" name="num1" value="<?php if(isset($_GET['num1'])){echo $_GET['num1'];}?>" 
        style="background-color:#e8f0fe;width:13%;height:25px;border:1px solid gray;"> <br><br>

        <label for="num2" style="font-size:20px;">Num2 : </label>
        <input type="text" name="num2" value="<?php if(isset($_GET['num2'])){echo $_GET['num2'];}?>" 
        style="background-color:#e8f0fe;width:13%;height:25px;border:1px solid gray;"> <br><br>
        
        <label for="num3" style="font-size:20px;">Num3 : </label>
        <input type="text" name="num3" value="<?php if(isset($_GET['num3'])){echo $_GET['num3'];}?>" 
        style="background-color:#e8f0fe;width:13%;height:25px;border:1px solid gray;"> <br><br>

        <!-- radio button -->
        <input type="radio" name="radio" value="minimum" style="width:20px;height:20px;">
        <label for="minimum" style="font-size:25px;">Minimum</label> <br><br>

        <input type="radio" name="radio" value="maximum" style="width:20px;height:20px;">
        <label for="maximum" style="font-size:25px;">Maximum</label> <br><br>

        <input type="radio" name="radio" value="average" style="width:20px;height:20px;">
        <label for="average" style="font-size:25px;">Average</label> <br><br><br><br>

        <!-- submit-->
        <input type="submit" style="width:80px;height:35px;font-size:20px;"><br><br><br>
        </form>

    <label style="font-size:25px;">
    <?php 
        if(isset($_GET['num1'])){
            $num1 = $_GET['num1'];
            $num1 += 0 ;
        }
        if(isset($_GET['num2'])){
            $num2 = $_GET['num2'];
            $num2 += 0 ;
        }
        if(isset($_GET['num3'])){
            $num3 = $_GET['num3'];
            $num3 += 0 ;
        }
        if(isset($_GET['radio'])){
            $radio = $_GET['radio'];
        }

        // check selected radio-minimum
        $result = 0 ;
        if(isset($_GET['radio'])){
            if($radio == "minimum"){
                if($result = $num1){
                    $result = $num1;
                }
                if($result >= $num2){
                    $result = $num2;
                }
                if($result >= $num3){
                    $result = $num3;
                }

                echo "Minimum number = $result";
            }
        }

        // check selected radio-maximum
        $result = 0 ;
        if(isset($_GET['radio'])){
            if($radio == "maximum"){
                if($result = $num1){
                    $result = $num1;
                }
                if($result <= $num2){
                    $result = $num2;
                } 
                if($result <= $num3){
                    $result = $num3;
                }

                echo "Maximum number = $result";
            }
        }

        if(isset($_GET['radio'])){
            if($radio == "average"){
                echo "Average number = ",(($num1+$num2+$num3)/3);
            }
        }

    ?>
    </label>
</body>
</html>