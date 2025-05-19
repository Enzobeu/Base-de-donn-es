<?php
require_once 'connexion.php';
require 'functions.php';

// Vérification si le paramètre d'URL "id" est présent
if(isset($_GET['id'])) {
    // Récupération de l'identifiant de l'espèce depuis l'URL
    $id_espece = intval($_GET['id']);

    // Appel de la fonction pour récupérer les détails de l'espèce
    $detail_espece = getDetailEspece($db, $id_espece);

    // Vérification si l'espèce existe
    if($detail_espece) {
        // affectation des valeurs des attributs de l'espèce à des variables à destination de l'affichage
        $nom_espece = $detail_espece['nom_espece'];
        $type_espece = $detail_espece['type_espece'];
        $periode_espece = $detail_espece['nom_periode_espece'];
        $regime = $detail_espece['nom_regime'];
        $description_espece = $detail_espece['description_espece'];
        $taille = $detail_espece['taille_metres'];
        $poids = $detail_espece['poids'];
        $img_espece = $detail_espece['img_espece'];
        
        // Récupération des fossiles associés à cette espèce
        $fossiles = getFossile($db, $id_espece);
    } else {
        // Si l'espèce n'existe pas, vous pouvez gérer cette situation (par exemple, afficher un message d'erreur ou rediriger l'utilisateur)
        echo "L'animal que vous avez demandé n'existe pas.";
        exit; // Arrête l'exécution du script pour éviter d'afficher le reste de la page
    }
} else {
    // Si le paramètre d'URL "id" n'est pas présent, vous pouvez gérer cette situation (par exemple, afficher un message d'erreur ou rediriger l'utilisateur)
    echo "Identifiant d'espèce non spécifié.";
    exit; // Arrête l'exécution du script pour éviter d'afficher le reste de la page
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Dinoverse - <?= $nom_espece ?></title>
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
    </header>
    <!-- Votre contenu HTML pour la page de détails va ici -->
    <h1 class="text-center fs-1 text text-uppercase"> <?= $nom_espece ?></h1>
    <div class="item-container-detail text-center">
        <div class="item__info">
            <p class="fs-1 text text-uppercase"> <?= $type_espece ?></p>
            <p class="fs-3 text">Période : <?= $periode_espece ?></p>
            <p class="fs-3 text">Régime alimentaire : <?= $regime ?></p>
            <p class="fs-3 text">Description : <?= $description_espece ?></p>
            <p class="fs-3 text">Taille : <?= $taille ?> - Poids : <?= $poids ?></p>
        </div>
        <div class="item__image-container">
        <img class="item__image-detail" src="<?= $img_espece ?>" alt="<?= $nom_espece ?>">
        </div>
    </div>

    <!-- Accordéon pour afficher le contenu additionnel -->
<div class="accordion mt-4" id="accordion">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button fs-4 text" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Informations supplémentaires
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
            <div class="accordion-body">
                <?php
                // Récupérer les fossiles de l'espèce affichée dans une variable $fossiles
                
                // Vérifier si des fossiles sont disponibles
                if($fossiles !== false) {
                    // Afficher chaque fossile
                    $i = 1; // itérateur pour numéroter les fossiles
                    foreach($fossiles as $fossile) {
                        // Formater la date avec la fonction de formatage
                        $date_fr = formatMoisFrancais($fossile['date_decouverte']);
                        
                        // Afficher les informations du fossile
                        echo '<h5>Informations sur le fossile de ' . $nom_espece . ' #' . $i . '</h5>';
                        echo '<p class="ms-3">Date de découverte : ' . $date_fr . '</p>';
                        echo '<p class="ms-3">Lieu de découverte : ' . $fossile['lieu_decouverte'] . '</p>';
                        echo '<p class="ms-3">Description : ' . $fossile['description_fossile'] . '</p>';
                        echo '<hr>';
                        $i++;
                    }
                } else {
                    // Aucun fossile n'est disponible
                    echo "Aucun fossile n'est disponible pour cette espèce.";
                }
                ?>
            </div>
        </div>
    </div>
</div>

    <!-- Liens vers les scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>