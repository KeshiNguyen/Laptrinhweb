<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get"> 
        <table>

        </table>
    </form>
    <?php
    class page{
        public $page,$title,$year,$copyright;
        function addHeader();
        function addContent($content);
        function addFooter();
    }
    $page1=new page;
    var_dump($page1);
    ?>p
</body>
</html>