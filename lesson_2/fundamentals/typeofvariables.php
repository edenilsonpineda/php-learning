<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <title>Lesson 2 - Fundamentals</title>
</head>
<body>

<?php
// Comentario de una sola linea.

/**
 * Comentario multi-linea.
 */

echo "¡Hola Mundo, desde PHP!";


/**
 * @author Edenilson Pineda
 * @version 1.0
 * 
 * ---- DECLARACION DE VARIABLES -----
 * -----------------------------------
 * 
 * Toda variable en PHP puede declararse iniciando con guion bajo
 * y vocales o consonantes, evitando el uso de cualquier otro caracter
 * especial incluido los numeros y espacios en blanco.
 *
 * $4Variable - NO ES VALIDO, ya que el nombre no puede iniciar 
 * con valores numericos.
 *
 * $_4variable - VALIDO, ya que podemos inicializar 
 * con un guion bajo.
 * 
 * $variable4 - VALIDO.
 * 
 * $1KReg - NO ES VALIDO.
 * 
 * $A B C - NO ES VALIDO.
 * 
 * $nombre_de_variable_extenso - SI es un nombre de variable valido
 * Podemos escribir un nombre extenso para una variable, pero en la buena
 * practica, es mejor utilizar nombres cortos y de ser posible, en ingles.
 *
 * Ya que la mayoria de codigo fuente se estandariza en este idioma y puede
 * ser leido por la mayoria de programadores.
 * 
 * p.e.
 *      $firstName (primer nombre)
 *      $lastName  (segundo nombre)
 *      $gender    (genero)
 */

// Declarando 3 variables enteras y realizar una sumatoria entre ellas.
$a  = (int) 18;
$b  = (int) -18;
$c  = (int) 0x12;

$sum = $a + $b;

echo "<br><b>La suma de (a+b) es igual a: " . $sum;

$substract = $b - $c;
echo "<br><b>La diferencia de (a-b) es igual a: </b>" . $substract;
?>
    
</body>

<script src="../../resources/js/bootstrap.bundle.min.js"></script>
</html>