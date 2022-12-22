<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <FORM ACTION="Datalap3-1.php" METHOD="GET">
        <table>
            <tr>
                <p>Enter your name and select date and time for appointment</p>
                <td>Your Name: </td>
                <td><input type="text" size="10" maxlength="15" name="yourName"></td>
            </tr>
            <tr>
                <td>Date: </td>
                <td> <select name="day" id="day">
                    <?php
                        for($i=1;$i<=31;$i++)
                            print("<option selected>$i</option>");
                    ?>
                </select> </td>
                <td> <select name="month" id="month">
                    <?php
                        for($i=1;$i<=12;$i++)
                            print("<option selected>$i</option>");
                    ?>
                </select> </td>
                <td> <select name="year" id="year">
                    <?php
                        for($i=1990;$i<=2050;$i++)
                            print("<option selected>$i</option>");
                    ?>
                </select> </td>
            </tr>
            <tr>
                <td>Date: </td>
                <td> <select name="hour" id="hour">
                    <?php
                        for($i=0;$i<=23;$i++)
                            print("<option selected>$i</option>");
                    ?>
                </select> </td>
                <td> <select name="minute" id="minute">
                    <?php
                        for($i=0;$i<=59;$i++)
                            print("<option selected>$i</option>");
                    ?>
                </select> </td>
                <td> <select name="second" id="second">
                    <?php
                        for($i=0;$i<=59;$i++)
                            print("<option selected>$i</option>");
                    ?>
                </select> </td>
            </tr>
            <tr>
                <td align="right"> <INPUT TYPE="SUBMIT" VALUE="Submit"></td>
                <td align="left"><INPUT TYPE="RESET" VALUE="Reset"> </td>
            </tr>
        </table>
    </FORM>
    <!-- <?php
    $name=$_GET['yourName'];
    echo'<p> hi ' . $_GET['yourName'] . '</p>';
    ?> -->
</body>

</html>