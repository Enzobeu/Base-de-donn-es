<?php

// Importer les fichiers nécessaires

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire et nettoyer les entrées : par exemple avec strip_tags())
    $nom_espece = "";
    $type_espece = "";
    $poids_moyen = isset($_POST['poids_moyen']) ? strip_tags($_POST['poids_moyen']) : null;
    $longueur_moyenne = "même principe que la ligne au dessus";
    $description_espece = "";
    $img_espece = "";
    $periode = "";
    $regime = "";

    // Préparer la requête SQL pour l'insertion
    $sql = "Réalisez la requête d'insertion en SQL";

    // Préparer la requête SQL avec PDO
    $stmt = $db->prepare($sql);

    // Liaison des paramètres de la requête
    $stmt->bindParam(':nom_espece', $nom_espece);
    $stmt->bindParam(':type_espece', $type_espece);
    $stmt->bindParam(':poids_moyen', $poids_moyen);
    $stmt->bindParam(':longueur_moyenne', $longueur_moyenne);
    $stmt->bindParam(':description_espece', $description_espece);
    $stmt->bindParam(':img_espece', $img_espece);
    $stmt->bindParam(':id_periode', $periode);
    $stmt->bindParam(':regime_alimentaire', $regime);

    // Exécuter la requête
    if ($stmt->execute()) {
        // Redirection vers la page d'accueil
        header('Location: index.php');
        exit;
    } else {
        // Gestion de l'erreur
        echo "Une erreur s'est produite lors de l'ajout de l'espèce.";
    }
}
