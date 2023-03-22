<!DOCTYPE html>
		<html>
<head>
	<title>Creation</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <link href="styles.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid p-2 text-white text-center" style='background-color: #453e9d;'>
        <img id="drapeau" src="images/drapeau.jpg" width=10% style="float:left; border: 2px solid" >
		<h1>Résultats élections présidentielles<br>
     		2022 second tour</h1>
    </div>
    <div id="barremenu">
		<ul>
			<li><a  href="./election.php"> RESULTATS</a> </li>
			<li><a  href="./information.php">INFORMATIONS</a></li>
			<li><a id="active" href="./connexion.php"> SE CONNECTER</a></li> 
			<li><a href="./forum.php"> FORUM</a></li>
			<li><a  href="./contactez-nous.php">CONTACTEZ-NOUS</a></li>
		</ul>
    </div>
    <h2 id="h2connex" >Créer un compte</h2>
    
    
    <?php 

echo '<form id="formconnex" action="enregistrement.php" method="post" autocomplete="off"> <p>
<p>
Pseudo : <br>
            <input type="text" name="pseudo" value="'.$_POST['pseudo'].'"/> <br> </p>
        <p>
Nom : <br>
         <input type="text" name="n" value="'.$_POST['n'].'"/> <br>
     </p>
<p>
Prénom : <br>
         <input type="text" name="p" value="'.$_POST['p'].'"/> <br>
     </p>
<p>
Adresse e-mail : <br>
         <input type="text" name="mail" value="'.$_POST['mail'].'"/> <br>
     </p>
     
     
     <p>
Mot de passe : <br>
         <input type="password" name="mdp" value=""/> <br>
     </p>
     
     <p>
         <input id="AuthBut" type="submit" value="Créer">
</p> </form> '

?>
</body>