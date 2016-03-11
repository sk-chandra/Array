<?php
/**
 * Created by PhpStorm.
 * User: sudhanshu
 * Date: 10/3/16
 * Time: 1:24 PM
 */
    function array_to_comma_string(array $array){
        switch(count($array)){
            case 0:
                return '';
            case 1:
                return reset($array);
            case 2:
                return join(" and ", $array);
            default:
                $last = array_pop($array);
                return join(", ", $array). " and $last. ";
        }
    }

    $one = array("Python");
    $out = array_to_comma_string($one);
    echo $out."<br>";

    $two = array("me", "tee");
    $out = array_to_comma_string($two);
    echo $out."<br>";

    $four = array("1", "2", "3", "4");
    $out = array_to_comma_string($four);
    echo $out."<br>";



?>

