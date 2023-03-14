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
<div class="container mt-5 col-sm-6 gris">
  <div class="row justify-content-center">
    <div class="col-sm-12 mt-2">
      <div class="chat-bubble-container">
        <div class="chat-bubble bg-light col-sm-8">
          <p>Bonjour c'est le sujet 1</p>
        </div>
      </div>
      <form class="mt-3">
        <input type="text" class="form-control" placeholder="Saisir un message">
		<div class=" text-center mt-2">
        <button type="submit" class="btn btn-custom mb-2">Envoyer</button>
		</div>
      </form>
    </div>
  </div>
</div>

</body>