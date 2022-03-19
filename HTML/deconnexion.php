<?php
// On appelle la session
require('basedonnée.php');
session_start();

// On écrase le tableau de session
$_SESSION = array();
unset($_SESSION);
// On détruit la session
session_destroy();
session_write_close();
// On redirige le visiteur vers la page d'accueil
header ('location: ../HTML/Acceuil.php');
die;
?>