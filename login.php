<?php
session_start ();
include ("menumembre.php");
// connexion à la bdd
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

// variable 
$_POST['login'];
$_POST['pwd'];

//echo '<p><strong> LOGIN envoyer  ' . $_POST['login'] . '</strong> MOT DE PASSE envoyer : ' . $_POST['pwd'] . '</p>';

// requete

$reponse = $bdd->query('SELECT id, pseudo, pass FROM membres');

while ($donnees = $reponse->fetch())
{

$donnees['pseudo'];
$donnees['pass'];
$donnees['id'];
//echo '<p><strong> LOGIN de la BDDD  ' . $donnees['pseudo'] . '</strong> MOT DE PASSE de la BDD : ' . $donnees['pass'] . '</p>';

// cas vrai

if ($donnees['pseudo'] === $_POST['login'] && $donnees['pass'] === $_POST['pwd']) {
    	$nameper = $donnees['pseudo'];
echo '<center><div class="bouton-aligne"><HR></div><h1>Vous êtes enfin parmis nous !</h1>
		<br>

<button><a href="page_membre.php?client='.$donnees['id'].'">Accéder à mon compte</a></button>';
		echo '<br>';
echo '<br>';
//echo '<center><a href="index.php" class="bouton">Acceuil</a></center>';
}
}
/*
// cas faux
if ( $_POST['login'] !== $donnees['pseudo'] && $_POST['pwd'] !== $donnees['pass']) {
echo '<center><h1>Membre non reconnu, veuillez réessayer ou contactez nous !</h1></center>';
echo '<center><a href="log.php" class="bouton">Ressayer !</a></center>';
}
*/
$reponse->closeCursor();
?>