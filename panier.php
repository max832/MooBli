<?php
session_start();
include_once("fonctions-panier.php");
include ("menu.php");
$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
if(!in_array($action,array('ajout', 'suppression', 'refresh')))
$erreur=true;

//récupération des variables en POST ou GET
$l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
$p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
$q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

//Suppression des espaces verticaux
$l = preg_replace('#\v#', '',$l);
//On vérifie que $p est un float
$p = floatval($p);

//On traite $q qui peut être un entier simple ou un tableau d'entiers

if (is_array($q)){
  $QteArticle = array();
  $i=0;
  foreach ($q as $contenu){
     $QteArticle[$i++] = intval($contenu);
  }
}
else
$q = intval($q);

}

if (!$erreur){
switch($action){
  Case "ajout":
     ajouterArticle($l,$q,$p);
     break;

  Case "suppression":
     supprimerArticle($l);
     break;

  Case "refresh" :
     for ($i = 0 ; $i < count($QteArticle) ; $i++)
     {
        modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
     }
     break;

  Default:
     break;
}
}

echo '<?xml version="1.0" encoding="utf-8"?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<center>
    <?php
    $number = $_GET['client'];

	?>
	
<h1>Vue d'ensemble de votre panier</h1>
<p style="color: white;" >Votre panier peut être valider sans compte client.<br> Merci de réaliser une commande par livre !</p>
</head>
<body>

<form method="post" action="panier.php">
<table style="width: 400px">
<tr>
  
</tr>
<tr>
    <td>Quantité</td>
    <td>Prix Unitaire</td>
    <td>Action</td>
</tr>


<?php
if (creationPanier())
{
   $nbArticles=count($_SESSION['panier']['libelleProduit']);
   if ($nbArticles <= 0)
   echo "<tr><td>Panier vide</ td></tr>";
   else
   {
      for ($i=0 ;$i < $nbArticles ; $i++)
      {
         echo "<tr>";
         echo "<tr>";
         echo "<h1><td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td></h1>";
         echo "<h1><td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."€</td></h1>";
         echo "<h1><td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">Suprimer le livre</a></td></h1>";
         echo "</tr>";
      }

      echo "<tr><td colspan=\"2\"> </td>";
      echo "<td colspan=\"2\">";
      echo "Total : ".MontantGlobal()."€";
      echo "</td></tr>";

      echo "<tr><td colspan=\"4\">";
      echo "<input type=\"submit\" value=\"Actualiser\"/>";
      echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";
      echo "<br>";
    echo "<br>";

      echo "</td></tr>";
     
   }
}
?>
         </center>
     </table>
    </form>

   <center>
  <div class="bouton-aligne">
            <HR>
          </div>
   <?php  
   $number = $_GET['client'];   
   $titre = $_GET['t']; 
   $quantite = $_GET['q']; 
   echo'  
<form method="POST" action="valid.php">
<h1>Votre commande</h1>


<script>
function getRndInteger(min, max) {
return Math.floor(Math.random() * (max - min)) + min;
}
</script>
<br>
  <label style ="color:white">Numéro de commande (Génération automatique) </label><input readonly ="readonly" type="text" class="input-livre" name="nbcom" style ="color:black" id="nbcom" size="20">
    <br>
    <br>
<label style ="color:white">Votre numéro client (Si votre numéro client n\'apparait pas, vous pourrez associer votre commande plus tard,<br> retenez le numéro de commande qui vous sera fournit sur la page suivante !) </label> <input readonly ="readonly" type="number" name="client" class="input-livre"  id="client" value="'.$number.'">
  <br>
    <br>
  <label style ="color:white">Nom du livre commandé </label> <input type="text" readonly ="readonly class="input-livre" name="nomlivr" id="nomlivr"  size="40" value="'.$titre.'">
    <br>
    <br>
  <label style ="color:white">Quantité </label> <input type="text" readonly ="readonly class="input-livre" name="quantite" id="quantite"  size="10" value="'.$quantite.'">
  <br>
    <br>
    <label style ="color:white">Total du panier (€) </label> <input readonly ="readonly" type="text" class="input-livre" name="montant" size="10" id="montant" value="'.MontantGlobal().'">
      <br><div class="bouton-aligne">
            <HR>
          </div>
      <h1>Complétez vos informations</h1>
      <br>
    <label style ="color:white">Votre nom </label> <input type="text" class="input-livre" name="nom" id="nom" size="60">
  <br>
  <br><label style ="color:white">Votre prénom </label><input type="text" class="input-livre" name="prenom" id="prenom" size="60">
  <br>
  <br>
  <label style ="color:white">Adresse de livraison </label><input type="text" name="addresselivraison" class="input-livre" id="addresselivraison" size="80">
  <br>
  <br>
  <label style ="color:white">Adresse de facturation</label> <input type="text" class="input-livre" name="addressefactur" id="addressefactur" size="80">
  <br>
  <br>
  <label style ="color:white">Moyen de paiement (si chèque indiquez "Chèque") </label><input type="text" name="moyen" class="input-livre" id="moyen" size="30">
  <br>
  <br>
  <label style ="color:white">Numéro de carte bleue (si chèque : 000000)</label> <input type="text" name="numcarte" class="input-livre" id="numcarte" size="60">
   <br>
  <br>
<label style ="color:white">Date expiration (si chèque, date actuel)</label> <input type="date" name="datexp" class="input-livre" id="datexp" placeholder="AAAA/MM/JJ">
   <br>
  <br>
  <label style ="color:white">Cryptogramme (si chèque : 000)</label> <input type="password" name="crypto" class="input-livre" id="crypto" size="10">
  <br>';
  ?>
   <div class="bouton-aligne">
                   
              <br>
    <input  style ="color:black" type="submit" onclick="document.getElementById('nbcom').value = getRndInteger(100000,10000000)" value="Valider ma commande" class="bouton-livre" id="valid">
  <br> <br> <br> 
                    <HR>
               </div>
 
 </form> 

                  <center>

    
          <h1>Moyen de paiement accepté</h1>
                <br>
       <img src="img/cb.jpg"></img>
          <br>
            <p style="color: white;">Ou par Chèque (Par envoie postal, rallonge le délais de livraison)</p>
            <br>
      <div class="bouton-aligne">
            <HR>
          </div>
</center>

</body>
</html>