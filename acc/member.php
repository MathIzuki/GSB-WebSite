<?php
include('../inc/_inc_tools.php');
session_start();

if (isConnect()){
    header('Location: ../');
    exit;
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/account/member2.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>GSB - Membre</title>
</head>

<body>
    <div class="allcontainer">
        <div class="form-container">
            <h1>Connexion</h1>
            <form action="login.php" method="post">
                <div class="nomutilisateur">
                    <label for="username">Nom d'utilisateur :</label>
                    <input type="text" id="username" name="login" required>
                </div>

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="mdp" required>

                <div class="remember-me">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Se rappeler de moi</label>
                </div>

                <input type="submit" value="Se connecter">

                </select>

            </form>
        </div>
    </div>
    <!-- Bouton pour changer de thème -->
    <div class="switch-mode" onclick="switchMode()"><img src=""></div>
    <script src="../js/member.js"></script>
    <script src="../js/navbarScript.js"></script>
    <?php
    include('../inc/_inc_footer.php');
    ?>
</body>

</html>

<?php } ?>