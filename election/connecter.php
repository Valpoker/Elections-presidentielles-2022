</head>

<body>

<?php
session_start();
include "bd.php";
if (isset($_POST['mail']) && !empty($_POST['mail']) && isset($_POST['mdp']) && !empty($_POST['mdp'])) {
    $mail = $_POST['mail'];
    $mdp = md5($_POST['mdp']);
    
    // Récupérer les informations du client depuis la base de données
    $bdd = getBD();
    $query = $bdd->prepare('SELECT * FROM utilisateur WHERE mail = :mail AND mdp = :mdp');
    $query->execute(array(
        'mail' => $mail,
        'mdp' => $mdp
    ));
    $utilisateur = $query->fetch();

    if($utilisateur) {
        // Stocker les informations du client dans une variable de session
        $_SESSION['utilisateur'] = $utilisateur;
        

        // Rediriger l'utilisateur vers la page d'accueil
        header("Location: election.php");
        exit();
    } else {
        // Rediriger l'utilisateur vers la page de connexion si les informations sont incorrectes
        header("Location: connexion.php");
        exit();
    }
} else {
    // Rediriger l'utilisateur vers la page de connexion s'il manque des informations
    header("Location: connexion.php");
    exit();
}


?>

 
</body>
</html> 