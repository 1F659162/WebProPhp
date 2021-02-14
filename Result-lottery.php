<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result lottery</title>
</head>
<body>
    <form action="Lottery.php">
        <?php
        $rand =32;
        $money = 0;
            if(isset($_GET['number'])){
                $number = $_GET['number'];
                if(isset($_GET['money'])){
                    $money = $_GET['money'];
                }
                if($number == $rand){
                    echo "คุณได้รับเงินรางวัล ",($money*60);
                }else {
                    echo "เสียใจด้วยคุณไม่ถูกรางวัล";
                }
            }
        ?>
        <br>
        <input type="submit" value="Back">
        <br><br>
        <?php
            echo "รางวัลเลขที่ออกคือ : $rand";
        ?>
    </form>
</body>
</html>