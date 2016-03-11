<?php
/**
 * Created by PhpStorm.
 * User: sudhanshu
 * Date: 10/3/16
 * Time: 1:47 PM
 */
    $hype = array(1 => "Mohan", 3=> "Sohan");

    $num = 0;
    while($num != 5) {
        if (array_key_exists($num, $hype)){
            echo $num." : ".$hype[$num]."<br>";
        }
        else{
            echo $num." does not exist.<br>";
        }
        $num++;
    }

    $num = 0;
    while($num != 5) {
        if (isset($hype[$num])){
            echo $num." is set.<br>";
        }
        else{
            echo "Set ".$num."<br>";
        }
        $num++;
    }

?>