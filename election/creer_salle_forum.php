<!DOCTYPE html>
<html>
<head>
	<title> Poster un sujet</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<link href="styles.css" rel="stylesheet">
</head>
<body>
<?php 
session_start();

if (!isset($_SESSION['utilisateur'])){
	echo "<meta http-equiv=\"refresh\" content=\"0; url=connexion.php\">";
}
else{
	if(isset($_POST['nomforum']) && empty($_POST['nomforum']) || isset($_POST['texte']) && empty($_POST['texte'])){
		echo "<meta http-equiv=\"refresh\" content=\"0; url=postforum.php?nomforum={$_POST['nomforum']}&texte={$_POST['texte']}\" >";
	}
	else{
		$_SESSION['num_salle'] = (creer_salle($_POST['nomforum']));
		$texte = $_POST['texte'];

		// Stocker la valeur du champ "texte" dans une variable de session
		$_SESSION['texte'] = $texte;
		
		echo"<meta http-equiv=\"refresh\" content=\"0; url=poster_com.php\" >";
	}	
}	
function creer_salle($nomforum) {
  // Connexion à la base de données
  include "bd.php";
  $bdd = getBD();
  
  //Récupération du pseudo de l'utilisateur
  $pseudo = $_SESSION['utilisateur']['pseudo'];

  // Préparation de la requête SQL
  $query = $bdd->prepare('INSERT INTO salle_forum(nomforum, pseudo) VALUES(:nomforum, :pseudo)');
  
  // Exécution de la requête avec les paramètres
  $query->execute(array(
    'nomforum' => $nomforum,
    'pseudo' => $pseudo,
  ));

  // Récupération du numéro de la salle créée
  $num_salle = $bdd->lastInsertId();

  // Fermeture de la connexion à la base de données
  $bdd = null;

  // Retourne le numéro de la salle créée
  return $num_salle;
}
?>
</body>