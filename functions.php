<?php
/**
 * Récupère les noms de toutes les périodes depuis la base de données.
 *
 * @param PDO $db Connexion à la base de données.
 *
 * @return array Tableau associatif contenant les noms de toutes les périodes.
 */
function getPeriode($db)
{
    // Préparation de la requête SQL
    $sql = "SELECT 
periode.id_periode,
periode.nom_periode
FROM 
periode ORDER BY nom_periode ASC";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $periodes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $periodes;
}

/**
 * Récupère les noms de toutes les espèces depuis la base de données.
 *
 * @param PDO $db Connexion à la base de données.
 *
 * @return array Tableau associatif contenant les ids et les noms de toutes les espèces.
 */
function getEspeceName($db)
{
$sql = "SELECT 
        espece.id_espece,
        espece.nom_espece
    FROM 
        espece
    ORDER BY 
        nom_espece ASC";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $especes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $especes;
}

/**
 * Récupère la liste des animaux préhistoriques depuis la base de données.
 *
 * @param PDO $db La connexion à la base de données.
 * @return array Un tableau associatif contenant les informations des espèces.
 */
function getEspece($db)
{
    $sql = "SELECT 
espece.id_espece,
espece.nom_espece,
espece.type_espece,
espece.img_espece,
periode.nom_periode AS nom_periode_espece
FROM 
espece
JOIN 
periode ON espece.id_periode = periode.id_periode;";
    $stmt = $db->prepare($sql);

    // Exécution de la requête
    $stmt->execute();

    // Récupération des résultats sous forme de tableau associatif
    $especes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $especes;
}

/**
 * Récupère les noms de tous les régimes alimentaires depuis la base de données.
 *
 * @param PDO $db Connexion à la base de données.
 *
 * @return array Tableau associatif contenant les noms de tous les régimes alimentaires.
 */
function getRegime($db)
{
    $sql = "SELECT 
        regime_alimentaire.id_regime,
        regime_alimentaire.type_regime
    FROM 
        regime_alimentaire
    ORDER BY 
        type_regime ASC";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $regimes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $regimes;
}

/**
 * Récupère toutes les valeurs du camp type_espece (enum) de la table espece depuis la base de données.
 *
 * @param PDO $db Connexion à la base de données.
 *
 * @return array Tableau associatif contenant les valeurs du champ type_espece.
 */
function getTypeEspece($db)
{

    $sql = "SELECT 
    SUBSTRING(
        COLUMN_TYPE,
        LOCATE('(', COLUMN_TYPE) + 1,
        LENGTH(COLUMN_TYPE) - LOCATE('(', COLUMN_TYPE) - 2
    ) AS enum_values
FROM 
    INFORMATION_SCHEMA.COLUMNS
WHERE 
    TABLE_NAME = 'espece' AND
    COLUMN_NAME = 'type_espece'";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    // Récupération des valeurs de l'ENUM
    $types = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $types = explode(",", str_replace("'", "", $row['enum_values']));
    }
    // Retour des valeurs
    return $types;
}

/**
 * Récupère les détails d'une espèce à partir de son identifiant.
 *
 * @param PDO $db La connexion à la base de données.
 * @param int $id_espece L'identifiant de l'espèce à récupérer.
 *
 * @return array|false Un tableau associatif contenant les détails de l'espèce, ou false si aucune espèce n'a été trouvée.
 */
function getDetailEspece($db, $id_espece)
{
    // Préparation de la requête SQL
    $sql = "SELECT 
    espece.id_espece,
    espece.nom_espece,
    espece.poids_moyen,
    espece.longueur_moyenne,
    CONCAT(espece.longueur_moyenne, ' m') AS taille_metres, 
    CONCAT(espece.poids_moyen, ' kg') AS poids,
    espece.type_espece,
    espece.description_espece,
    espece.img_espece,
    espece.id_regime,
    periode.nom_periode AS nom_periode_espece,
    regime_alimentaire.type_regime AS nom_regime
    FROM 
        espece
    JOIN 
        periode ON espece.id_periode = periode.id_periode
    
    JOIN
        regime_alimentaire ON espece.id_regime = regime_alimentaire.id_regime
    WHERE 
        espece.id_espece = :id_espece";

    $statement = $db->prepare($sql);
    $statement->bindParam(':id_espece', $id_espece, PDO::PARAM_INT);
    $statement->execute();

    $detail_espece = $statement->fetch(PDO::FETCH_ASSOC);
    return $detail_espece;
}

/**
 * Récupère les détails d'une espèce à partir de son identifiant.
 *
 * @param PDO $db La connexion à la base de données.
 * @param int $id_espece L'identifiant de l'espèce à utiliser.
 *
 * @return array|false Un tableau associatif contenant les inforùations des fossiles s'ils existent
 */
function getFossile($db, $id_espece)
{
    // Préparation de la requête SQL
    $sql = "SELECT * FROM fossile f
    INNER JOIN espece e ON f.id_espece = e.id_espece
    WHERE e.id_espece = :id_espece";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id_espece', $id_espece, PDO::PARAM_INT);
    $stmt->execute();
    $fossiles = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Vérifier s'il y a des fossiles pour l'espèce donnée
    if(empty($fossiles)) {
        // Aucun fossile trouvé, retourner false
        return false;
    } else {
        // Des fossiles ont été trouvés, retourner les résultats
        return $fossiles;
    }
}

/**
 * Supprime une espèce de la table espece.
 *
 * @param PDO $db La connexion PDO à la base de données.
 * @param int $id_espece L'identifiant de l'espèce à supprimer.
 * @return bool Retourne true si l'espèce est supprimée avec succès, sinon false.
 */
function deleteEspeceById($db, $id_espece)
{
    // Préparation de la requête de suppression
    $sql = "DELETE FROM espece WHERE id_espece = :id_espece";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id_espece', $id_espece, PDO::PARAM_INT);
    if ($stmt->execute()) {
        return true;
    } else {
        // La suppression a échoué
        return false;
    }
}

/**
 * Convertit la date de découverte en format français avec le nom du mois.
 *
 * @param string $date_decouverte La date de découverte au format 'Y-m-d'.
 * @return string La date formatée avec le nom du mois en français, ou la date de découverte originale si le mois n'est pas trouvé.
 */
function formatMoisFrancais($date_decouverte)
{
    // Convertir la date de découverte en un objet DateTime
    $date_decouverte_obj = new DateTime($date_decouverte);
    // Récupérer le nom du mois en anglais à partir de la date de découverte
    $mois_anglais = $date_decouverte_obj->format('F');

    // Tableau associatif pour traduire les noms des mois de l'anglais vers le français
    $mois_fr = array(
        'January' => 'janvier',
        'February' => 'février',
        'March' => 'mars',
        'April' => 'avril',
        'May' => 'mai',
        'June' => 'juin',
        'July' => 'juillet',
        'August' => 'août',
        'September' => 'septembre',
        'October' => 'octobre',
        'November' => 'novembre',
        'December' => 'décembre'
    );

    // Vérifier si le mois anglais existe dans le tableau de conversion
    if (array_key_exists($mois_anglais, $mois_fr)) {
        // Remplacer le nom du mois anglais par le nom du mois français
        $mois_fr_format = $mois_fr[$mois_anglais];
        // Formater la date avec le mois en français
        $date_decouverte_fr = $date_decouverte_obj->format('d ') . $mois_fr_format . $date_decouverte_obj->format(' Y');
        return $date_decouverte_fr;
    } else {
        // Si le mois anglais n'est pas trouvé, retourner la date de découverte telle quelle
        return $date_decouverte;
    }
}
