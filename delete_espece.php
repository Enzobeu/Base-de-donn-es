<?php

// Importer les fichiers nécessaires

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire et nettoyer les entrées
    $id_espece = strip_tags($_POST['id_espece']);


    // Préparer la requête SQL pour la suppression en utilisant un paramètre nommé
    $sql = "DELETE FROM espece WHERE id_espece = :id_espece";

    // Préparer la requête SQL avec PDO
    $stmt = $db->prepare($sql);

    // Liaison des paramètres de la requête
    $stmt->bindParam(':id_espece', $id_espece, PDO::PARAM_INT);

    // Exécuter la requête
    if ($stmt->execute()) {
        // Redirection vers la page d'accueil
        header('Location: index.php');
        exit;
    } else {
        // Gestion de l'erreur
        echo "Une erreur s'est produite lors de la suppression de l'espèce.";
    }

}
