<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-FW0zbZxrGqZ3WrKf+8p/LwCXr0myJlpBYz+X2TNCrJx1OaQ7YmZmIn0rrfd+eKkJ6Jf7pPyldlXUe7G+EDeA/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Sujet 1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<link href="styles.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script>
    function pas_connecte(){
      alert("Vous devez vous connecter pour pouvoir poster un message");
    }
	</script>
</head>
<body>
<?php
session_start();
// Connexion à la base de données
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
<div class="container mt-5 col-sm-6 gris">
  <div class="row justify-content-center">
    <div class="col-sm-12 mt-2 container-custom">
		<?php 
		if(isset($_SESSION["num_salle"])){
			$num_salle=$_SESSION["num_salle"];
			unset($_SESSION["num_salle"]);
		}
		else{
			$num_salle=$_POST['num_salle'];
		}
		$coms = $bdd->query('SELECT * FROM commentaire WHERE num_salle = ' . $num_salle);
		while ($ligne = $coms->fetch()){
			if(isset($_SESSION['utilisateur']) && !empty($_SESSION['utilisateur'])){
				if( $ligne['pseudo']==$_SESSION['utilisateur']['pseudo']){
					echo "<div class='my_chat-bubble ' bg-light'>";
					echo "<p class='mon_pseudo'> " .'MOI'. "</p>";
					echo "<p class='mon_texte'> ".$ligne['texte']."</p>";
					echo "</div>";
				}
				else{
					echo "<div class='chat-bubble ' bg-light '>";
					echo "<p class='pseudo'> ".$ligne['pseudo']. "</p>";
					echo "<p class='texte'> ".$ligne['texte']."</p>";
					echo "</div>";
				}
			}
			else{
				echo "<div class='chat-bubble ' bg-light '>";
				echo "<p class='pseudo'> ".$ligne['pseudo']. "</p>";
				echo "<p class='texte'> ".$ligne['texte']."</p>";
				echo "</div>";
			}
		}
		?>
      </div>
      <form class="mt-3 poster_commentaire" method="POST" action="poster_com.php">
	    <textarea class="form-control" id="texte" name="texte" rows="3" placeholder="Saisir un message"></textarea>
		<input type="hidden" name="num_salle" value="<?php echo $num_salle; ?>">
		<div class=" text-center mt-2">
		<?php if(isset($_SESSION['utilisateur']) && !empty($_SESSION['utilisateur'])){
        	echo "<button type='submit' class='btn btn-custom mb-2'>Envoyer</button>";
		}
		else {
			echo "<button type='button' class='btn btn-custom mb-2' onclick='pas_connecte()'>Envoyer</button>";
		}		  
		?>
		</div>
      </form>
  </div>
</div>

</body>