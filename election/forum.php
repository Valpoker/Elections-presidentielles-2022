<!DOCTYPE html>

		<html>
		
<head>
	<title>Forum</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<link href="styles.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	
</head>

<body>
<?php
session_start();
// Inclure le fichier "bd.php"
include "bd.php";
$bdd = getBD();
?>
<div class="container-fluid p-2 text-white text-center" style='background-color: #453e9d;'>
	<img id="drapeau" src="images/drapeau.webp" width=10% style="float:left; border: 2px solid" >
	<h1>Résultats élections présidentielles<br>
    2022 second tour</h1>
</div>
<div id="barremenu">
	<ul>
		<li><a  href="./election.php"> RESULTATS</a> </li>
		<li><a  href="./information.php">INFORMATIONS</a></li>
		<li><a href="./connexion.php"> SE CONNECTER</a></li> 
		<li><a id="active" href="./forum.php"> FORUM</a></li>
		<li><a  href="./contactez-nous.php">CONTACTEZ-NOUS</a></li>
	</ul>
</div>
<div class="container mt-4 container-custom">
	<div class='col-sm-12'>
		<div class='list-group col-sm-10 mx-auto text-left'>
			<?php
			$sujets = $bdd->query('select * from salle_forum');
			while ($ligne = $sujets->fetch()) {
				echo "<a href='#' class='list-group-item mt-2 mb-2 sujet' onclick='submitForm(".$ligne['num_salle'].")'>" .$ligne['nomforum'] ."<i class='bi bi-heart' style='float:right'></i></a>";
			  }						  
			?>
		</div>
	</div>
</div>
<div class="text-center">
<?php 
if (isset($_SESSION['utilisateur'])){
	echo "<a href='postforum.php' class='btn btn-custom mt-3'>Nouveau post forum</a>";
}
else{
	echo "<a href='connexion.php' class='btn btn-custom mt-3'>Nouveau post forum</a>";
}
?>
</div>
<script>
	function submitForm(num_salle) {
  var form = document.createElement("form");
  form.setAttribute("method", "post");
  form.setAttribute("action", "sujet.php");

  var input = document.createElement("input");
  input.setAttribute("type", "hidden");
  input.setAttribute("name", "num_salle");
  input.setAttribute("value", num_salle);

  form.appendChild(input);
  document.body.appendChild(form);
  form.submit();
}
</script>
</body>

</html>