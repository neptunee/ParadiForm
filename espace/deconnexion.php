<?php
// On �crase le tableau de session 
$_SESSION = array(); 

// On d�truit la session 
session_destroy();

header('location:http://127.0.0.1/ParadiForm/ParadiForm/index.php');
?>