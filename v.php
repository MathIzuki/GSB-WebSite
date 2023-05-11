<select name="classe">
    <?php
    // Connexion à la base de données en utilisant PDO
    $dsn = "mysql:host=localhost;dbname=classes";
    $user = "root";
    $password = "";
        $connexion = new PDO($dsn, $user, $password);
       
        // Requête SQL pour récupérer les données de la table "classe"
        $reqSQL = "SELECT * FROM lesclasses";
        $stmt = $connexion->prepare($reqSQL);
        $stmt->execute();
        $result = $stmt->fetchAll();
       
        // Boucle à travers les résultats et génère les options dans la liste déroulante
        foreach ($result as $row) {
            $num = $row["numclasse"]; // numéro de classe
            $lib = $row["libelleclasse"]; // libellé de la classe
            echo "<option value='$num'>$lib</option>";
        }
    ?>
</select>