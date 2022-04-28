<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <title>Lesson 2 - Fundamentals (Arrays) </title>
</head>

<body>
    <main>
        <div id="custom-card" class="container px-4 py-5">
            <h2 class="pb-2 border-bottom">Lesson 2 - Fundamentals (Arrays) </h2>
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
                             * Un arreglo (o array) en PHP es un mapa o conjunto de datos ordenados.
                             * Un mapa es un tipo de dato que asocia valores con claves y se utiliza
                             * en el caso de una matriz, lista (vector), tablas asociativas, diccionarios
                             * colecciones, pilas, colas y más.
                             * 
                             * Los valores de un arreglo pueden ser otro arreglo, árboles y 
                             * arreglos multidimensionales. 
                             * 
                             * Los valores de un arreglo se asignan a través de la posición o indice.
                             * en este caso, el valor 0 es el la primera posición del arreglo. Y su ultimo valor es n-1. 
                             * 
                             */


                            $simpleArr  = [];
                            $emptyArrayFromPhpFunction  = array();
                            
                            // Se asigna su indice automaticamente
                            $anotherArray               = array("Hola","Mundo"); 
                            
                            // Asignamos el dato al indice de manera manual.
                            $simpleArr[0]   = 'Toyota';
                            $simpleArr[1]   = 'Honda';
                            $simpleArr[2]   = 'Mitsubishi';

                            print "<pre>";
                            print_r($simpleArr);

                            print_r($anotherArray);
                            print "</pre>";

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