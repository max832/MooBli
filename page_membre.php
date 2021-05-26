<?php
session_start ();
include ("menumembre.php");
?>
<?php

//if ($donnees['pseudo'] === $_POST['login'] && $donnees['pass'] === $_POST['pwd']) {
//if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html>';
	echo '<head>';
	echo '<center><title>Bienvenue</title></center>';
	echo '</head>';

	echo '<body>';
	echo '<div class="bouton-aligne"><center><h1> Bonjour,</br> Heureux de te revoir ! </h1></center>
	</div><div class="bouton-aligne">
	<center>
	<a href="logout.php" class="bouton">Déconnexion</a>
	</center>
	</div><br>

		<HR>
	
	</div><center>
	<h1 style="color:white" >Étant connecter, pour découvrir nos livres utilisés ce menu !</h1>
	<a href="list_livre.php?client='.$_GET['client'] .'" input type="button" class="bouton">Découvrir nos Livres</a>
<br><br>
		<a href="list_auteur.php?client='.$_GET['client'] .'" input type="button" class="bouton">Découvrir nos Auteurs</a>
		<br>
		<br>
		<HR>
	
	<br /></center>
	<center>
	
	<!--<a href="panier.php?client='.$_GET['client'] .'"" class="bouton">Mon panier</a>
	<br>-->

        <a href="cmd.php?client='.$_GET['client'] .'" class="bouton">Mes commandes</a><br />
        <br>
      
        
           <a style= "color:white"  href="associer.php?client='.$_GET['client'] .'" class="bouton">Associer une commande à mon compte</a><br />
        <br>
			<div class="bouton-aligne">
	<HR>
	</div>
	<br />
        <!-- <h1>Vous avez remarqué une erreur et vous souhaitez modifier notre base de donnée ?</h1>
	    	<a href="formulaire_livre.php" input type="button" class="retour">Envoyer une demande de modification</a>
	    	<center>
	    	<br />
	<div class="bouton-aligne">
	<HR>
	</div>
	<br />-->
            <h1>Une question, un doute ?</h1>
	         <a href="contact.php" input type="button" class="bouton">Lancer le chat avec notre équipe !</a>
	         </center>
	        </div>
	        </div>
        </div></center>';
        	//echo ''.$_GET['client'] .'';
/*}
else {
	echo '<center><h1>Une erreur est survenue ...  Connectez-vous pour accéder à votre espace personel !</h1></center>';
	echo '<br>';
	echo '<center><a href="log.php" input type="button" class="bouton">Se Connecter</a></center>';
}*/
?>