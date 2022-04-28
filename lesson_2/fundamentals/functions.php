<?php
require 'func/sum_func.php';
// include 'func/sum_func.php';
/**
 * @author Edenilson Pineda
 * @version 1.0
 * @see https://github.com/edenilsonpineda
 * 
 */

function foo($arg_1, $arg_2){
    echo 'Funcion FOO.';
}

// Recursividad
function recursive($a){
    if ($a < 20) {
        echo "$a <br>";
        recursive($a + 1);
    }
}

$num1   = (integer) 15;
$num2   = (integer) 25;

echo 'La suma de dos n&uacute;meros es: <b>' . sum($num1, $num2) . '</b><br>';
