<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ajouter un livre</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/css-page.css">
	</head>
	<body>
	<?php include ("menu.php")?>
	<center><h1>Votre nouveau livre a été ajouté!</h1></center>
	<br>
	<center><h1>Vous le retrouverez bientôt dans notre classement.</h1></center>
	<?php
		try{
		$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
	}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
	}
	
	$reponse = $bdd->prepare('INSERT INTO `Livre` (`isbn`, `titre`, `editeur`, `annee`, `genre`, `langue`, `nbpages`, `prix`, `date_parution`, `description`, `auteur` ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
	
	$reponse->execute(array($_POST['isbn'], $_POST['titre'], $_POST['editeur'], $_POST['annee'], $_POST['genre'], $_POST['langue'], $_POST['nbpages'], $_POST['prix'], $_POST['date_parution'], $_POST['description'], $_POST['auteur']));

	?>


	</p>
</body> 
</html>