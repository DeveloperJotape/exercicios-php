<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "../layout/meta.php";
    ?>
    <title>Palíndromo</title>
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
                <h1><b>Palíndromo</b></h1>
                <div class="exercises mt-3 p-3">
                    <p><b>Descrição: </b>Desenvolva um programa em PHP que verifique se uma palavra ou frase
                        fornecida pelo usuário é um palíndromo. Um palíndromo é uma palavra, frase,
                        número ou qualquer outra sequência de unidades que tenha a propriedade de poder ser lida tanto da
                        direita para a esquerda quanto da esquerda para a direita, desconsiderando os espaços e diferenciação
                        entre maiúsculas e minúsculas.</p>
                </div>

                <div class="container-fluid p-3">
                    <div class="row">
                        <div class="col col-9 col-md-3 mt-4 me-4 p-3">

                            <form action="palindromo.php" method="post">
                                <label for="palindromo">
                                    <p><b>Digite uma palavra ou frase</b></p>
                                </label>
                                <div>
                                    <input type="text" class="form-control" name="palindromo" id="palindromo" required>
                                </div>
                                <div>
                                    <input type="submit" class="mt-2 btn btn-secondary" value="Enviar">
                                </div>
                            </form>

                        </div>
                        <div class="col col-9 col-md-6 mt-4 me-4 p-3">
                            <h2><b>Palindromo</b></h2>
                            <p>
                                <?php

                                if (isset($_POST['palindromo'])) {

                                    $text = strtolower($_POST['palindromo']);
                                    $noSpace = str_replace(" ", "", $text);
                                    $reverse = strrev($noSpace);
                                    if($noSpace == $reverse) {
                                        echo '<p>A palavra ou frase <b>' . $_POST['palindromo'] . '</b> é um palíndromo </p>';       
                                    }else{
                                        echo '<p>A palavra ou frase <b>' . $_POST['palindromo'] . '</b> não é um palíndromo </p>';        
                                        echo '<p>A palavra ou frase <b>' . $_POST['palindromo'] . '</b> ao contrario: '.$reverse.' </p>';        
                                    }

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