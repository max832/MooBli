<?php
session_start();
include ("menu.php");
?>
<?php 
// vérification des déclaration
/*$id = isset($_POST['id']) ? $_POST['id'] : NULL;
$pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
$pass = isset($_POST['pass']) ? $_POST['pass'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$email = isset($_POST['date_inscription']) ? $_POST['date_inscription'] : NULL;*/

// connexion à notre bdd
	$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');

// requete d'insertion
$req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email) VALUES (?, ?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['pass'], $_POST['email']));
?>

<?php
echo '<center><h1>Vous êtes inscrit !</h1></center>';
echo '<h1><center>Récapitulons ensemble toutes vos données. Notez les biens, ca pourrait servir !</center></h1>';
	echo '<center><h1> Pseudo : '.$_POST['pseudo'].' 
	<br>
	Mot de passe : '.$_POST['pass'].' </h1></center>';
echo '<br>';
echo '<HR>';
echo '<center><a href="log.php" class="bouton">Connexion</a></center>';
echo '<HR>';
?>
