<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>Action sur les livres</title>
  <link rel="stylesheet" type="text/css" href="css/css-page.css">
 </head>
 <body>
 	<?php include ("menu.php"); ?>
 	<center>
 	    <br>
 	    <button><a href="gestionadmin.php">Acceuil Gestion</a></button>
 	    <br>
 	    <div class="bouton-aligne">
 	<h1>Ajouter un livre</h1>
    <form method="post" action="ajouter_livre.php">
      <br>
      <br>
      <div class="texte2">
          <label>ISBN </label> <input type="text" name="isbn" class="input-livre" id="isbn">
          <br>
      <br>
        <label>Nom du livre </label> <input type="text" class="input-livre" name="titre" id="titre">
      <br>
      <br>
      <label>Auteur </label><input type="text" name="auteur" class="input-livre" id="auteur">
       <br>
      <br>
      <label>Editeur </label><input type="text" name="editeur" class="input-livre" id="editeur">
        <br>
      <br>
       <label>Année </label><input type="text" name="annee" class="input-livre" id="annee">
        <br>
      <br>
      <label>Genre </label><input type="text" name="genre" class="input-livre" id="genre">
        <br>
      <br>
      <label>Langue </label><input type="text" name="langue" class="input-livre" id="langue">
       <br>
      <br>
      <label>Nombre de Pages </label><input type="text" class="input-livre" name="nbpages" id="nbpages">
      <br>
      <br>
      <label>Prix </label> <input type="text" name="prix" class="input-livre" id="prix">
      <br>
      <br>
      <label>Date de parution </label> <input type="date" class="input-livre" name="date_parution" id="date_parution" value="AAAA-MM-JJ">
      <br>
      <br>
      <label>Description</label>
       <textarea name="description" id="description" style="height: 250px; width: 800px;"></textarea>
       <br>

       <!--<div class="bouton-aligne">-->
                       
                  <br>
        <input type="submit" value="Ajouter un livre" class="bouton-livre" id="ajoutLivre">
      <br>
       <br>
                        <HR>
                           
               <!--    </div> -->
     
     </form> 
      </div>
     <!-- <script>
          var ajoutLivre = document.getElementById("ajoutLivre");
          ajoutLivre.addEventListener("click", valider);
          function valider(){
            var nom = document.getElementById("nom");
            if(nom.value == ""){
              alert("Saisie imcomplète !");
            }else{
              nom.readOnly = true;
            }
          }
        </script>-->

      </div>
      <br>
      <div class="bouton-aligne">
      <h1>Supression d'un livre</h1>
     <!-- <h2>Bientôt de retour ! Le problème sera régler prochainement.</h2>-->
      <br>
      <form method="post" action="sup_livre.php">
      <div class="texte2">
     <label>ISBN </label> <input type="text" class="input-livre" name="isbn" id="isbn">
      <br>
      <!--<div class="bouton-aligne">-->
      <input type="submit" value="Suprimer le livre" class="bouton-livre" id="supLivres">
      <br>
                        <HR>
        <!--           </div>-->

      </div>
    </form>
     <!-- <script>
          var supLivres = document.getElementById("isbn");
          isbn.addEventListener("click", valider);
          function valider(){
            var nom = document.getElementById("isbn");
            if(nom.value == ""){
              alert("Saisie imcomplète !");
            }else{
              nom.readOnly = true;
            }
          }
        </script>-->
         <div class="bouton-aligne">
                      
                   <!--bouton de retour en haut-->
                   <a href="#">Haut de page</a>
                        <HR>
                   </div>
	</center>
	<!--<div class="bouton-aligne">
      <h1>Modifier un livre</h1>
      <br>
      <form method="post" action="modif_livre.php">
      <div class="texte2">
      <label>Nom du livre </label> <input type="text" class="input-livre" name="nom" id="titre">
      <br>
      <br>
      <label>Nombre de Pages </label><input type="text" class="input-livre" name="nbpages" id="nbpages">
      <br>
      <br>
      <label>Editeur </label><input type="text" name="editeur" class="input-livre" id="editeur">
      <br>
      <br>
      <label>Date de parution </label> <input type="date" class="input-livre" name="dteparu" id="date_parution">
      <br>
      <br>
      <label>Langue </label><input type="text" name="langue" class="input-livre" id="langue">
      <br>
      <br>
      <label>Genre </label> <input type="text" name="genre" class="input-livre" id="genre">
       <br>
      <br>
      <label>ISBN </label> <input type="text" name="isbn" class="input-livre" id="isbn">
       <br>
      <br>
      <label>Prix </label> <input type="text" name="prix" class="input-livre" id="prix">
      <br>
       <div class="bouton-aligne">
                       
                  <br>
      <input type="submit" value="Modifier" class="bouton-livre" id="modifLivre">
      <br>
                     <HR>    
                   </div>
      </div>
    </form>
      <script>
          var modifLivre = document.getElementById("modifLivre");
          modifLivre.addEventListener("click", valider);
          function valider(){
            var nom = document.getElementById("nom");
            if(nom.value == ""){
              alert("Saisie imcomplète !");
            }else{
              nom.readOnly = true;
            }
          }
        </script>
        </div>-->
        
 </body>
</html>