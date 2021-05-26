<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/css-page.css">
	</head>
	<body>
	<?php include ("menu.php")?>	
	<center><h1>Modification de votre livre !</h1></center>
	<br>
	<center><h1>Vous verez prochainement votre modification dans notre sélection.</h1></center>
	<?php
		try{
		$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
	
	}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
	}
		$reponse = $bdd->query("UPDATE Livre_modif SET `isbn`= ?,`titre`= ?,`editeur`= ?,`annee`= ?,`genre`= ?,`langue`= ?,`nbpages`= ?,`prix`= ?,`date_parution`= ? WHERE isbn = '$isbn';");
		$reponse->execute();
?>
    	</p>
    </body> 
</html>