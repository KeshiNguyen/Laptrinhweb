<!DOCTYPE html>
<html>
    <head><title>DataLap3-1</title></head>
<body>
    <?php
    //get information
    $name=$_GET['yourName'];
    $hour=$_GET['hour'];
    $minute=$_GET['minute'];
    $second=$_GET['second'];
    $day=$_GET['day'];
    $month=$_GET['month'];
    $year=$_GET['year'];
    $time=null;
    $Time="$hour:$minute:$second";
    $Date="$day/$month/$year";
    //check this day is right?
    if((checkdate($month,$day,$year))==FALSE)
    {
        echo'<p>Not exist that day</p>';
    }
    else
    {
    //right=> 
    echo '<p>Hi ' .$name . '!</p>';
    echo '<p>You have choose to have an appointment on '.$Time .', '.$Date. '</p>';
    echo '<p>More information</p>';
    if($hour>11)
    {
        $hour-=12;
        $time="PM";
    }
    else $time="AM";
    echo '<p>In 12 hours, the time and date is '.$Time .' ' .$time .', ' .$Date. '</p>';
    function days_in_month($month, $year)
    {
    // calculate number of days in a month
    return $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31);
    }
    echo '<p>This month has ' . days_in_month($month,$year) . ' days</p>';
    }
    ?>
</body>
</html>