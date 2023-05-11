<title>Validation...</title>
<?php
require('../inc/database/_inc_connect.php');

// Traitement du formulaire de connexion
if (isset($_POST['login']) && isset($_POST['mdp'])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    // Récupération de l'utilisateur depuis la base de donnée
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE login = ?");
    $stmt->execute([$login]);
    $utilisateur = $stmt->fetch();

    // Vérification du mot de passe
    if ($utilisateur && $mdp) {
        // Authentification réussie, enregistrement des données de l'utilisateur dans la session
        session_start();
        $_SESSION['utilisateur'] = $utilisateur['id'];
        $_SESSION['login'] = $utilisateur['login'];
        header("Location: ../");
        exit; // Redirection vers index.php après 2 secondes
    } else {
        // Mauvais nom d'utilisateur ou mot de passe
        echo "Nom d'utilisateur ou mot de passe incorrect.";
        header("refresh:2;url=./member.php#error");
    }
}
?>