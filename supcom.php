<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html>
<head>
	<title>Suprimer une commande</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/css-page.css">
</head>
<body>
<?php include ("menu.php"); ?>
    <center><h1>Suprimer une commande</h1>
    <form method="post" action="validsup.php">
        <label style= "color:white" >Entrer le numéro de la commande à suprimer </label> <input type="text" class="input-livre" name="nbcom" id="nbcom" size="10">
        <br>
           <input type="submit" value="Confirmer la supression" class="bouton-livre" id="valid">
    </form>
    <br>
    <a style= "color:white" href="cmdadmin.php">Retourner en arrière</a>
    </center>
</body>
</html>