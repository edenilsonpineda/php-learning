<?php

// ADDSLASHES.
// Output: O\'Reilly?
$str = "O'Reilly?";
eval("echo '" . addslashes($str) . "';");



// EXPLODE
// Devuelve una matriz de strings (cadenas de texto), cada una de las cuales es una subcadena de string formada 
// por la división delimitada por el separador especificado.

// Ejemplo 1
$directory = "pineda:*:1023:1000::/home/pineda:/bin/sh";
$data   = explode(":", $directory);

echo $data[0]; // foo
echo $data[6]; // '/home/pineda'


// fprintf 
// Escribe una cadena con formato en una secuencia o stream.

if(!($fp = fopen('date.txt', 'w'))) {
    return;
}

fprintf($fp, "%04d-%02d-%02d", $year, $month, $day);


// htmlspecialchars
// Convertir caracteres especiales en entidades HTML

$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;


// MD5
// Calcular el hash md5 de una cadena
$str2 = 'apple';

if (md5($str2) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Te gustaria una manzana verde o roja?";
}
?>