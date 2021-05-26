<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>
	<meta charset="utf-8">
</head>
<body>       
 <center>
 <h1>Votre commande a été validée !</h1>
 <?php
 echo"<p>Votre numéro de commande : ".$_POST['nbcom']." </p>";
 ?> 
<!--creation d'un faut sytème de paiement-->
<h2>A bientôt sur MooBli</h2>
<a href="index.php">Revenir à l'acceuil</a>
<br>
<a href="log.php">Gérer mes commandes</a>

<HR>
<h1>Vous désirez nous régler par chèque pas de problème !</h1>
<br>
<h2>Envoyer nous votre chèque à l'ordre de "MooBli" avec votre numéro de réservation au dos.</h2>
<br>
<h2>Adresse : 145, boulevard Neyp, Quartier des Grandes-Carrières, Paris 75018</h2>
<br>
<p>L'envoie de votre commande s'effectuera dès réception de votre chèque.</p>
<HR>
</center>
<?php
		try{
		$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
	
	}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
	}

		$reponse = $bdd->prepare('INSERT INTO `commandevalid`( `client`, `nom`, `montant`, `nbcom`, `nomlivr`, `quantite`, `prenom`, `addresselivraison`, `addressefactur`, `moyen`, `numcarte`, `datexp`, `crypto`, `date_achat`) VALUES (?, ? ,? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_DATE() )') ;

	    $reponse->execute(array($_POST['client'], $_POST['nom'],  $_POST['montant'], $_POST['nbcom'], $_POST['nomlivr'], $_POST['quantite'], $_POST['prenom'], $_POST['addresselivraison'], $_POST['addressefactur'], $_POST['moyen'], $_POST['numcarte'], $_POST['datexp'], $_POST['crypto']));

?>
</body>
</html>