<html>
<head>
<title>Formulaire d'identification administrateur</title>
<link rel="stylesheet" href="css/cc-recherche.css">
<meta charset="utf-8">
<?php
include ("menu.php");
?>
</head>
<body>
	<br>
<center>
    <HR>
<form action="adminlog.php" method="post">
<h1>Pseudo : </h1><input type="text" name="login">
<br />
<h1>Mot de passe : </h1><input type="password" name="pwd"><br />
<br>
<input type="submit" value="Connexion">
</form>
<br>

<HR>
    <a style="color:white" href="log.php">Passer en mode visiteur</a>
</center>
</body>
</html>
