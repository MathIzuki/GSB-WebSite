<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Gestion des frais de visite</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/navbar.css">
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
				<a href="#" class="hover-underline-animation">ACCUEIL</a>
			</li>
			<li>
				<a href="#" class="actif">SUIVI</a>
			</li>
			<li>
				<a href="#" class="hover-underline-animation">RENSEIGNEMENT</a>
			</li>
			<li>
				<a href="acc/member.php"><img src="images/access/connexion.png" style="width: 26px"></a>
			</li>
		</ul>
		<!-- Menu Hamburger (responsive) -->
		<div class="burger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
	</nav>
  <div class="container">
    <header>
      <h1>Gestion des Frais</h1>
    </header>
    <main>
      <form name="formSaisieFrais" method="post" action="enregSaisieFrais.php">
        <section>
          <h2>Saisie</h2>
          <div class="form-group">
            <label class="label-title">PERIODE D'ENGAGEMENT :</label>
            <div class="input-group">
              <label>Mois (2 chiffres) : </label>
              <input type="text" size="4" name="FRA_MOIS" class="input-zone">
              <label>&nbsp;Année (4 chiffres) : </label>
              <input type="text" size="4" name="FRA_AN" class="input-zone">
            </div>
          </div>
        </section>
        <section>
          <h2>Frais au forfait</h2>
          <div class="form-group">
            <label class="label-title">Repas midi :</label>
            <div class="input-group">
              <input type="text" size="2" name="FRA_REPAS" class="input-zone">
            </div>
          </div>
          <div class="form-group">
            <label class="label-title">Nuitées :</label>
            <div class="input-group">
              <input type="text" size="2" name="FRA_NUIT" class="input-zone">
            </div>
          </div>
          <div class="form-group">
            <label class="label-title">Etape :</label>
            <div class="input-group">
              <input type="text" size="5" name="FRA_ETAP" class="input-zone">
            </div>
          </div>
          <div class="form-group">
            <label class="label-title">Km :</label>
            <div class="input-group">
              <input type="text" size="5" name="FRA_KM" class="input-zone">
            </div>
          </div>
        </section>
        <section>
          <h2>Hors Forfait</h2>
          <div class="table-container">
            <table>
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Libellé</th>
                  <th>Montant</th>
                </tr>
              </thead>
              <tbody id="lignes">
                <tr>
                  <td>
                    <input type="text" name="FRA_AUT_DAT1" size="12" class="input-zone">
                  </td>
                  <td>
                    <input type="text" name="FRA_AUT_LIB1" size="30" class="input-zone">
                  </td>
                  <td>
                    <input type="text" name="FRA_AUT_MONT1" size="3" class="input-zone">
                  </td>
                  <td>
                    <input type="button" value="+" onclick="ajoutLigne(1)" class="add-button">
                  </td>
                </tr>
				            <tr>
              <td>
                <input type="text" name="FRA_AUT_DAT2" size="12" class="input-zone">
              </td>
              <td>
                <input type="text" name="FRA_AUT_LIB2" size="30" class="input-zone">
              </td>
              <td>
                <input type="text" name="FRA_AUT_MONT2" size="3" class="input-zone">
              </td>
              <td>
                <input type="button" value="+" onclick="ajoutLigne(2)" class="add-button">
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" name="FRA_AUT_DAT3" size="12" class="input-zone">
              </td>
              <td>
                <input type="text" name="FRA_AUT_LIB3" size="30" class="input-zone">
              </td>
              <td>
                <input type="text" name="FRA_AUT_MONT3" size="3" class="input-zone">
              </td>
              <td>
                <input type="button" value="+" onclick="ajoutLigne(3)" class="add-button">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
    <input type="submit" value="Enregistrer" class="button">
    <input type="reset" value="Annuler" class="button">
  </form>
</main>
</div>
  <!-- Incorporation du footer -->
  <?php
    include('inc/_inc_footer.php');
  ?>
  <script src="js/script.js"></script>
</body>
</html>