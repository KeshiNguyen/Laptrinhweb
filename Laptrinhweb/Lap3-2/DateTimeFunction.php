<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time</title>
</head>
<body>
    <form action="checkDate.php" method="GET">
        <h1>sadsa</h1>
        <table>
            <tr>
                <td style="color:#DFFF00; font-size: 2em">Enter A'name</td>
                <td><input type="text" name="aName" id="aName" style="width: 15; font-size: 2em "></td>
            </tr>
            <tr>
                <td style="color:brown; font-size: 2em">Enter birthday</td>
                <td><input type="date" name="aDate" id="aDate" style="width: 15;font-size : 2em" max="<?php echo date('Y-m-d');?>"></td>
            </tr>
            <tr>
                <td style="color:blueviolet; font-size: 2em">Enter B'name</td>
                <td><input type="text" name="bName" id="bName" style="width: 15;font-size: 2em "></td>
            </tr>
            <tr>
                <td style="color:brown; font-size: 2em">Enter birthday</td>
                <td><input type="date" name="bDate" id="bDate" style="width: 15;font-size : 2em" max="<?php echo date('Y-m-d');?>"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">submit</button>
            </tr>
        </table>
    </form>

</body>
</html>