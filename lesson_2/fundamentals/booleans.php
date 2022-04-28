<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <title>Lesson 2 - Fundamentals (Booleans) </title>
</head>

<body>
    <main>
        <div id="custom-card" class="container px-4 py-5">
            <h2 class="pb-2 border-bottom">Lesson 2 - Fundamentals (Booleans) </h2>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <?php
                    /**
                     * @author Edenilson Pineda
                     * @version 1.0
                     * @see https://github.com/edenilsonpineda
                     */

                    $p = (bool) TRUE;
                    $q = (bool) FALSE;
                    echo 'Valor verdadero: '.$p.'<br>';
                    echo 'Valor falso: '. ($q ? 'true' : '0') .'<br>';
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="../../resources/js/bootstrap.bundle.min.js"></script>

</html>