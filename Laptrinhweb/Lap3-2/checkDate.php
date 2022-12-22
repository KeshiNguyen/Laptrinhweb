<?php
//thong tin
    $a_Name = $_GET['aName'];
    $b_Name = $_GET['bName'];
    $a_date=date('l,M d,Y',strtotime($_GET['aDate']));
    $b_date=date('l,M d,Y',strtotime($_GET['bDate']));
    echo '<p>'.$a_Name .' co ngay sinh la '.$a_date .'</p>';
    echo '<p>'.$b_Name .' co ngay sinh la '.$b_date .'</p>';
//chenh lech giua 2 ngay
    $date1=date_create($a_date);
    $date2=date_create($b_date);
    $diff= date_diff($date1,$date2);
    echo '<p>different : '.$diff->format('%Y') . ' years ' .$diff->format('%m'). ' months ' .$diff->format('%d').' days</p>';
//tinh tuoi
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    echo  '<p>Ngay hien tai la : '.date('l,M d,Y') .'</p>';

    $diff1=date_diff(date_create(),$date1);
    echo '<p>age of '.$a_Name .': ' .$diff1->format('%Y') .' years ' .$diff1->format('%m') .' months ' .$diff1->format('%d') .' days '       .'</p>';
    $diff2=date_diff(date_create(),$date2);
    echo '<p>age of '.$b_Name .': ' .$diff2->format('%Y') .' years ' .$diff2->format('%m') .' months ' .$diff2->format('%d') .' days '       .'</p>';
//chenh lech tuoi
    $chenhLech= (int)date_format($date1,"Y")-(int)date_format($date2,"Y");
    if($chenhLech==0) 
    {
        echo '<p>' .$a_Name .' va ' .$b_Name .' cung tuoi</p>';
    }
    elseif($chenhLech>0)
    {
        echo '<p>' .$a_Name .' kem ' .$b_Name .' ' .$chenhLech .' tuoi</p>';
    }
    else
    {
        echo '<p>' .$a_Name .' hon ' .$b_Name .' ' .abs($chenhLech) .' tuoi</p>';
    }
?>