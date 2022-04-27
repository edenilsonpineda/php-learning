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
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
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


                                $firstName  = (String) 'Bill';
                                $lastName   = (String) 'Gates';
                                
                                echo '<h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Resultado de concatenar dos cadenas de texto: <u>'.$firstName . '</u> ' . $lastName . '<h3>';
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