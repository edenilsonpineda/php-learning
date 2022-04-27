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
            <h2 class="pb-2 border-bottom">Lesson 2 - Fundamentals (Booleans) | Tabla de verdad </h2>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>p</th>
                                    <th>q</th>
                                    <th>P ^ Q</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                /**
                                 * @author Edenilson Pineda
                                 * @version 1.0
                                 * @see https://github.com/edenilsonpineda
                                 */

                                $p = (boolean) TRUE;
                                $q = (boolean) FALSE;
                                $intersection = (boolean) FALSE;
                                echo '<tr>';
                                echo '<td>'.$p.'</td>';
                                echo '<td>'.$q.'</td>';
                                echo '<td>'.$intersection.'</td>';
                                echo '</tr>';
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="../../resources/js/bootstrap.bundle.min.js"></script>

</html>