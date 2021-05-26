<?php
session_start ();
include ("menu.php");
?>
<?php
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html>';
	echo '<head>';
	echo '<center><title>Interface Administrateur</title></center>';
	echo '</head>';

	echo '<body>';
	echo '<br>';
	echo '<div class="bouton-aligne"><center><h1> Espace administrateur de  '.$_SESSION['login'].'!</h1></center>
	</div><div class="bouton-aligne">
	<center>
	<a href="decoadmin.php" class="bouton">Déconnexion</a>
	</center>
	</div>
	<HR>
	<br>
	<br>
	<center>
        <a href="cmdadmin.php" class="bouton">Toutes les commandes en cours</a><br />
			<div class="bouton-aligne">
	<HR>
	</div>
	<br />
	    	<a href="formulaire_livre.php" input type="button" class="retour">Gérer la base de données</a>
	    	</center>
	    	<center>
	    
	<div class="bouton-aligne">
	<HR>
	</div>
	<br />
            <h1>Répondre au chat en ligne</h1>
	         <a href="contact.php" input type="button" class="bouton">Répondre maintenant</a>
	         </center>
	        </div>
	        </div>
        </div></center>';
}
else {
	echo '<center><h1>Une erreur est survenue ...  Connectez-vous pour accéder à votre espace !</h1></center>';
	echo '<br>';
	echo '<center><a href="log.php" input type="button" class="bouton">Se Connecter</a></center>';
}
?>