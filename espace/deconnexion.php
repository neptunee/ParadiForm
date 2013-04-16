<?php
// On écrase le tableau de session 
$_SESSION = array(); 

// On détruit la session 
session_destroy();

header('location:http://127.0.0.1/ParadiForm/ParadiForm/index.php');
?>