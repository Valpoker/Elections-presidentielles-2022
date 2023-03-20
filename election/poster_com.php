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

poster_com($_SESSION['texte']);
echo "<meta http-equiv=\"refresh\" content=\"0; url=sujet.php\" >";
unset($_SESSION['texte']);
function poster_com($texte) {
  // Connexion à la base de données
  include "bd.php";
  $bdd = getBD();
  
  //Récupération du pseudo de l'utilisateur
  $pseudo = $_SESSION['utilisateur']['pseudo'];
  $num_salle = $_SESSION['num_salle'];
  $dt = new \DateTime();
  $date= $dt->format('Y-m-d');
  $heure= $dt->format('H:i:s');

  // Préparation de la requête SQL
  $query = $bdd->prepare('INSERT INTO commentaire(texte, date, heure, pseudo, num_salle) VALUES(:texte, :date, :heure, :pseudo, :num_salle)');
  
  // Exécution de la requête avec les paramètres
  $query->execute(array(
    'texte' => $texte,
	'date' => $date,
	'heure' => $heure,
    'pseudo' => $pseudo,
	'num_salle' => $num_salle,
  ));
  
  // Fermeture de la connexion à la base de données
  $bdd = null;
}
?>
</body>