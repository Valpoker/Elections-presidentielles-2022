<!DOCTYPE html>
		<html>
<head>
	<title>Enregistrement</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <link href="styles.css" rel="stylesheet">
</head>

<body>
<?php
    function getBD(){
        $bdd = new PDO('mysql:host=localhost;dbname=election;charset=utf8', 'root', 'root');
        return $bdd;
    }
?>
</body>