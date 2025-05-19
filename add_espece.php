<?php

// Importer les fichiers nécessaires
require_once 'connexion.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire et nettoyer les entrées : par exemple avec strip_tags())
    $nom_espece = strip_tags($_POST['nom_espece']);
    $type_espece = strip_tags($_POST['type_espece']);
    $poids_moyen = isset($_POST['poids_moyen']) ? strip_tags($_POST['poids_moyen']) : null;
    $longueur_moyenne = isset($_POST['longueur_moyenne']) ? strip_tags($_POST['longueur_moyenne']) : null;
    $description_espece = strip_tags($_POST['description_espece']);
    $img_espece = strip_tags($_POST['img_espece']);
    $periode = strip_tags($_POST['id_periode']);
    $regime = strip_tags($_POST['regime_alimentaire']);

    // Préparer la requête SQL pour l'insertion
    $sql = "INSERT INTO espece (nom_espece, type_espece, poids_moyen, longueur_moyenne, description_espece, img_espece, id_periode, id_regime) 
            VALUES (:nom_espece, :type_espece, :poids_moyen, :longueur_moyenne, :description_espece, :img_espece, :id_periode, :id_regime)";

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
    $stmt->bindParam(':id_regime', $regime);

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