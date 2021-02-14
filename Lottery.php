<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lottery</title>
</head>
<body>
    <center>
    <div style="width:800px;">
        <form action="Result-lottery.php" method="get" style="background-color:#33CCFF">
            <div style="font-size:30px; color:blue;">โปรแกรมตรวจเลขท้าย 2 ตัว</div>
            <div style="color:red">
                <h4>รางวัล เมื่อถูกเลขท้าย 2 ตัว(ต้นทุนซื้อ X 60 เท่า)</h4>
                <h4>เช่า ถ้าซื้อ 10 บาท ถูกรางวัล รับเงิน 600 บาท</h4>
                <label><b>เลขเสี่ยงโชค[0-99]</label>
                <input type="number" name="number" id="number" required="required">
                <h2>* ซื้อได้ ตั้งแต่ 10 - 500 บาท เท่านั้น</h2>
                <label>จำนวนเงินที่คุณต้องการซื้อ [10 - 500 บาท] </label>
                <input type="number" id="money" name="money" required="required" min="10" max="500">
            </div>
            <input type="submit" value="ตรวจรางวัล">
        </form>
    </center>
    </div>
</body>
</html>