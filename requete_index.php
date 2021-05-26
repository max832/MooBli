<!--php-->
<!--Pasage du PHP au HTML-->
<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>Les résultats</title>
  <link rel="stylesheet" type="text/css" href="css/css-page.css">
 </head>
 <body>
 <?php include ("menu.php"); ?>
 <center>
 <h1>Nos Livres à petit prix...</h1>
             <?php
             
try{
	$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT titre,auteur, genre, description, prix FROM Livre WHERE prix <=3');
$donnees = $reponse->fetch();
$auteur = $donnees['auteur'];


	echo '<p><h2 style="color:white">'.$donnees['titre'] .'</h2><p>';
	echo '<p style="color:white"> Genre : '.$donnees['genre'] . '<p>';
	echo '<p style="color:white"> Description : '.$donnees['description'] .'<p>';
	echo '<p style="color:white"> Prix : '.$donnees['prix'] .'€<p>';
	echo '<center><a style="color:white" href="detail_livre.php?auteur=' .$auteur.'"">En découvrir plus ...</center></a>';


$reponse->closeCursor();

?>
<div class="bouton-aligne"><HR></div><br>
     <!--bouton de retour en haut-->
        <a style="color:white" href="#">Haut de page</a><br>
<div class="bouton-aligne"><HR></div>
</center>
 </body>
</html>
