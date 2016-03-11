<?php
/**
 * Created by PhpStorm.
 * User: sudhanshu
 * Date: 9/3/16
 * Time: 5:00 PM
 */
$even = range(0, 50, 5);

foreach($even as $key => $value){
    echo"$key : $value <br>";
}
echo"<br>";

array_shift($even);
array_pop($even);
unset($even[4]);

foreach($even as $key => $value){
    echo"$key : $value <br>";
}


?>