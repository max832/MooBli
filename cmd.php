<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>Commandes en cours</title>
  <link rel="stylesheet" type="text/css" href="css/css-page.css">
 </head>
 <body>
<?php include ("menumembre.php");?>
<center>
<!--Commande en cour-->
<?php
$number = $_GET['client'];
echo"<div class='bouton-aligne'>
		<a style = 'color:white' href='page_membre.php?client=".$_GET['client'] ."'>Mon compte</a>
	</div><br>";
 echo"<div class='bouton-aligne'><div class='bouton-aligne'>
            <HR>
        </div></div>
        <br>";
        
echo"<h1>Mes Commandes</h1>";
 	echo"<br>";
try{
	$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nbcom, nomlivr, quantite, montant, date_achat, addresselivraison, moyen FROM `commandevalid` WHERE client ="'.$number.'" ');

while ($donnees = $reponse->fetch())
{
    echo '<p><h2><center> Numéro de commande : </p>' .$donnees['nbcom']. '</h2></center><p>';
    echo '<p><h2><center> Date de la commande : </p>'.$donnees['date_achat']. '</h2></center><p>';
                echo '<p><h2><center> Titre : </p>' .$donnees['nomlivr']. '</h2></center><p>';
                echo '<p><h2><center> Quantite : </p>' .$donnees['quantite']. '</h2></center><p>';
                echo '<p><h2><center> Prix total de la commande : </p>'.$donnees['montant']. '€</h2></center><p>';
                echo '<p><h2><center> Adresse de livraison : </p>'.$donnees['addresselivraison']. '</h2></center><p>';
                echo '<p><h2><center> Moyen de paiement : </p>'.$donnees['moyen']. '</h2></center><p>';
               echo"<!--bouton de retour en haut--><center>
      <div class='bouton-aligne'>
            <HR>
        </div><br>
        <a style ='color:white' href='#'>Haut de page</a><br>
        <div class='bouton-aligne'>
            <HR>
        </div></center>";
}

$reponse->closeCursor();

?>
<!--Commande passé-->

   <!--   <br>
    	<center><h1>Commande passée</h1></center>
    <br>
  
<?php

try{
	$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nbcom, nomlivr, quantite, montant, date_achat, addresselivraison, moyen FROM `commandevalid` WHERE `date_achat` < CURRENT_DATE AND client ="'.$number.'" ');

while ($donnees = $reponse->fetch())
{
     echo '<p><h2><center> Numéro de commande : </p>' .$donnees['nbcom']. '</h2></center><p>';
    echo '<p><h2><center> Date de la commande : </p>'.$donnees['date_achat']. '</h2></center><p>';
                echo '<p><h2><center> Titre : </p>' .$donnees['nomlivr']. '</h2></center><p>';
                echo '<p><h2><center> Quantite : </p>' .$donnees['quantite']. '</h2></center><p>';
                echo '<p><h2><center> Prix total de la commande : </p>'.$donnees['montant']. '€</h2></center><p>';
                 echo '<p><h2><center> Adresse de livraison : </p>'.$donnees['addresselivraison']. '</h2></center><p>';
                echo '<p><h2><center> Moyen de paiement : </p>'.$donnees['moyen']. '</h2></center><p>';
                echo'<HR>';
}

$reponse->closeCursor();

?>-->

     
	</center>
 </body>
</html>
</center>
 </body>
</html>