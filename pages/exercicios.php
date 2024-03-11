<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "../layout/meta.php";
    ?>
    <title>Exercícios</title>
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
                <h1>Exercícios</h1>
                <div class="exercises mt-3 ms-3 p-4">
                    <h3><b>Lista 1</b></h3>
                    <h5>
                        <ul class="list-exercises list-unstyled">
                            <li class="mt-3 py-2 py-sm-0 nav-item">
                                <a href="soma.php" class="text-decoration-none text-color-primary"><i class="fs-5 fa-solid fa-circle-plus"></i> <span class="fs-5 ms-2">Soma dos números</span></a>
                            </li>
                            <li class="mt-3">
                                <a href="fatorial.php" class="text-decoration-none text-color-primary"><i class="fa-solid fa-circle-exclamation"></i> <span class="fs-5 ms-2"> Fatorial</span></a>
                            </li>
                            <li class="mt-3">
                                <a href="palindromo.php" class="text-decoration-none text-color-primary"><i class="fa-solid fa-circle-left"></i> <span class="fs-5 ms-2"> Palíndromo</span></a>
                            </li>
                        </ul>
                    </h5>
                </div>
            </section>
        </div>
    </div>

</body>

</html>