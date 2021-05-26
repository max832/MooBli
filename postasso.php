<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$number = $_GET['client'];

 
$reponse = $bdd->query('UPDATE commandevalid SET client = "'.$number.'"  WHERE nbcom = "'.$_POST['nbcom'].'" ');



header('Location: page_membre.php?client='.$number.'');
?>
