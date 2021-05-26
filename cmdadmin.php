<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>Commandes</title>
  <link rel="stylesheet" type="text/css" href="css/css-page.css">
 </head>
 <body>
 	<?php include ("menu.php"); ?>
<center>
    <br>
    <button><a style ="color:black" href="gestionadmin.php">Acceuil Gestion</a></button>
    	<button><a style ="color:black" href="supcom.php">Suprimer une commande</a></button>
    	<br>
    	<br>
	<h1>Les commandes </h1>

    <br>
<!--Commande en cour-->
<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT id, client, nom, prenom, moyen, nbcom, nomlivr, quantite, montant, date_achat FROM `commandevalid` WHERE `date_achat` >= CURRENT_DATE');

while ($donnees = $reponse->fetch())
{
    echo '<p><h2><center> Numéro client : </p>' .$donnees['client']. '</h2></center><p>';
    echo '<p><h2><center> Numéro de commande : </p>' .$donnees['nbcom']. '</h2></center><p>';
    echo '<p><h2><center> Nom du client : </p>'.$donnees['nom']. '</h2></center><p>';
    echo '<p><h2><center> Prénom du client : </p>' .$donnees['prenom']. '</h2></center><p>';
    echo '<p><h2><center> Moyen de paiement : </p>'.$donnees['moyen']. '</h2></center><p>';
    
    echo '<p><h2><center> Date de la commande : </p>'.$donnees['date_achat']. '</h2></center><p>';
                echo '<p><h2><center> Titre : </p>' .$donnees['nomlivr']. '</h2></center><p>';
                echo '<p><h2><center> Quantite : </p>' .$donnees['quantite']. '</h2></center><p>';
                echo '<p><h2><center> Prix total de la commande : </p>'.$donnees['montant']. '€</h2></center><p>';
                echo'<HR>';
}

$reponse->closeCursor();

?><!--
<!--Commande passé

    <br>
    	<center><h1>Les commandes passées</h1></center>
    <br>
<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT id, nom, prenom, moyen, nbcom, nomlivr, quantite, montant, date_achat FROM `commandevalid` WHERE `date_achat` < CURRENT_DATE');

while ($donnees = $reponse->fetch())
{
 echo '<p><h2><center> Numéro de commande : </p>' .$donnees['nbcom']. '</h2></center><p>';
    echo '<p><h2><center> Nom du client : </p>'.$donnees['nom']. '</h2></center><p>';
    echo '<p><h2><center> Prénom du client : </p>' .$donnees['prenom']. '</h2></center><p>';
    echo '<p><h2><center> Moyen de paiement : </p>'.$donnees['moyen']. '</h2></center><p>';
    echo '<p><h2><center> Date de la commande : </p>'.$donnees['date_achat']. '</h2></center><p>';
                echo '<p><h2><center> Titre : </p>' .$donnees['nomlivr']. '</h2></center><p>';
                echo '<p><h2><center> Quantite : </p>' .$donnees['quantite']. '</h2></center><p>';
                echo '<p><h2><center> Prix total de la commande : </p>'.$donnees['montant']. '€</h2></center><p>';
                echo'<HR>';
}

$reponse->closeCursor();

?>-->
 
     <!--bouton de retour en haut-->
        <center><a style= "color:white" href="#">Haut de page</a></center>
    <HR>
	</center>
 </body>
</html>
</center>
 </body>
</html>