<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "../layout/meta.php";
    ?>
    <title>Fatorial</title>
</head>

<body>



    <div class="container-fluid">
        <div class="row flex-nowrap">

            <!-- MENU LATERAL -->
            <?php
            include "../layout/sidebar.php";
            ?>

            <!--CONTEUDO-->
            <section class="content p-3 mt-2">
                <h1><b>Fatorial</b></h1>
                <div class="exercises mt-3 p-3">
                    <p><b>Descrição: </b>Crie um programa em PHP que receba um número inteiro positivo N como entrada e calcule o fatorial desse número. O fatorial de um número é o produto de todos os inteiros positivos menores ou iguais a N.</p>
                </div>

                <div class="container-fluid p-3">
                    <div class="row">
                        <div class="col col-9 col-md-3 mt-4 me-4 p-3">

                            <form action="fatorial.php" method="post">
                                <label for="fat">
                                    <p><b>Digite um número</b></p>
                                </label>
                                <div>
                                    <input type="number" class="form-control" name="fat" id="fat" required>
                                </div>
                                <div>
                                    <input type="submit" class="mt-2 btn btn-secondary" value="Enviar">
                                </div>
                            </form>

                        </div>
                        <div class="col col-9 col-md-6 mt-4 me-4 p-3">
                            <h2><b>Fatorial</b></h2>
                            <p>
                                <?php

                                if (isset($_POST['fat'])) {
                                    $fat = $_POST['fat'];
                                    $fatorial = $_POST['fat'];
                                    $calc = 1;
                                    while ($fat > 1) {
                                        $calc *= $fat;
                                        $fat--;
                                    }
                                    echo '<p>O fatorial de <b>' . $fatorial . '</b> é <b>' . $calc . '</b></p>';
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</body>

</html>