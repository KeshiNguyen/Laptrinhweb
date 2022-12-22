<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <?php
    //check number

 
            function radToDeg($giaTri)
            {
                $ketQua=$giaTri*180/constant("M_PI");
                echo $ketQua;
            }
            function degToRad($giaTri)
            {
                $ketQua=$giaTri/180*constant("M_PI");
                echo $ketQua;
            }
        $giaTri=$_GET['input'];
        $option=trim($_GET['convert']);
        if(is_numeric($giaTri))
        {
        if($option=="1") radToDeg($giaTri);
        else degToRad($giaTri);
        }
        else echo 'Is not numberic';
        ?>
    </body>
</html>