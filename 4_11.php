<?php
/**
 * Created by PhpStorm.
 * User: sudhanshu
 * Date: 10/3/16
 * Time: 2:06 PM
 */
    $book_coll = array("Emma", "Pride", "Somer", "Tres Bien");

    $book = "Emma";

    if(in_array($book, $book_coll)){
        echo "Owns";
    }
    else{
        echo "Buy it!";
    }

    echo"<br>";

    $book_coll = array_flip($book_coll);

    if(array_key_exists($book, $book_coll)){
        echo "Owns";
    }
    else{
        echo "Buy it!";
    }
?>