	<!DOCTYPE html>
<html>
<head>
	<title>Suprimer une commande</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/css-page.css">
</head>
<body>
<?php include ("menu.php"); ?>
<center><h1>La commande à été suprimer !</h1>

	<?php
		try{
		$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
	
	}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
	}
	$nbcom = $_POST['nbcom'];

//echo '<p><strong> id :  ' . $_POST['id'] .'';

		$reponse = $bdd->prepare("DELETE FROM commandevalid WHERE nbcom = '$nbcom';");
	    $reponse->execute();
?>
<br>
<a style="color:white" href="supcom.php">Retourner en arrière</a></center>
</body>
</html>