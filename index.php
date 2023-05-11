<?php
//Importation des outils
require('inc/_inc_tools.php');

//Départ de la connexion
session_start();

// Obtenir le nom d'utilisateur connecté
$nom = getNom();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">

    <!-- Chemin vers CSS -->
    <link rel="stylesheet" href="css/switchmode.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Icon de la page -->
    <link rel="shortcut icon" href="images/logo/logo-gsb.png" type="image/x-icon">

    <!-- Titre de la page -->
    <title>GSB - Accueil</title>
</head>

<body>
    <!-- Incorporation du header -->
    <?php if (isComptable()) { ?>
        <nav id="navbar">
            <div class="logo">
                <!-- Logo de la barre de navigation -->
                <img src="images/logo/logo-gsb.png" alt="Logo" style="width: 110px;">
            </div>
            <!-- Onglets de la barre de navigation -->
            <ul class="nav-links">
                <li>
                    <a href="index.php" class="actif">ACCUEIL</a>
                </li>
                <li>
                    <a href="formValidFrais.php" class="hover-underline-animation">VALIDER FRAIS</a>
                </li>
                <li>
                    <a href="#" class="hover-underline-animation">SUIVRE PAIEMENT</a>
                </li>

                <li>
                    <?php
                    if (isConnect()) {
                    ?>
                        <a href="acc/logout.php"><img src="images/access/deconnexion.png" style="width: 26px"></a>
                    <?php } else {
                    ?>
                        <a href="acc/member.php"><img src="images/access/connexion.png" style="width: 26px"></a>
                    <?php } ?>
                </li>
            </ul>
            <!-- Menu Hamburger (responsive) -->
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>

        <div class="background-image">
            <!-- Image de fond -->
        </div>
        <div class="text-over-image">
            <h1>GSB</h1>
            <p>Bonjour <?php echo $nom ?></p>
        </div>


        <script src="js/switchmode.js"></script>
        <script src="js/navbarScript.js"></script>

    <?php
    } elseif (isVisitor()) {
    ?>
        <nav id="navbar">
            <div class="logo">
                <!-- Logo de la barre de navigation -->
                <img src="images/logo/logo-gsb.png" alt="Logo" style="width: 110px;">
            </div>
            <!-- Onglets de la barre de navigation -->
            <ul class="nav-links">
                <li>
                    <a href="index.php" class="actif">ACCUEIL</a>
                </li>
                <li>
                    <a href="formSaisieFrais.php" class="hover-underline-animation">GESTION FRAIS</a>
                </li>
                <li>
                    <a href="formConsultFrais.php" class="hover-underline-animation">CONSULTER FRAIS</a>
                </li>

                <li>
                    <?php
                    if (isConnect()) {
                    ?>
                        <a href="acc/logout.php"><img src="images/access/deconnexion.png" style="width: 26px"></a>
                    <?php } else {
                    ?>
                        <a href="acc/member.php"><img src="images/access/connexion.png" style="width: 26px"></a>
                    <?php } ?>
                </li>
            </ul>
            <!-- Menu Hamburger (responsive) -->
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        <div class="background-image">
            <!-- Image de fond -->
        </div>
        <div class="text-over-image">
            <h1>GSB</h1>
            <p>Bonjour <?php echo $nom ?></p>
        </div>

        <script src="js/switchmode.js"></script>
        <script src="js/navbarScript.js"></script>


    <?php

    } else {
        header('Location: acc/member.php');
    }
    ?>
    <?php
        include('inc/_inc_footer.php');

    ?>
</body>

</html>