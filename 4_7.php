<?php
/**
 * Created by PhpStorm.
 * User: sudhanshu
 * Date: 10/3/16
 * Time: 12:52 PM
 */
    $rand = ["Apple", "Banana", "litchi", "Elephant", "Mango", "Tina", "Piku"];
    $rand2 = ["x", "y", "z"];

    $merged = array_merge($rand, $rand2);

    foreach($merged as $key => $value){
        echo"$key : $value <br>";
    }



?>