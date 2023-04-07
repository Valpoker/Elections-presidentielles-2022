<!DOCTYPE html>
<html>
<head>
	<title> Résultat </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<link href="styles.css" rel="stylesheet">
	
<div class="container-fluid p-2 text-white text-center" style='background-color: #453e9d;'>
	<img id="drapeau" src="images/drapeau.webp" width=10% style="float:left; border: 2px solid" >
	<h1>Résultats élections présidentielles<br>
	2022 second tour</h1>
</div>
<div id="barremenu">
	<ul>
		<li><a id="active" href="./election.php"> RESULTATS</a> </li>
		<li><a  href="./information.php">INFORMATIONS</a></li>
		<li><a href="./connexion.php"> SE CONNECTER</a></li> 
		<li><a href="./forum.php"> FORUM</a></li>
		<li><a  href="./contactez-nous.php">CONTACTEZ-NOUS</a></li>
	</ul>
</div>
</head>
<body>
<?php 
	session_start();
    include 'bd.php';
    $bdd = getBD();

	$_SESSION['nomDep'] = $_POST['nom'];
	
	$result = $bdd->prepare("SELECT TauxVoixMacron, TauxVoixLePen FROM election WHERE codeelec = :code_dep");
	$result->execute(array(':code_dep' => $_POST['codedep']));

	while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
   		$_SESSION['vote_macron'] = $ligne['TauxVoixMacron'];
    	$_SESSION['vote_lepen'] = $ligne['TauxVoixLePen'];
	}
?>
<div id=histo>
	<?php
		echo "<img src='./histo.php' />";
	?>
</div>
</body>