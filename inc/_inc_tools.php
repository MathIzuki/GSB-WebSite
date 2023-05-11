<?php
// Fonction pour vérifier si l'utilisateur a le rôle de "comptable"
function isComptable() {
    // Vérifie si l'utilisateur est connecté
    if (isset($_SESSION['utilisateur'])) {
        // Récupère le rôle de l'utilisateur depuis la base de données
        require('inc/database/_inc_connect.php');
        $stmt = $pdo->prepare("SELECT role_id FROM utilisateurs WHERE id = ?");
        $stmt->execute([$_SESSION['utilisateur']]);
        $utilisateur = $stmt->fetch();
        // Vérifie si l'utilisateur a le rôle de comptable
        if ($utilisateur['role_id'] == 1) {
            return true;
        }
    }
    // Si l'utilisateur n'est pas connecté ou n'a pas le rôle de comptable, retourne false
    return false;
}

// Fonction pour vérifier si l'utilisateur a le rôle de "visiteur"
function isVisitor() {
    // Vérifie si l'utilisateur est connecté
    if (isset($_SESSION['utilisateur'])) {
        // Récupère le rôle de l'utilisateur depuis la base de données
        require('inc/database/_inc_connect.php');
        $stmt = $pdo->prepare("SELECT role_id FROM utilisateurs WHERE id = ?");
        $stmt->execute([$_SESSION['utilisateur']]);
        $utilisateur = $stmt->fetch();
        // Vérifie si l'utilisateur a le rôle de visiteur
        if ($utilisateur['role_id'] == 2) {
            return true;
        }
    }
    // Si l'utilisateur n'est pas connecté ou n'a pas le rôle de visiteur, retourne false
    return false;
}
function isConnect() {
    // Vérifie si l'utilisateur est connecté
    if (isset($_SESSION['utilisateur'])) {
        return true;
    } else {
        return false;
    }
}

// Fonction pour obtenir le nom d'utilisateur à partir de la session
function getNom() {
    // Assurez-vous que la session est démarrée
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Vérifie si le nom d'utilisateur est stocké dans la session
    if (isset($_SESSION['utilisateur'])) {
        require('inc/database/_inc_connect.php');
        $stmt = $pdo->prepare("SELECT nom FROM utilisateurs WHERE id = ?");
        $stmt->execute([$_SESSION['utilisateur']]);
        $utilisateur = $stmt->fetch();
        if ($utilisateur) {
            return $utilisateur['nom'];
        } else {
            return ""; // Retourne une chaîne vide si le nom d'utilisateur n'est pas trouvé dans la base de données
        }
    } else {
        return ""; // Retourne une chaîne vide si le nom d'utilisateur n'est pas défini dans la session
    }
}
