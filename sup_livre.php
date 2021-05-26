<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier un livre</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/css-page.css">
</head>
<body>
<?php include ("menu.php"); ?>
    <center><h1>Votre livre a été supprimé !</h1></center>
	<?php
		try{
	$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
	
	}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
	}
	
	$isbn = $_POST['isbn'];
	
	//echo '<p><strong> isbn :  ' . $_POST['isbn'] .'';
	
		$reponse = $bdd->query("DELETE FROM Livre_modif WHERE isbn = '$isbn';");
		$reponse->execute();
?>
</body>
</html>