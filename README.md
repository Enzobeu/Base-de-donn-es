# 🦖 Dinoverse

> Un mini-projet CRUD en PHP / MySQL réalisé dans le cadre du module R209 – BUT Réseaux & Télécom.

## 🚀 Objectifs pédagogiques

- Utiliser PDO pour communiquer avec une base MySQL
- Gérer des formulaires HTML en PHP
- Implémenter les opérations CRUD (Create, Read, Update, Delete)
- Afficher dynamiquement les données issues d'une base
- (Optionnel) Utiliser un framework CSS comme Bootstrap

---

## 🛠️ Technologies utilisées

- **PHP** (programmation serveur)
- **MySQL** (base de données relationnelle)
- **HTML / CSS** (présentation)
- **JavaScript** (comportement dynamique)
- **Bootstrap 5** (optionnel)
- **XAMPP** (environnement local Apache + MySQL)
- **Visual Studio Code** (éditeur de code)
- **Git / GitHub** (versionnage)

---

## 🧬 Structure du projet

```bash
📁 dinoverse/
├── add_espece.php          # Traitement de l'ajout d'une espèce
├── bdCrud.php              # Page avec les formulaires d'ajout/suppression
├── connexion.php           # Connexion PDO à la base MySQL
├── delete_espece.php       # Traitement de la suppression d'une espèce
├── detail.php              # Page de détail d'une espèce avec ses fossiles
├── functions.php           # Fonctions d'accès aux données
├── header.php              # En-tête HTML commun
├── hero.php                # Image d'en-tête (bannière)
├── index.php               # Page d'accueil avec la liste des espèces
├── style.css               # Fichier de style personnalisé
└── .env                    # Fichier de configuration de la BDD (non versionné)
