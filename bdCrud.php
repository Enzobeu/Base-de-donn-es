<?php
//Définir les fichiers à importer
// require_once '';
// require '';
// Récupération des valeurs pour les listes déroulantes depuis les fonctions respectives
$especes = '';
$periodes = '';
$regimes = '';
$types = '';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Dinoverse - Database</title>
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
    <!-- Inclure le header -->
    <!-- </header> -->
    <h1 class="text-center">Gestion de la base de données : Dinoverse</h1>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4 text-center">Ajouter une nouvelle espèce</h2>
    <!-- Penser à définir l'action (quelle page assure le traitement du formulaire) et la méthode -->
                <form action="" method="">
                    <div class="mb-3">
                        <label for="nom_espece" class="form-label">Nom de l'espèce</label>
                        <input type="text" class="form-control" id="nom_espece" name="nom_espece" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_periode" class="form-label">Période</label>
                        <select class="form-select" id="id_periode" name="id_periode" required>
                            <option value="" disabled selected>Choisir la période</option>
    <!----------------- Boucle d'affichage des options pour la période dans le select ----------->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="type_espece" class="form-label">Type d'espèce</label>
                        <select class="form-select" id="type_espece" name="type_espece" required>
                            <option value="" disabled selected>Choisir le type d'espèce</option>
    <!----------------- Boucle d'affichage des options du type de l'espèce dans le select ----------->                                   
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="regime_alimentaire" class="form-label">Régime alimentaire</label>
                        <select class="form-select" id="regime_alimentaire" name="regime_alimentaire" required>
                            <option value="" disabled selected>Choisir le régime</option>
    <!----------------- Boucle d'affichage des options de régime alimentaire dans le select ----------->                         
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="poids_moyen" class="form-label">Poids moyen (en kg)</label>
                        <input type="number" class="form-control" id="poids_moyen" name="poids_moyen">
                    </div>
                    <div class="mb-3">
                        <label for="longueur_moyenne" class="form-label">Longueur moyenne (en m)</label>
                        <input type="number" class="form-control" id="longueur_moyenne" name="longueur_moyenne">
                    </div>
                    <div class="mb-3">
                        <label for="description_espece" class="form-label">Description</label>
                        <textarea class="form-control" id="description_espece" name="description_espece" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img_espece" class="form-label">URL de l'image</label>
                        <input type="url" class="form-control" id="img_espece" name="img_espece" required>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4 text-center">Supprimer une espèce</h2>
                <form id="deleteForm" action="delete_espece.php" method="POST">
                    <div class="mb-3">
                        <label for="select_espece" class="form-label">Sélectionner une espèce à supprimer :</label>
                        <select class="form-select" id="select_espece" name="id_espece" required>
                            <option value="" disabled selected>Choisir une espèce à supprimer</option>
    <!----------------- Boucle d'affichage des ids (comme otion.value) et des noms d'espèce dans le select ----------->   
                        </select>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <script>
       // Utilisez une fenêtre Confirm en JavaScript pour s'assurer de la suppression
       // Annuler la soumission du formulaire si l'utilisateur clique sur "Annuler"
                event.preventDefault(); // pour empêcher la soumission du formulare (à inclure dans une condition)
         
    </script>   
</body>
</html>