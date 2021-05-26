<?php
session_start ();
 include ("menumembre.php");
?>
<?php
session_unset ();
session_destroy ();
echo '<center><div class="bouton-aligne"><HR></div><h1>Vous êtes déconnecté, que faire ?</h1></center>';
echo '<center><a href="log.php" class="bouton">Reconnexion</a></center>';
echo '<br>';
echo '<center><a href="index.php" class="bouton">Acceuil du site</a></center>';
?>