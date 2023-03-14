<!DOCTYPE html>

		<html>
		
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<link href="styles.css" rel="stylesheet">
	
</head>

<body>
<div class="container-fluid p-2 text-white text-center" style='background-color: #453e9d;'>
        <img id="drapeau" src="images/drapeau.webp" width=10% style="float:left; border: 2px solid" >
		<h1>Résultats élections présidentielles<br>
     		2022 second tour</h1>
    </div>
    <div id="barremenu">
		<ul>
			<li><a  href="./election.php"> RESULTATS</a> </li>
			<li><a href="./information.php">INFORMATIONS</a></li>
			<li><a id="active" href="./connexion.php"> SE CONNECTER</a></li> 
			<li><a href="./forum.php"> FORUM</a></li>
			<li><a  href="./contactez-nous.php">CONTACTEZ-NOUS</a></li>
		</ul>
		
    </div>
	<h2 id="h2connex">Connexion</h2>
<?php 
	
	echo '<form id="formconnex" action="connecter.php" method="post" autocomplete="on">
	  <p>
	  
		Adresse mail : <br>
		<input type="text" name="mail" value="'.$_POST['mail'].'"/> </p>
	  </p>
	  <p>
		Mot de passe : <br>
		<input type="password" name="mdp" value=""/> </p>
	  </p>
	  <div style="text-align: center;">
		<button id="AuthBut" type="submit">Se connecter</button>
	  </div>
	  <br>
	  <a id="creation" href="./inscription.php"> Créer un compte</a>
	</form>'
?>
</body>