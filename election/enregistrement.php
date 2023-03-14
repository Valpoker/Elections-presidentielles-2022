<!DOCTYPE html>
		<html>
<head>
	<title>Enregistrement</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <link href="styles.css" rel="stylesheet">

   <?php
   if(isset($_POST['pseudo']) && empty($_POST['pseudo']) || isset($_POST['mail']) && empty($_POST['mail']) || isset($_POST['mdp']) && empty($_POST['mdp']) 
        || isset($_POST['n']) && empty($_POST['n']) || isset($_POST['p']) && empty($_POST['p']) 
        ){
            echo'<meta http-equiv="refresh" content="0;URL=creation.php?pseudo='.$_POST['pseudo'].'&mail='.$_POST['mail'].'&n='.$_POST['n'].'&p='.$_POST['p'].'">';
        }else{
            enregistrer($_POST['pseudo'],$_POST['mail'],$_POST['mdp'],$_POST['n'],$_POST['p']);
            echo'<meta http-equiv="refresh" content="0;URL=election.php">';
        }
    function enregistrer($pseudo, $mail, $mdp, $nom, $prenom) {
        #Connexion à la BDD
        include "bd.php";
        $bdd=getBD();
            
        #Construction requête SQL
        $query=$bdd->prepare('INSERT INTO utilisateur(pseudo, mail, mdp, nom, prenom) VALUES(:pseudo, :mail, :mdp, :nom, :prenom)');

        #Exécution requête SQL
        $query->execute(array(
            'pseudo'=>$pseudo,
            'mail'=>$mail,
            'mdp'=>md5($mdp),
            'nom'=>$nom,
            'prenom'=>$prenom
        ));
        $bdd=null;
    }
    ?>
</head>

<body>
</body>