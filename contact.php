<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title>Nous Contacter</title>
<link rel="stylesheet" type="text/css" href="css/css-page.css">
</head>
<body>
<?php include ("menu.php"); ?>
<center>
<h1>Bonjour ! Comment allez - vous ?</h1>
<br>
<form action="chat_post.php" method="post">
        <p>
        <h2 for="pseudo">Pseudo</h2> 
        <input type="text" name="pseudo" class="input-livre" id="pseudo" /><br />
        <br>
        <h2 for="message">Message</h2>
         <input type="text" class="input-livre" name="message" id="message" /><br />
         <br>
        <input type="submit" class="input-livre" value="Envoyer" />
	</p>
</form>

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

while ($donnees = $reponse->fetch())
{
	echo '<p style="color:white"><strong style="color:white">' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
    </body>
</html>