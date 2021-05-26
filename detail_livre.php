<?php
session_start();
?>
<html>
<head>
	<title>Détail du Livre</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/css-page.css">
	<?php include ("menu.php") ?>
</head>
<body>
    <center>
	<h1>A découvrir...</h1>
	<br>
</center><center>
<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}
$auteur=$_GET["auteur"];
$reponse = $bdd->query('SELECT isbn, titre, auteur, annee, genre, description, prix, editeur FROM Livre where auteur ="'.$auteur.'"');

$donnees = $reponse->fetch();

echo '<p><h2><center>Titre :</p></h2><center><p style ="color:white">'.$donnees['titre'].'</p></center><p>';
    echo '<p><h2><center>Auteur :</p></h2><center><p style ="color:white">'.$donnees['auteur'].'</center><p>';
		echo '<p><h2><center>Année :</p></h2><center><p style ="color:white">'.$donnees['annee'].'</center><p>';
	    	echo '<p><h2><center>Description :</p></h2><center><p style ="color:white">'.$donnees['description'].'</center><p>';
		    	echo '<p><h2><center>ISBN :</p></h2><center><p style ="color:white">'.$donnees['isbn'].'</center><p>';
			    	echo '<p><h2><center>Genre :</p></h2><center><p style ="color:white">'.$donnees['genre'].'</center><p>';
			    	    echo '<p><h2><center>Editeur :</p></h2><center><p style ="color:white">'.$donnees['editeur'].'</center><p>';
	                  echo '<p><h2><center>Prix :</p></h2><center><p style ="color:white">'.$donnees['prix'].'€ </center><p>';
	                       echo '<center><a href="panier.php?action=ajout&amp;l='.$donnees['isbn'].'&amp;q=1&amp;p='.$donnees['prix'].'&amp;t='.$donnees['titre'].'&amp;client='.$_GET['client'] .'"><h2 style ="color:white">Ajouter au panier</h2></center></a>';
	                             echo'<div class="bouton-aligne"><HR></div><br>';


$reponse->closeCursor();

?>
  <!--bouton de retour en haut-->
        <a style ="color:white" href="#">Haut de page</a>
<br>
<div class="bouton-aligne"><HR></div>
<br></center>
<br>
</body>
</html>