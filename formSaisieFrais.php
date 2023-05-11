<?php
include('inc/_inc_tools.php');

session_start();
?>
<html>

<head>
	<title>Suivi des frais de visite</title>

	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/saisiefrais.css">
</head>

<body>
	<!-- Incorporation du header -->
	<?php
	if (isVisitor()) {
	?>
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
					<a href="formSaisieFrais.php" class="actif">GESTION FRAIS</a>
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



		<div style="text-align:center; align-content: center;">
			<div>
				<h1 class="saisiefrais">SAISIE DES FRAIS</h1>
			</div>
			<div name="bas">
				<form name="formSaisieFrais" method="post" action="enregSaisieFrais.php">
					<div class="saisieperiode" align="center">
						<h2> Saisie </h2>
						<table>
							<tr>
								<th>
									<label class="titre">PERIODE D'ENGAGEMENT :</label>
								</th>
								<th>
									<label>Mois (2 chiffres) : </label><input type="text" size="4" name="FRA_MOIS" maxlength="2" />
								</th>
							</tr>
							<tr>
								<th></th>
								<th>
									<label>&nbsp;Année (4 chiffres) : </label><input type="text" size="4" name="FRA_AN" maxlength="4"/>
								</th>
							</tr>
						</table>
						
						
						
					</div>
					<div class="fraisauforfait">
						<div>
							<h2>Frais au forfait</h2>
						</div>
						<label class="titre">Repas midi :</label><input type="text" size="2" name="FRA_REPAS" class="zone" />
						<label class="titre">Nuitées :</label><input type="text" size="2" name="FRA_NUIT" class="zone" />
						<label class="titre">Etape :</label><input type="text" size="5" name="FRA_ETAP" class="zone" />
						<label class="titre">Km :</label><input type="text" size="5" name="FRA_KM" class="zone" />
					</div>
					<div class="horsforfait">
						<div>
							<h2>Hors Forfait</h2>
						</div>
						<div class="contenuhorsforfait" align="center">
							<table name="tablehorsforfait">
								<tr>
									<th>
									</th>
									<th>
										<p>Date</p>
									</th>
									<th>
										<p>Libellé</p>
									</th>
									<th>
										<p>Montant</p>
									</th>
								</tr>
								<tr>
									<th>
										<label class="titre"> 1 : </label>
									</th>
									<th>
										<input type="text" size="12" name="FRA_AUT_DAT1" class="zone" />
									</th>
									<th>
										<input type="text" size="30" name="FRA_AUT_LIB1" class="zone" />
									</th>
									<th>
										<input class="zone" size="3" name="FRA_AUT_MONT1" type="text" />
									</th>
									<th>
										<input type="button" id="but1" value="+" onclick="ajoutLigne(1);" class="boutonajout" />
									</th>
								</tr>
							</table>
							
						</div>
			</div>
		</div>
							
		<div class="boutonvalider">
			<input class="zone" type="reset" />
			<input class="zone" type="submit" />
		</div>	
		</form>

		<?php
		include('inc/_inc_footer.php');
	} else {
		header('Location: index.php');
	} ?>

	<script>
		function ajoutLigne(index) {
  // Récupérer la référence de la table
  var table = document.getElementsByName('tablehorsforfait')[0];

  // Créer une nouvelle ligne
  var newRow = table.insertRow();

  // Insérer les cellules dans la nouvelle ligne
  var cell1 = newRow.insertCell();
  var cell2 = newRow.insertCell();
  var cell3 = newRow.insertCell();
  var cell4 = newRow.insertCell();
  var cell5 = newRow.insertCell();

  // Ajouter le contenu des cellules
  cell1.innerHTML = '<label class="titre">' + (index + 1) + ' :</label>';
  cell2.innerHTML = '<input type="text" size="12" name="FRA_AUT_DAT' + (index + 1) + '" class="zone" />';
  cell3.innerHTML = '<input type="text" size="30" name="FRA_AUT_LIB' + (index + 1) + '" class="zone" />';
  cell4.innerHTML = '<input class="zone" size="3" name="FRA_AUT_MONT' + (index + 1) + '" type="text" />';
  cell5.innerHTML = '<input type="button" id="but' + (index + 1) + '" value="+" onclick="ajoutLigne(' + (index + 1) + ');" class="boutonajout" />';

  // Enlever le bouton précédent
  var previousButton = document.getElementById('but' + index);
  if (previousButton) {
    previousButton.remove();
  }
}

	</script>
		</body>
</html>