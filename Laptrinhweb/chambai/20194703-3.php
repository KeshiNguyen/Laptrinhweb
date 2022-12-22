<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Enter your name and select date and time for the appointment</p>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div>
            <label>Your Name: </label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label>Date: </label>
            <select id="date" name="day">
                <?php 
                    for($a = 1; $a <= 31; $a++) {
                        print("<option>$a</option>");
                    }
                ?>
            </select>
            <select id="month" name="month">
                <?php 
                    for($a = 1; $a <= 12; $a++) {
                        print("<option>$a</option>");
                    }
                ?>
            </select>
            <select id="year" name="year">
                <?php 
                    for($a = 1980; $a <= 2022; $a++) { 
                        print("<option>$a</option>");
                    }
                ?>
            </select>
        </div>
        <div>
            <label>Time: </label>
            <select id="hour" name="hour">
                <<?php 
                    for($a = 0; $a <= 23; $a++) { 
                        print("<option>$a</option>");
                    }
                ?>
            </select>
            <select id="minute" name="minute">
                <?php 
                    for($a = 0; $a <= 59; $a++) {
                        print("<option>$a</option>");
                    }
                ?>
            </select>
            <select id="second" name="second">
                <?php 
                    for($a = 0; $a <= 59; $a++) {
                        print("<option>$a</option>");
                    }
                ?>
            </select>
        </div>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
    <br/>
    <?php 
        if(array_key_exists("name", $_POST)) {
            $name = $_POST["name"];
            $day = $_POST["day"];
            $month = $_POST["month"];
            $year = $_POST["year"];
            $hour = $_POST["hour"];
            $minute = $_POST["minute"];
            $second = $_POST["second"];

            if($year % 4 == 0) {
                if($year % 100 != 0) {
                    $nhuan = 1;
                } else {
                    if($year % 400 != 0) {
                        $nhuan = 0;
                    } else {
                        $nhuan = 1;
                    }
                }
            } else $nhuan = 0;

            switch($month) {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    $numday = 31;
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    $numday = 30;
                    break;
                case 2:
                    if($nhuan == 0) $numday = 28;
                    else $numday = 29;
                    break;
                default:
                    break;
            }

            echo "<p>Hi," . $name . "</p>";
            echo "<p> You have choose to have an appointment on " . $hour . ":" . $minute . ":" . $second . ", " . $day . "/" . $month . "/" . $year . "</p>";
            echo "More information";
            if($hour > 11) $hour = $hour - 12;
            echo "<p>In 12 hours, the time and date is " . $hour . ":" . $minute . ":" . $second . " PM, " . $day . "/" . $month . "/" . $year . "</p>";
            echo "<p>This month has " . $numday . " days</p>";
        }
    ?>
</body>
</html>