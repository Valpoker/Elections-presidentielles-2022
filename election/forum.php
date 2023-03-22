<!DOCTYPE html>

		<html>
		
<head>
	<title>Forum</title>
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
<div class="container mt-4 container-custom">
  <div class="col-sm-12">
    <div class="list-group col-sm-10 mx-auto text-left">
		<a href="sujet.php" class="list-group-item mt-2 mb-2 sujet">Nom du sujet 1 <i class="bi bi-heart" style="float:right"></i></a>
    </div>
  </div>
</div>
<div class="text-center">
<a href="postforum.php" class="btn btn-custom mt-3">Nouveau post forum</a>
</div>

</body>

</html>