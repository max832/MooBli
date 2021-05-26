<?php
session_start ();
include ("menu.php");
$login_valide = "admin";
$pwd_valide = "admin";

if (isset($_POST['login']) && isset($_POST['pwd'])) {
	if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['pwd'] = $_POST['pwd'];
			echo '<center><h1>Vous êtes enfin parmis nous !</h1>';
				echo '<br>';
		echo '<center><a href="gestionadmin.php" class="bouton">Accéder à la gestion du site</a></center>';
	}
	else {
		echo '<body onLoad="alert(\'Vous n\' êtes pas administrateur de ce site web !...\')">';
		echo '<meta http-equiv="refresh" content="0;URL=log.php">';
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}
?>