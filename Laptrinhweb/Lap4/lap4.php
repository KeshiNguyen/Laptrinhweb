<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $submitted = isset($_GET['sent']) && $_GET['sent'] == 1;
    $sort_type=$_GET['sort_type'];
    function user_sort($a,$b)
    {
        if($b=='smarts')
        {
            return 1;
        }
        elseif($a=='smarts')
        {
            return -1;
        }  
        return($a==$b) ? 0:(($a<$b) ? -1 : 1) ;
    }
    $values =['name' =>'asdasd',
            'email_address'=>'dasda',
            'age'=>32,
            'smarts'=>'some'
            ];
    if($submitted)
    {
        // if(ord($sort_type)==117)
    //     if($sort_type=='usort' || $sort_type=='uksort'|| $sort_type=='uasort')
    //     {
    //         $sort_type($values,'user_sort');
    //     }
    //     else{
    //         $sort_type($values);
    //     }
    // }
    if($)
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" >
        <p>
            <input type="radio" name="sort_type" value="sort" checked="checked"/>Standard sort<br /> 
            <input type="radio" name="sort_type" value="rsort" />Reverse sort<br/>
            <input type="radio" name="sort_type" value="usort" />User-defined sort<br/>
            <input type="radio" name="sort_type" value="krsort"/>Reverse key sort<br/>
            <input type="radio" name="sort_type" value="uksort"/>User-defined key sort<br/>
            <input type="radio" name="sort_type" value="asort"/>Value sort<br/>
            <input type="radio" name="sort_type" value="arsort"/>Reserve value sort<br/>
            <input type="radio" name="sort_type" value="uasort"/>User-defined value sort<br/>
        </p>
        <p >
            <input type="submit" value="Sort" name="submitted"/>    
        </p>
        <p>
            Values <?= $submitted ? "sorted by $sort_type" : "unsort"            ?>
        </p>
        <ul>
            <?php
            foreach($values as $key=>$value)
                echo "<li><b> $key </b> : $value</li>";
            ?>
        </ul>
    </form>
</body>
</html>