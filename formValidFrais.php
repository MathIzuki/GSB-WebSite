<?php
include('./inc/_inc_tools.php');
session_start();

?>

<html>

<head>
	<title>Validation des frais de visite</title>
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/validfrais.css">
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
				<a href="index.php" class="hover-underline-animation">ACCUEIL</a>
			</li>
			<li>
				<a href="formSaisieFrais.php" class=" actif">VALIDER FRAIS</a>
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





	<div style="text-align:center; align-content: center;">
		<form action="">
			<h1 class="validtitre"> VALIDATION DES FRAIS</h1>
			<div class="validationutilisateur">
				<h2>Validation des frais par visiteur</h2>
				<div class="selectionvisiteur">
					<p>Choisir le visiteur:
						<select name="visiteur" id="visiteur" style="padding: 4px; font-size:15px;">
							<?php require('inc/database/_inc_connect.php');
							//Requête SQL pour récupérer les données de la table
							$reqSQL = "SELECT * FROM utilisateurs";
							$stmt = $pdo->prepare($reqSQL);
							$stmt->execute();
							$result = $stmt->fetchAll();

							// Boucle à travers les résultats et génère les options dans la liste déroulante
							foreach ($result as $row) {
								$nom = $row["nom"]; // numéro de classe
								$id_visiteur = $row["id"]; // libellé de la classe
								echo "<option value='$id_visiteur'>$nom</option>";
							}
							?>
						</select>
					</p>
				</div>

				<p>Mois : <input type="text" size="12" name="periode" id="periode"></p>
			</div>
			<div class="fraisauforfait">
				<h2>Frais au forfait</h2>
				<table style="margin: auto;">
					<tr>
						<th>Repas midi</th>
						<th>Nuitee </th>
						<th>Etape</th>
						<th>Km </th>
						<th>Situation</th>
					</tr>
					<tr>
						<td width="80"><label size="3" name="repas" /><input type="text" size="3" name="repas" /></td>
						<td width="80"><label size="3" name="nuitee" /><input type="text" size="3" name="nuitee" /></td>
						<td width="80"> <label size="3" name="etape" /><input type="text" size="3" name="etape" /></td>
						<td width="80"> <label size="3" name="km" /><input type="text" size="3" name="km" /></td>
						<td width="80"> <label size="3" name="situation1" /><select size="3" name="situ1">
								<option value="E">Enregistré</option>
								<option value="V">Validé</option>
								<option value="R">Remboursé</option>
							</select></td>
					</tr>
				</table>
			</div>

			<div class="horsforfait">
				<h2>Hors forfait</h2>
				<table style="margin: auto;">
					<tr>
						<th>Date</th>
						<th>Libelle </th>
						<th>Montant</th>
						<th>Situation</th>
						<th>Date operation</th>
					</tr>
					<tr>
						<td width="100"><label size="12" name="hfDate1" /><input type="text" size="3" name="date"/></td>
						<td width="220"><label size="30" name="hfLib1" /><input type="text" size="3" name="libelle" size="12" /></td>
						<td width="90"><label size="10" name="hfMont1" /><input type="text" size="3" name="montant"/></td>
						<td width="80"> <label size="3" name="situation2" /><select size="3" name="situ2">
								<option value="E">Enregistré</option>
								<option value="V">Validé</option>
								<option value="R">Remboursé</option>
							</select></td>
						<td width="80"> <label size="3" name="hfDateOper1" /><input type="text" size="3" name="justificatif" /></td>
					</tr>
				</table>
			</div>
			<div class="justificatifs">
				<h2>Nombre Justificatifs</h2>
				<div class="titrejustificatifs">
					<p>Nb Justificatifs : </p>
					<input type="text" class="zone" size="4" name="hcMontant">
				</div>
			</div>
			<div class="boutonvalider">
				<input type="reset" value="EFFACER" />
				<input type="submit" value="ENVOYER" />
			</div>
		</form>
	</div>

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


<script language="javascript">
	function ajoutLigne(pNumero) { //ajoute une ligne de produits/qt� � la div "lignes"     
		//masque le bouton en cours
		document.getElementById("but" + pNumero).setAttribute("hidden", "true");
		pNumero++; //incr�mente le num�ro de ligne
		var laDiv = document.getElementById("lignes"); //r�cup�re l'objet DOM qui contient les donn�es
		var titre = document.createElement("label"); //cr�e un label
		laDiv.appendChild(titre); //l'ajoute � la DIV
		titre.setAttribute("class", "titre"); //d�finit les propri�t�s
		titre.innerHTML = "   " + pNumero + " : ";
		//zone our la date du frais
		var ladate = document.createElement("input");
		laDiv.appendChild(ladate);
		ladate.setAttribute("name", "FRA_AUT_DAT" + pNumero);
		ladate.setAttribute("size", "12");
		ladate.setAttribute("class", "zone");
		ladate.setAttribute("type", "text");
		//zone de saisie pour un nouveau libell�			
		var libelle = document.createElement("input");
		laDiv.appendChild(libelle);
		libelle.setAttribute("name", "FRA_AUT_LIB" + pNumero);
		libelle.setAttribute("size", "30");
		libelle.setAttribute("class", "zone");
		libelle.setAttribute("type", "text");
		//zone de saisie pour un nouveau montant		
		var mont = document.createElement("input");
		laDiv.appendChild(mont);
		mont.setAttribute("name", "FRA_AUT_MONT" + pNumero);
		mont.setAttribute("size", "3");
		mont.setAttribute("class", "zone");
		mont.setAttribute("type", "text");
		var bouton = document.createElement("input");
		laDiv.appendChild(bouton);
		//ajoute une gestion �venementielle en faisant �voluer le num�ro de la ligne
		bouton.setAttribute("onClick", "ajoutLigne(" + pNumero + ");");
		bouton.setAttribute("type", "button");
		bouton.setAttribute("value", "+");
		bouton.setAttribute("class", "zone");
		bouton.setAttribute("id", "but" + pNumero);
	}
</script>