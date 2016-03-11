<?php
/**
 * Created by PhpStorm.
 * User: sudhanshu
 * Date: 10/3/16
 * Time: 1:06 PM
 */
$rand = ["Apple", "Banana", "litchi", "Elephant", "Mango", "Tina", "Piku"];

$str = join(", ", $rand);

echo $str."<br>";

$str2='';

foreach($rand as $key => $val){
    $str2 .= ", $val";
}
$str2 = substr($str2,1);

echo $str2."<br>";
?>

