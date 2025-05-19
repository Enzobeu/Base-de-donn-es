<?php
require_once 'connexion.php';
require 'functions.php';
//Appel de fonction pour récupérer la liste des dinosaures et autres espèces.
// ---------- Votre saisie --------------
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Dinoverse</title>
    <meta name="description" content="Découvrez notre sélection d'espèces animales">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="./css/style.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php include 'template/header.php'; ?>
    <?php include 'template/hero.php'; ?>
    </header>
    <main class="limitedWidthBlockContainer">
        <div class="limitedWidthBlock">
            <div class="titles text-center">
                <h1>DINOVERSE</h1>
                <h2>Plongez dans un monde fascinant d'espèces animales disparues.</h2>
            </div>
            <section class="items" id="items">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">                 
                    <?php
                     // boucle d'affichage
                     // -------- Votre saisie ------------
?>
                        <div class="col">
                            <div class="item-container">
                                <div class="item d-flex flex-column align-items-center text-center">
                                    <!-- Utilsez vos variables pour afficher les différents attributs de l'espèce -->
                                    <!-- <a href="detail.php?id=<?$votreVariableID?>" class="item__link"> -->
                                        <div class="item__info">
                                            <!-- <h3 class="item__title"><?= $leNomEspece ?></h3> -->
                                        </div>
                                        <div class="item__image-container">
                                            <!-- <img src="<?= $imageEspece ?>" alt="<?= $leNomEspece ?>" class="item__image"> -->
                                        </div>
                                        <div class="item__info">
                                            <p class="item__description">
                                                <!-- Type: <?= $typeEspece ?><br> -->
                                                <!-- Période: <?= $periodeEspece ?> -->
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- fin de boucle d'affichage -->
                    </div>
            </section>
        </div>
    </main>

</body>

</html>