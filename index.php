<?php
/*
$t = date('H');
if($t < '20'){
    echo 'Have a good day';
} 
echo '<br>';
var_dump($t);
*/
/*
$t = date('H');
if($t < '10'){
    echo 'Have a good morning';
}elseif($t < '20'){
    echo 'Have a good day';
}else{
    echo 'Have a good night';
}
echo '<br>';
var_dump($t);
*/
//Giai phuong trinh bac nhat a + b = 0 ;
$a =5;
$b = 6;
if($a == 0){
    if($b == 0){
        echo 'Phuong trinh co so vo nghiem';
    }else{
        echo 'Phuong trinh vo nghiem';
    }
}else{
    $x = - $b / $a;
    echo "Pt co nghiem: $x";
}
?>