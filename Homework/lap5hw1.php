<html>
    <head>
        <title>HW1 : Find Min Max Average</title>
    </head>
    <body style="text-align:center;">
        <h1>HW1 : Find Min Max Average</h1>

        <form action="#" method="get">
            <table style="width:100%; border:solid 2px; text-align:center;">
                <tr>
                    <td>
                        <label for="num1" style="font-size:25px;">Num1 : </label>
                        <input type="text" id="num1" name="num1" style="width:30%; height:25px;"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="num1" style="font-size:25px;">Num1 : </label>
                        <input type="number" id="num1" name="num1" style="width:30%; height:25px;"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="num1" style="font-size:25px;">Num1 : </label>
                        <input type="number" id="num1" name="num1" style="width:30%; height:25px;"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" id="minimum" name="minimum">
                        <label for="minimum">Minimum</label><br>
                        <input type="radio" id="maximum" name="maximum">
                        <label for="maximum">Maximum</label><br>
                        <input type="radio" id="average" name="average">
                        <label for="average">Average</label><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            $id = $_GET['id'];
                            echo $id;
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>