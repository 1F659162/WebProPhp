<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="cal_6206021620159.php" method="get">
        <table>
            <tr>
                <td>เลือกผลไม้</td>
                <td>
                    <select name="fruit" id="">
                        <option value="apple" selected>apple</option>
                        <option value="orange">orange</option>
                        <option value="banana">banana</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Width : </td>
                <td><input name='width' type="number" min='100' max='500'></td>
            </tr>
            <tr>
                <td>จำนวน</td>
                <td>
                    <input type="radio" name='kg' value='1'>1 kg.
                    <input type="radio" name='kg' value='2'>2 kg.
                    <input type="radio" name='kg' value='3'>3 kg.
                </td>
            </tr>
            
        </table>

            <p>apple 100 / 1kg.</p>
            <p>orange 200 / 1kg.</p>
            <p>banana 300 / 1kg.</p>

        <input type="submit">
    </form>
</body>
</html>