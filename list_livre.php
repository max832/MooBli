<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
   <title>Nos Livres</title>
    <link rel="stylesheet" type="text/css" href="css/css-page.css">
     </head>
       <body>
         <?php include ("menu.php"); ?>
     </div>
    </center>
<center><h1>Les Livres</h1>
<h2>Cliquez sur un livre pour en découvrir plus !</h2></center>
<center><div class="bouton-aligne">
<HR>
</div>
</center>
  
<?php
  $number = $_GET['client'];
  
try{
	$bdd = new PDO('mysql:host=localhost;dbname=kxmo5226_moobli;charset=utf8', 'kxmo5226_maxime', 'Administrateur@7477');
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="096573840x"');
$donnees = $reponse->fetch();
$auteur = $donnees['auteur'];
echo'<center><a href="detail_livre.php?auteur=' .$auteur.'&amp;client='.$_GET['client'] .'""><img src="./miniature/min_096573840x.jpg" /></a></center>';



                echo '<p><h2><center></p>' .$donnees['titre'].'  <p>  </p>   ' .$donnees['auteur'].'   <p>  </p>  ' .$donnees['genre'].'</h2></center><p>';

echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="203585573x"');
$donnees = $reponse->fetch();
$auteur = $donnees['auteur'];
echo'<center><a href="detail_livre.php?auteur=' .$auteur.'&amp;client='.$_GET['client'] .'""><img src="./miniature/min_203585573x.jpg" /></a></center>';

                     echo '<p><h2><center></p>' .$donnees['titre'].'   <p>  </p>  ' .$donnees['auteur'].'   <p>  </p>  ' .$donnees['genre'].'</h2></center><p>';

echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="208127857x"');
$donnees = $reponse->fetch();
$auteur = $donnees['auteur']; 
echo'<center><a href="detail_livre.php?auteur=' .$auteur.'&amp;client='.$_GET['client'] .'""><img src="./miniature/min_208127857x.jpg" /></a></center>';


                       echo '<p><h2><center></p>' .$donnees['titre'].'  <p>  </p>   ' .$donnees['auteur'].'  <p>  </p>   ' .$donnees['genre'].'</h2></center><p>';

echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="2035867916"');
$donnees = $reponse->fetch();
$auteur = $donnees['auteur']; 
echo'<center><a href="detail_livre.php?auteur=' .$auteur.'&amp;client='.$_GET['client'] .'""><img src="./miniature/min_2035867916.jpg" /></a></center>';



                        echo '<p><h2><center></p>' .$donnees['titre'].'  <p>  </p>   ' .$donnees['auteur'].'  <p>  </p>   ' .$donnees['genre'].'</h2></center><p>';

echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="2070373096"');
$donnees = $reponse->fetch();
$auteur = $donnees['auteur']; 
echo'<center><a href="detail_livre.php?auteur=' .$auteur.'&amp;client='.$_GET['client'] .'""><img src="./miniature/min_2070373096.jpg" /></a></center>';



                       echo '<p><h2><center></p>' .$donnees['titre'].'   <p>  </p>  ' .$donnees['auteur'].'   <p>  </p>  ' .$donnees['genre'].'</h2></center><p>';

echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="2081219972"');
$donnees = $reponse->fetch();
$auteur = $donnees['auteur']; 
echo'<center><a href="detail_livre.php?auteur=' .$auteur.'&amp;client='.$_GET['client'] .'""><img src="./miniature/min_2081219972.jpg" /></a></center>';


                     echo '<p><h2><center></p>' .$donnees['titre'].'   <p>  </p>  ' .$donnees['auteur'].'  <p>  </p>   ' .$donnees['genre'].'</h2></center><p>';

echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="2253037923"');
$donnees = $reponse->fetch();
$auteur = $donnees['auteur']; 
echo'<center><a href="detail_livre.php?auteur=' .$auteur.'&amp;client='.$_GET['client'] .'""><img src="./miniature/min_2253037923.jpg" /></a></center>';




               echo '<p><h2><center></p>' .$donnees['titre'].'   <p>  </p>  ' .$donnees['auteur'].'  <p>  </p>   ' .$donnees['genre'].'</h2></center><p>';

echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="2253038741"');
$donnees = $reponse->fetch();
$auteur = $donnees['auteur']; 
echo'<center><a href="detail_livre.php?auteur=' .$auteur.'&amp;client='.$_GET['client'] .'""><img src="./miniature/min_2253038741.jpg" /></a></center>';




                      echo '<p><h2><center></p>' .$donnees['titre'].'   <p>  </p>  ' .$donnees['auteur'].'  <p>  </p>   ' .$donnees['genre'].'</h2></center><p>';

echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="2264069112"');
$donnees = $reponse->fetch();
$auteur = $donnees['auteur']; 
echo'<center><a href="detail_livre.php?auteur=' .$auteur.'&amp;client='.$_GET['client'] .'""><img src="./miniature/min_2264069112.jpg" /></a></center>';




                    echo '<p><h2><center></p>' .$donnees['titre'].'  <p>  </p>   ' .$donnees['auteur'].'  <p>  </p>   ' .$donnees['genre'].'</h2></center><p>';

echo'
<center><div class="bouton-aligne">
<HR>
</div></center>';
$reponse = $bdd->query('SELECT titre, auteur, genre FROM Livre WHERE isbn ="2266152181"');
$donnees = $reponse->fetch();
$auteur = $donnees['auteur']; 
echo'<center><a href="detail_livre.php?auteur=' .$auteur.'&amp;client='.$_GET['client'] .'""><img src="./miniature/min_2266152181.jpg" /></a></center>';


                    echo '<p><h2><center></p>' .$donnees['titre'].'  <p>  </p>   ' .$donnees['auteur'].'  <p>  </p>   ' .$donnees['genre'].'</h2></center><p>';


            $reponse->closeCursor();
?>
<center>
<div class="bouton-aligne">
    <HR>
     <!--bouton de retour en haut-->
        <center><a style="color:white" href="#">Haut de page</a></center>
<HR>
    </div>
    </center>
        </body>
</html>