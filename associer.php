<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>Lier ma commande</title>
  <link rel="stylesheet" type="text/css" href="css/css-page.css">
 </head>
 <body>
 	<?php include ("menumembre.php");
 	$number = $_GET['client'];
 echo"<center><div class='bouton-aligne'>
		<a style = 'color:white' href='page_membre.php?client=".$_GET['client'] ."'>Mon compte</a>
	</div><br>";
 echo"<div class='bouton-aligne'><div class='bouton-aligne'>
            <HR>
        </div></div>
       </center>";
       
 		echo '
 	<center>
      <div class="bouton-aligne">
      <h1>Associer une commande à mon compte</h1><br>
      <form method="post" action="postasso.php?client='.$number.'">
      <div class="texte2">
     <label>Numéro de commande </label> <input type="number" class="input-livre" name="nbcom" id="nbcom" >
      <br>
      <br>

      <label>Numéro client </label> <input readonly ="readonly" color : white type="text" class="input-livre" name="client" id="client" value="'.$number.'" >
      <br>
      <br>
      <input type="submit" value="Ajouter ma commande" class="bouton-livre" id="valid">
      <br>

      </div>
    </form>
 </body>
</html>';?>

