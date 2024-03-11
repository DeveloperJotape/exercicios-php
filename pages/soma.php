<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "../layout/meta.php";
    ?>
    <title>Soma</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">

            <!-- MENU LATERAL -->
            <?php
            include "../layout/sidebar.php";
            ?>

            <!-- CONTEUDO -->
            <section class="content p-3 mt-2">
                <h1><b>Soma dos Números</b></h1>
                <div class="exercises mt-3 p-3">
                    <p><b>Descrição: </b>Escreva um programa em PHP que receba um número inteiro positivo N como entrada e calcule a soma dos números de 1 até N.</p>
                </div>

                <div class="container-fluid p-3">
                    <div class="row">
                        <div class="col col-9 col-md-3 mt-4 me-4 p-3">

                            <form action="soma.php" method="post">
                                <label for="num">
                                    <p><b>Digite um número</b></p>
                                </label>
                                <div>
                                    <input type="number" class="form-control" name="num" id="num" required>
                                </div>
                                <div>
                                    <input type="submit" class="mt-2 btn btn-secondary" value="Enviar">
                                </div>
                            </form>

                        </div>
                        <div class="col col-9 col-md-6 mt-4 me-4 p-3">
                            <h2><b>Soma dos números</b></h2>
                            <p>
                                <?php

                                if (isset($_POST['num'])) {
                                    $num = $_POST['num'];
                                    $i = 1;
                                    $soma = 0;
                                    while ($i < $num) {
                                        echo $i . ' ';
                                        $soma += $i;
                                        $i += 1;
                                    }
                                    echo '<p>A soma dos números é igual a <b>'.$soma.'</b></p>';
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