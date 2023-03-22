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
	if(isset($_POST['titre']) && empty($_POST['titre']) || isset($_POST['texte']) && empty($_POST['texte']){
		echo "<meta http-equiv=\"refresh\" content=\"0; url=postforum.php?titre={$_POST['titre']}&texte={$_POST['texte']}\" >";
	}
	else{
		creer_salle($titre);
		echo "<meta http-equiv=\"refresh\" content=\"0; url=sujet.php\" >";
	}	
}	
function creer_salle($titre) {
  // Connexion à la base de données
  include "bd.php";
  $bdd = getBD();
  
  //Récupération du pseudo de l'utilisateur
  $pseudo = $_SESSION['utilisateur']['pseudo'];

  // Préparation de la requête SQL
  $query = $bdd->prepare('INSERT INTO salle_forum(titre, pseudo) VALUES(:titre, :pseudo)');
  
  // Exécution de la requête avec les paramètres
  $query->execute(array(
    'titre' => $titre,
    'pseudo' => $pseudo,
  ));
  
  // Fermeture de la connexion à la base de données
  $bdd = null

?>
</body>