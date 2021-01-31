<html>
<head>
    <title>HW4</title>
</head>
<style>
    table,tr,td{
        border:solid black 1px;
        border-collapse:collapse;
    }
</style>
<body>
    <form action="#" method="get">
        <table>
        
            <tr>
                <td style="text-align:center;"></td>
                <td style="text-align:center;"><label for="name-subject">Subject</label></td>
                <td style="text-align:center;"><label for="grade">Grade</label></td>
                <td style="text-align:center;"><label for="credit">credit</label></td>
            </tr>

            <?php
                for($i=1;$i<=5;$i++){
            ?>
                <tr>
                    <td><label for="subject<?echo $i?>">Subject <?php echo $i?></label></td>
                    <td><input type="text" name="name-subject<?echo $i?>"></td>
                    <td><input type="text" name="grade<?echo $i?>" maxlength="2" style="width:40px;"></td>
                    <td><input type="number" min="1" max="3" name="credit<?echo $i?>" maxlength="1" style="width:40px;"></td>
                </tr>
            <?php
                }
            ?>
        </table>
        <input type="submit">
    </form>

    <?php
        $totalGrade = 0;
        $totalCredit = 0;
        $countsubject = 0;
        for($i = 1;$i <=5;$i++){
            if(isset($_GET["name-subject$i"])){
                if($_GET["name-subject$i"]!= null){
                    echo "<h2>Subject $i : ",$_GET["name-subject$i"];
                }
            }
            
            if(isset($_GET["grade$i"])){
                if($_GET["grade$i"]!= null){
                    if(strtolower($_GET["grade$i"]) == "a"){
                        echo " Grade : 4";
                        $totalGrade += 4*$_GET["credit$i"];
                        $countsubject +=1;
                    }else if(strtolower($_GET["grade$i"]) == "b+"){
                        echo " Grade : 3.5";
                        $totalGrade += 3.5*$_GET["credit$i"];
                        $countsubject +=1;
                    }else if(strtolower($_GET["grade$i"]) == "b"){
                        echo " Grade : 3";
                        $totalGrade += 3*$_GET["credit$i"];
                        $countsubject +=1;
                    }else if(strtolower($_GET["grade$i"]) == "c+"){
                        echo " Grade : 2.5";
                        $totalGrade += 2.5*$_GET["credit$i"];
                        $countsubject +=1;
                    }else if(strtolower($_GET["grade$i"]) == "c"){
                        echo " Grade : 2";
                        $totalGrade += 2*$_GET["credit$i"];
                        $countsubject +=1;
                    }else if(strtolower($_GET["grade$i"]) == "d+"){
                        echo " Grade : 1.5";
                        $totalGrade += 1.5*$_GET["credit$i"];
                        $countsubject +=1;
                    }else if(strtolower($_GET["grade$i"]) == "d"){
                        echo " Grade : 1";
                        $totalGrade += 1*$_GET["credit$i"];
                        $countsubject +=1;
                    }else if(strtolower($_GET["grade$i"]) == "f"){
                        echo " Grade : 0";
                        $countsubject +=1;
                    }
                }
            }
            
            if(isset($_GET["credit$i"])){
                if($_GET["credit$i"]!= null){
                    echo " Credit : ",$_GET["credit$i"];
                    $totalCredit+=$_GET["credit$i"];
                }                
            }    
        }
        echo "<h2>GPA : ",$totalGrade/$totalCredit," </h2>";    
    ?>
</body>
</html>