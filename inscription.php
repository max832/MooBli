<?php
session_start();
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Inscription</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/cc-recherche.css">
		</head>
		<body>
<!-- Lien d'accès au menu qui est général à toutes les pages -->	
		<?php include ("menu.php");?>
<!--Barre de recherche intégré, permettant de chercher plus facilement dans le site-->
		<center>
<?php

    echo '<HR>';
	echo '<form action="inscription_bdd.php" method="post">
<br>
<h1>Pseudo : </h1><input type="text" name="pseudo" id="pseudo">
<br>
<h1>Mot de passe : </h1><input type="password" name="pass" id="pass"><br />
<br>
<h1>E-mail : </h1><input type="text" name="email" id="email"><br />
<br>
<input type="submit" value="Inscription">
</form>
<br>
<br>
	<a href="log.php" class="bouton">Déja inscrit ?</a>
	  <HR>
	    </div>
	</body>
</html>';

?>