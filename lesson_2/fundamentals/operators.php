<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <title>Lesson 2 - Fundamentals (Strings) </title>
</head>

<body>
    <main>
        <div id="custom-card" class="container px-4 py-5">
            <h2 class="pb-2 border-bottom">Lesson 2 - Fundamentals (Strings) </h2>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <!-- Operadores aritmeticos-->
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <?php
                            /**
                             * @author Edenilson Pineda
                             * @version 1.0
                             * @see https://github.com/edenilsonpineda
                             * 
                             * A continuación se presentan ejemplos básicos
                             * utilizando operadores aritméticos. 
                             * Tales como suma, resta, multplicación, división y modulo.
                             */


                            $a  = (integer) 5;
                            $b  = (integer) 3;
                            $pi = (float) 3.1416;

                            echo '<p> La suma de (a+b) es: <b>' . ($a + $b) . '</b></p><br>';
                            echo '<p> La resta de (a-b) es: <b>' . ($a - $b) . '</b></p><br>';
                            echo '<p> La multiplicación de (a x c) es: <b>' . ($a * $c) . '</b></p><br>';
                            echo '<p> La divisi&oacute;n de (a / b) es: <b>' . ($a / $b) . '</b></p><br>';
                            echo '<p> El modulo de (a % b) es: <b>' . ($a % $b) . '</b></p><br>';
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Operadores unarios-->
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <?php
                            /**
                             * @author Edenilson Pineda
                             * @version 1.0
                             * @see https://github.com/edenilsonpineda
                             * 
                             * Los operadores unarios realizan una operación en un solo operando,
                             * como devolver el valor positivo o negativo de una expresión numérica.
                             * (Incrementar y decrementar el valor del operando)
                             */


                            $a  = (integer) 1;
                            echo '<p> El valor inical es: <b>' . $a . '</b></p><br>';
                            echo '<p> El valor modificado con el operador pre-incremento es: <b>' . (++$a) . '</b></p><br>';
                            echo '<p> El valor modificado con el operador post-incremento es: <b>' . ($a++) . '</b></p><br>';
                            echo '<p> El valor modificado con el operador pre-decremento es: <b>' . (--$a) . '</b></p><br>';
                            echo '<p> El valor modificado con el operador post-decremento es: <b>' . ($a--) . '</b></p><br>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="../../resources/js/bootstrap.bundle.min.js"></script>
</html>