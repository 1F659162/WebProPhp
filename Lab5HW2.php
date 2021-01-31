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
        style="width:13%;height:25px;border:1px solid gray;"> <br><br>
        <input style = "width : 20px; height : 20px;" type="radio" name="operator1" value="plus"><label for="plus" style="font-size:20px;"> + : </label>
        <input style = "width : 20px; height : 20px;"type="radio" name="operator1" value="minus"><label for="minus" style="font-size:20px;"> - : </label>
        <input style = "width : 20px; height : 20px;"type="radio" name="operator1" value="mul"><label for="mul" style="font-size:20px;"> * : </label>
        <input style = "width : 20px; height : 20px;"type="radio" name="operator1" value="div"><label for="div" style="font-size:20px;"> / : </label>
        <br><br>

        <label for="num2" style="font-size:20px;">Num2 : </label>
        <input type="text" name="num2" value="<?php if(isset($_GET['num2'])){echo $_GET['num2'];}?>" 
        style="width:13%;height:25px;border:1px solid gray;"> <br><br>
        <input style = "width : 20px; height : 20px;" type="radio" name="operator2" value="plus"><label for="plus" style="font-size:20px;"> + : </label>
        <input style = "width : 20px; height : 20px;"type="radio" name="operator2" value="minus"><label for="minus" style="font-size:20px;"> - : </label>
        <input style = "width : 20px; height : 20px;"type="radio" name="operator2" value="mul"><label for="mul" style="font-size:20px;"> * : </label>
        <input style = "width : 20px; height : 20px;"type="radio" name="operator2" value="div"><label for="div" style="font-size:20px;"> / : </label>
        <br><br>

        <label for="num3" style="font-size:20px;">Num3 : </label>
        <input type="text" name="num3" value="<?php if(isset($_GET['num3'])){echo $_GET['num3'];}?>" 
        style="width:13%;height:25px;border:1px solid gray;"> <br><br>
        <br><br><br><br>

        

        <!-- submit-->
        <input type="submit" style="width:80px;height:35px;font-size:20px;"><br><br><br><br>
        
        <label style="font-size:25px;">
        <?php
        $total1 = 0;
        $total2 = 0;
        if(isset($_GET['num1'])){
            $num1 = $_GET['num1'];
        }
        if(isset($_GET['num2'])){
            $num2 = $_GET['num2'];
        }
        if(isset($_GET['num3'])){
            $num3 = $_GET['num3'];
        }
        
        if(isset($_GET['operator1'])){
            if($_GET['operator1'] == "plus"){
                $total1 = $num1 + $num2;
                if($_GET['num3'] == null){
                    echo "Sum of number = ",$total1 ;
                }
            }else if($_GET['operator1'] == "minus"){
                $total1 = $num1 - $num2;
                if($_GET['num3'] == null){
                    echo "Sum of number = ", $total1 ;
                }
            }else if($_GET['operator1'] == "mul"){
                $total1 = $num1 * $num2;
                if($_GET['num3'] == null){
                    echo "Sum of number = ", $total1 ;
                }
            }else if($_GET['operator1'] == "div"){
                $total1 = $num1 / $num2;
                if($_GET['num3'] == null){
                    echo "Sum of number = ", $total1 ;
                }
            }

            if(isset($_GET['operator2'])){
                if($_GET['operator2'] == "plus"){
                    echo "Sum of number = ", $total2 = $total1 + $num3;
                }else if($_GET['operator2'] == "minus"){
                    echo "Sum of number = ", $total2 = $total1 - $num3;
                }else if($_GET['operator2'] == "mul"){
                    echo "Sum of number = ", $total2 = $total1 * $num3;
                }else if($_GET['operator2'] == "div"){
                    echo "Sum of number = ", $total2 = $total1 / $num3;
                }
            }
        }
        
        ?>
        </label>
    </form>
</body>
</html>