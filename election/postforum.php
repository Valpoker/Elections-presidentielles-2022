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
<div class="container mt-4 col-sm-6">
      <form method="post" action="sujet.php" autocomplete="off">
        <div class="form-group mx-auto col-sm-6" >
          <label for="titre">Titre du sujet:</label>
          <input type="text" class="form-control" id="titre" name="titre">
        </div>
        <div class="form-group mx-auto">
          <label for="message">Premier message:</label>
          <textarea class="form-control" id="message" name="message" rows="5"></textarea>
        </div>
		 <div class="form-group text-center mt-2">
        <button type="submit" class="btn btn-custom mb-2">Envoyer</button>
		</div>
      </form>
</div>
</body>