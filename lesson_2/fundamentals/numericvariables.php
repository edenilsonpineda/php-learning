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
    /**
     * @author Edenilson Pineda
     * @version 1.0
     * @see https://github.com/edenilsonpineda
     * 
     * Las variables flotantes son utilizadas para almacenar
     * valores númericos con decimales, inclusive se puede
     * utilizar el identificador de exponencial para un decimal 
     * extenso.
     */


    $a  = (float) 18.69;
    $b  = (float) 0.199e20;

    $sum = $a + $b;
    
    echo 'El sultado de la sumatoria de ambas variables flotantes es: ' . $sum;
?>

</body>
<script src="../../resources/js/bootstrap.bundle.min.js"></script>
</html>