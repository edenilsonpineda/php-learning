<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <title>Lesson 2 - Fundamentals (Control Structures) </title>
</head>

<body>
    <main>
        <div id="custom-card" class="container px-4 py-5">
            <h2 class="pb-2 border-bottom">Lesson 2 - Fundamentals (Control Structures) </h2>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <!-- Estructuras de control -->
                <div class="col">
                    <div class="card overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <?php

                            /**
                             * @author Edenilson Pineda
                             * @version 1.0
                             * @see https://github.com/edenilsonpineda
                             * 
                             */

                            $a  = (integer) 20;
                            $b  = (integer) 5;
                            $mayor  = (integer) 0;

                            echo "<center><p> Estructuras If-Else </p></center>";
                            echo '<p> Numeros a comparar: <b>' . $a . ',' . $b . '</b></p><br>';
                            
                            if($a > $b):
                                $mayor  = $a;
                            else:
                                $mayor  = $b;
                            endif;

                            echo '<p> El n&uacute;mero mayor es: <b>' . $mayor . '</b></p><br>';

                            ?>
                        </div>
                    </div>
                </div>

                <!-- Switch Case -->
                <div class="col">
                    <div class="card overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <?php

                            /**
                             * @author Edenilson Pineda
                             * @version 1.0
                             * @see https://github.com/edenilsonpineda
                             * 
                             */

                            $dayOfNow       = (String) date("D");
                            $nameOftheDay   = (String) '';

                            switch ($dayOfNow):
                                case 'Mon':
                                    $nameOftheDay = 'Lunes';
                                    break;
                                case 'Tue':
                                    $nameOftheDay = 'Martes';
                                    break;
                                case 'Wed':
                                    $nameOftheDay = 'Miercoles';
                                    break;
                                case 'Thu':
                                    $nameOftheDay = 'Jueves';
                                    break;
                                case 'Fri':
                                    $nameOftheDay = 'Viernes';
                                    break;
                                case 'Sat':
                                    $nameOftheDay = 'Sabado';
                                    break;
                                default:
                                    $nameOftheDay = 'Domingo';
                                    break;
                            endswitch;

                            echo '<p> Hoy es: <b>'.$nameOftheDay.'</b></p>';

                            ?>
                        </div>
                    </div>
                </div>

                <!-- For -->
                <div class="col">
                    <div class="card overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <?php

                            $limit      = (integer) 100;
                            $index      = (integer) 0;

                            echo '<p>N&uacute;meros impares del 1 - 100!</p> <br>';

                            for ($index=1; $index <= $limit; $index++) { 
                                if($index % 2):
                                    echo 'N&uacute;mero impar: ' . $index . '</br>';
                                endif;
                            }

                            ?>
                        </div>
                    </div>
                </div>

                <!-- While -->
                <div class="col">
                    <div class="card overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <?php

                            $limitWhile      = (integer) 0;

                            echo '<p>N&uacute;meros pares del 1 - 100!</p> <br>';

                            while ($limitWhile <= 100) {
                                if(!($limitWhile % 2)):
                                    echo 'N&uacute;mero impar: ' . $limitWhile . '</br>';
                                endif;

                                $limitWhile++;
                            }

                            ?>
                        </div>
                    </div>
                </div>

                <!-- foreach -->
                <div class="col">
                    <div class="card overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <?php

                            $infoArray  = array('Carlos','Ximena','Natalia','Joel');

                            foreach ($infoArray as $name) {
                                print '<p> El nombre es: <b>' . $name . '</b></p></br>';
                            }

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