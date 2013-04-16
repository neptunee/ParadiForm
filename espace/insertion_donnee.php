<!-- ---------------------------------------------------------- -->
<!--
  --
  -- espace.php
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
if($_SESSION['type']=='abonne')
{
?>
<html>

<head>
<title>Espace</title>
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
	<?php include "header/header.php"; ?></div>
<div class="content">
	<h1>Espace Abonné</h1>
	<?php
session_start();
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=salle_musculation', 'root', '');}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

if (isset ($_POST['Envoyer'])) 
{
			
			$poids = $_POST["poids"];
			$taille=$_POST["taille"];
			$pb_sante=$_POST["pb_sante"];
			$objectif = $_POST["objectif"];
			$date_saisie = $_POST["date_saisie"];
			$mensuration_bras = $_POST["mensuration_bras"];
			$mensuration_cou = $_POST["mensuration_cou"];
			$mensuration_epaules = $_POST["mensuration_epaules"];
			$mensuration_poitrine = $_POST["mensuration_poitrine"];
			$mensuration_taille = $_POST["mensuration_taille"];
			$mensuration_hanches = $_POST["mensuration_hanches"];
			$mensuration_cuisses = $_POST["mensuration_cuisses"];
			$mensuration_mollets = $_POST["mensuration_mollets"];
			$mensuration_avant_bras = $_POST["mensuration_avant_bras"];
}
		if(empty($poids))
		{
		    $error1="Veuillez indiquer votre poids";
		}
		if(empty($taille))
		{
		   $error2 ="Veuillez renseigner votre taille";
		  
		}
		if(empty($objectif)){
		   $error3 ="Veuillez renseigner vos objectifs";
		  
		}
		if(empty($date_saisie))
		{
		   $error4 ="merci d'indiquer la date de votre saisie";
		}
		
		
			if(!isset($error) && !isset($error1) && !isset($error2) && !isset($error3) && !isset($error4))
		{
			//log de mysql + password
			$cnx = mysql_connect( "localhost", "root", "" ) ;
			
			//sélection de la base de données:
			$db  = mysql_select_db( "salle_musculation" ) ;
			
			$sql = "INSERT INTO donnee (poids,taille,pb_sante,objectif,date_saisie,mensuration_bras,mensuration_cou,mensuration_epaules,mensuration_poitrine,mensuration_taille,mensuration_hanches,mensuration_cuisses,mensuration_mollets,mensuration_avant_bras) 
				values ('$poids','$taille','$pb_sante','$objectif','$date_saisie','$mensuration_bras','$mensuration_cou','$mensuration_epaules','$mensuration_poitrine','$mensuration_taille','$mensuration_hanches','$mensuration_cuisses','$mensuration_mollets','$mensuration_avant_bras')
				where id_abonne ='".$_SESSION["id"]."'";
			
			//insertion dans la base de données
			$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;

			if($requete)
			{
				echo("L'insertion a &eacute;t&eacute; correctement effectu&eacute;e") ;
                                header('location:espace.php');
			}
			else
			{
				echo("L'insertion a &eacute;chou&eacute;e") ;
			}
			
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
