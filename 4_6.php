<?php
/**
 * Created by PhpStorm.
 * User: sudhanshu
 * Date: 10/3/16
 * Time: 12:36 PM
 */

    $rand = ["Apple", "Banana", "litchi", "Elephant", "Mango", "Tina", "Piku"];
    $rand = array_pad($rand,9, 'Nimmo');

    foreach($rand as $key => $value){
        echo"$key : $value <br>";
    }

    array_splice($rand, 2);

    echo "<br>";

    foreach($rand as $key => $value){
        echo"$key : $value <br>";
    }

?>