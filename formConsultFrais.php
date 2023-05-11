<?php
include('inc/_inc_tools.php');

session_start();
?>
<html>

<head>
	<title>Suivi des frais de visite</title>

	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/consultFrais.css">
</head>

<body>
	<!-- Incorporation du header -->
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
                    <a href="formSaisieFrais.php" class="hover-underline-animation">GESTION FRAIS</a>
                </li>
                <li>
                    <a href="formConsultFrais.php" class="actif">CONSULTER FRAIS</a>
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
		<div class="titrecentree ">
			<h1 class="consulttitre">SUIVI DE REMBOURSEMENT DES FRAIS</h1>
		</div>

		<form action="">
			<div class="periode">
				<h2>Periode</h2>
				<p>Mois/Annee : <input type="text" size="12" name="periode" id="periode"></p>
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
						<th>Date operation</th>
						<th>Remboursement</th>
					</tr>
					<tr>
						<td width="80"><label size="3" name="repas" /></td>
						<td width="80"><label size="3" name="nuitee" /></td>
						<td width="80"> <label size="3" name="etape" /></td>
						<td width="80"> <label size="3" name="km" /></td>
						<td width="80"> <label size="3" name="situation" /></td>
						<td width="80"> <label size="3" name="dateOper" /></td>
						<td width="80"> <label size="3" name="dateOper" /></td>
					</tr>
				</table>
			</div>

			<div class="horsforfait">
				<h2>Hors forfait</h2>
				<div align="center">
				<table >
					<tr>
						<th>Date</th>
						<th>Libelle </th>
						<th>Montant</th>
						<th>Situation</th>
						<th>Date operation</th>
					</tr>
					<tr>
						<td width="100"><label size="12" name="hfDate1" /></td>
						<td width="220"><label size="30" name="hfLib1" /></td>
						<td width="90"><label size="10" name="hfMont1" /></td>
						<td width="80"> <label size="3" name="hfSitu1" /></td>
						<td width="80"> <label size="3" name="hfDateOper1" /></td>
					</tr>
				</table>
				</div>
				
			</div>
			<div class="justificatifs">
				<h2>Nombre Justificatifs</h2>
				<div class="titrejustificatifs">
					<p>Nb Justificatifs : </p>
					<input type="text" class="zone" size="4" name="hcMontant">
				</div>
			</div>
		</form>
	</div>
	<?php
	include('inc/_inc_footer.php');
	?>
</body>

</html>