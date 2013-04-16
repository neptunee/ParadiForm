<!-- ---------------------------------------------------------- -->
<!--
  --
  -- connexion.php
  -- 
  -- Version : French
  --
  -- Copyright (c) 2012 Enji TRAN NGUYEN
  --
  -->
<!-- ---------------------------------------------------------- -->
<!DOCTYPE html>
		<?php
	session_start();
if($_SESSION['type']=='employe')
{
	?>
<html>

<head>
<title>Connexion</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta content="TRAN-NGUYEN" name="author" />
<meta content="Site de Enji TRAN NGUYEN" name="description" />
<meta content="enji, tran, nguyen, tran-nguyen" name="keywords" />
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link href="pictures/icone.png" rel="shortcut icon" type="image/x-icon" />
<link href="pictures/icone.png" rel="icon" type="image/x-icon" />
<link href="styles/styles.css" media="all" rel="stylesheet" type="text/css">
<link href="styles/menu.css" media="all" rel="stylesheet" type="text/css">
<script src="../javascript/jquery-1.3.2.js" type="text/javascript"></script>
<script src="javascript/menu.js" type="text/javascript"></script>
</head>

<body>

<div class="header">
	<?php include "header/header.php"; ?>
</div>

<div class="content">
	<h1>abonnés</h1>
        <?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=salle_musculation', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
//log de mysql + password
			$cnx = mysql_connect( "localhost", "root", "" ) ;
			
			//sélection de la base de données:
			$db  = mysql_select_db( "salle_musculation" ) ;	
 
// Si tout va bien, on peut continuer
 
// On récupère tout le contenu de la table exercice
$reponse = $bdd->query('SELECT * FROM wiki');
while ($donnee = $reponse->fetch())
{
echo   '<p><strong>' . ($donnee['titre']) . '</strong> : ' . ($donnee['definition']) . '</strong>
 : <img src="'.DIRECTORY_SEPARATOR.'ezrf'.DIRECTORY_SEPARATOR.'upload' . DIRECTORY_SEPARATOR .$donnee['illustration'] .'" /></p>';


 }
 ?>
</div>
<div class="footer">
	<?php
}else{
	header('location:connexion.php');
}
include "footer/footer.php"; ?></div>

</body>

</html>
