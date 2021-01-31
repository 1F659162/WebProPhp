<html>
    <head>
        <title>HW3 Cal Grade</title>
    </head>

    <style>
        table,tr,td{
            font-size:25px;
        }
        table{
            padding:20px;
        }

    </style>

    <body>
        <form action="#" method="get">
            <h1> Grade Calculation</h1>
            <table style="border:1px solid black;">
                <tr style="border:1px solid black;">
                    <td ><label for="final">Final </label></td>
                    <td>: <input type="number" name="final" style="height:25px;" min="0" max="30" value="<?php if(isset($_GET['final'])){echo $_GET['final'];}?>">
                </tr>

                <tr>
                    <td><label for="midterm">Midterm </label></td>
                    <td>: <input type="number" name="midterm" style="height:25px;" min="0" max="30" value="<?php if(isset($_GET['midterm'])){echo $_GET['midterm'];}?>"></td>
                </tr>

                <tr>
                    <td><label for="Assignment">Assignment </label></td>
                    <td>: <input type="number" name="Assignment" style="height:25px;" min="0" max="20" value="<?php if(isset($_GET['Assignment'])){echo $_GET['Assignment'];}?>"></td>
                </tr>

                <tr>
                    <td><label for="Homework">Homework </label></td>
                    <td>: <input type="number" name="Homework" style="height:25px;"  min="0" max="20" value="<?php if(isset($_GET['Homework'])){echo $_GET['Homework'];}?>"></td>
                </tr>

            </table><br>

            <input type="submit" style="width:100px; height:35px;">

            <?php
                if(isset($_GET['final'])){
                    if($_GET['final'] != null){
                        $final = $_GET['final'];
                        echo "<h2>Final : $final</h2>";
                    }
                    
                }

                if(isset($_GET['midterm'])){
                    if($_GET['midterm'] != null){
                        $midterm = $_GET['midterm'];
                        echo "<h2>Midterm : $midterm</h2>";
                    }
                    
                }

                if(isset($_GET['Assignment'])){
                    if($_GET['Assignment'] != null){
                        $assign = $_GET['Assignment'];
                        echo "<h2>Assignment : $assign</h2>";
                    }
                    
                }

                if(isset($_GET['Homework'])){
                    if($_GET['Homework'] != null){
                        $homework = $_GET['Homework'];
                        echo "<h2>Homework : $homework</h2>";
                    }
                    
                }
                if(isset($_GET['final']) || isset($_GET['Homework']) || isset($_GET['Assignment']) || isset($_GET['Midterm'])){
                    $total = 0 ;
                    if(isset($_GET['final'])){
                        if($_GET['final'] != null){
                            $total+=$_GET['final'];
                        }
                    }
                    if(isset($_GET['midterm'])){
                        if($_GET['midterm'] != null){
                            $total+=$_GET['midterm'];
                        }                    
                    }
                    if(isset($_GET['Homework'])){
                        if($_GET['Homework'] != null){
                            $total+=$_GET['Homework'];
                        }
                    }
                    if(isset($_GET['Assignment'])){
                        if($_GET['Assignment'] != null){
                            $total+=$_GET['Assignment'];
                        }                    
                    }
                    
                    echo "<h2>Total Score = ",$total,"</h2>";
                    
                    if($total >= 80){
                        echo "<h2>Your Grade is : A</h2>";
                    }else if ($total >= 75){
                        echo "<h2>Your Grade is : B+</h2>";
                    }else if ($total >= 70){
                        echo "<h2>Your Grade is : B</h2>";
                    }else if ($total >= 65){
                        echo "<h2>Your Grade is : C+</h2>";
                    }else if ($total >= 60){
                        echo "<h2>Your Grade is : C</h2>";
                    }else if ($total >= 55){
                        echo "<h2>Your Grade is : D+</h2>";
                    }else if ($total >= 50){
                        echo "<h2>Your Grade is : D</h2>";
                    }else if ($total < 50){
                        echo "<h2>Your Grade is : F</h2>";
                    }
                }
            ?>
        </form>
    </body>
</html>