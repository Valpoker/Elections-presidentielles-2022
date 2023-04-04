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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"> </script>
	<script src="script.js"></script>
	
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
    // Récupération avec la base de données des différents sujets du forum
    $sujets = $bdd->query('SELECT * FROM salle_forum');
    while ($ligne = $sujets->fetch()) {
        $num_salle = $ligne['num_salle'];
        $isLiked = get_like_utilisateur($num_salle, $bdd);
        echo "<a href='#' class='list-group-item mt-2 mb-2 sujet'>
            <span class='nomforum' onclick='submitForm(".$ligne['num_salle'].")'>$ligne[nomforum]</span>
            <span class='nbr_like_forum'>" . nbr_like_forum($ligne['num_salle'], $bdd) . "</span>";
        if (isset($_SESSION['utilisateur'])) {
            $heartClass = $isLiked ? 'bi bi-heart fill' : 'bi bi-heart';
            echo "<i class='$heartClass' num_salle='$num_salle'></i></a>";
        } else {
            echo "<i class='bi bi-heart' num_salle='$num_salle'></i></a>";
        }
    }
?>
		</div>
	</div>
</div>
<div class="text-center">
<?php //bouton pour poster sur le forum si utilisateur connecté
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
<?php
if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'liker_forum':
            if(isset($_POST['num_salle']) && !empty($_POST['num_salle'])) {
                $num_salle = $_POST['num_salle'];
                liker_forum($num_salle, $bdd);
            }
            break;
		case 'disliker_forum':
			if(isset($_POST['num_salle']) && !empty($_POST['num_salle'])) {
				$num_salle = $_POST['num_salle'];
				disliker_forum($num_salle, $bdd);
			}
			break;
    }
}
//fonction pour compter le nombre de like d'un sujet
function nbr_like_forum($num_salle, $bdd) {
	// Préparation de la requête SQL
	$query = $bdd->prepare('SELECT COUNT(*) FROM likerforum WHERE num_salle = :num_salle');
	
	// Exécution de la requête avec les paramètres
	$query->execute(array(
	'num_salle' => $num_salle,
	));

	return $query->fetchColumn();
}
//fonction pour ajouter un like sur un sujet
function liker_forum($num_salle, $bdd) {
	// Préparation de la requête SQL
	$query = $bdd->prepare('INSERT INTO likerforum(pseudo, num_salle) VALUES(:pseudo, :num_salle)');
	
	// Exécution de la requête avec les paramètres
	$query->execute(array(
	'pseudo' => $_SESSION['utilisateur']['pseudo'],
	'num_salle' => $num_salle,
	));
}
//fonction pour enlever son like d'un sujet
function disliker_forum($num_salle, $bdd) {
    // Préparation de la requête SQL
    $query = $bdd->prepare('DELETE FROM likerforum WHERE pseudo = :pseudo AND num_salle = :num_salle');
    
    // Exécution de la requête avec les paramètres
    $query->execute(array(
        'pseudo' => $_SESSION['utilisateur']['pseudo'],
        'num_salle' => $num_salle,
    ));
}
//fonction pour savoir quels sujets ont été likés par l'utilisateur
function get_like_utilisateur($num_salle,$bdd) {
	// test de connexion de l'utilisateur
	if (!isset($_SESSION['utilisateur'])) {
	  return false;
	}
  
	// test pour voir quels sujet ont été likés par l'utilisateur 
	$likes = $bdd->prepare('SELECT COUNT(*) FROM likerforum WHERE num_salle = ? AND pseudo = ?');
	$likes->execute(array($num_salle, $_SESSION['utilisateur']['pseudo']));
	$count = $likes->fetchColumn();
	return ($count > 0);
  }
?>

</body>

</html>