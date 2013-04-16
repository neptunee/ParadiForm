<!-- ---------------------------------------------------------- -->
<!--
  --
  -- programmes.php
  -- 
  -- Version : French
  --
  -- Copyright (c) 2012 Enji TRAN NGUYEN
  --
  -->
<!-- ---------------------------------------------------------- -->
<?php
session_start();
if($_SESSION["type"] == 'employe')
{
?>
<!DOCTYPE html>
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
<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=salle_musculation', 'root', '');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}

	if (isset ($_POST['Envoyer'])) 
	{
		$nom_ex =  htmlspecialchars($_POST["nom_ex"]);
		$commentaire = htmlspecialchars( $_POST["commentaire"]);
					
		$Muscles_concat = ""; //chaine de caractère qui récupère tous les muscles cochés en les séparant par un "."
			
		if (isset($_POST['muscle']))
		{
			$chkBoxMuscles = ($_POST['muscle']); //Récupère l'ensemble des checkbox cochées dans un tableau "$chkBoxMuscles"
		}
			
		$i = 0 ;
			
		while (isset($chkBoxMuscles[$i])) //Tant que $chkBoxMuscles[$i] existe, on fait le script
		{
			if ($i == 0) //Permet de concaténer correctement $Muscles_concat avec un "." entre chaques muscles
			{
				$Muscles_concat = $Muscles_concat."$chkBoxMuscles[$i]";
			}
			else
			{
				$Muscles_concat = $Muscles_concat."."."$chkBoxMuscles[$i]";
			}
			$i = $i + 1 ;
		}
			
		$biceps = '';
		$quadriceps='';
		$pectoraux='';
		$cuisses='';
		$mollets='';
		$dos='';
		$abdominaux='';
		$triceps='';
		$epaules='';
		
		$tableau_muscles = explode(".", $Muscles_concat); //récupère dans un tableau "$tableau_muscles" l'ensemble des données concaténées dans $Muscles_concat
		
		while ( $i != -1) 
		{
			if (isset($tableau_muscles[$i]))
			{
				if ($tableau_muscles[$i] == "biceps")
				{
					$biceps = "biceps";
				}
				if ($tableau_muscles[$i] == "quadriceps")
				{
					$quadriceps = "quadriceps";
				}
				if ($tableau_muscles[$i] == "pectoraux")
				{
					$pectoraux = "pectoraux";
				}
				if ($tableau_muscles[$i] == "cuisses")
				{
					$cuisses = "cuisses";
				}
				if ($tableau_muscles[$i] == "mollets")
				{
					$mollets = "mollets";
				}
				if ($tableau_muscles[$i] == "dos")
				{
					$dos = "dos";
				}
				if ($tableau_muscles[$i] == "abdominaux")
				{
					$abdominaux = "abdominaux";
				}
				if ($tableau_muscles[$i] == "triceps")
				{
					$triceps = "triceps";
				}
				if ($tableau_muscles[$i] == "epaules")
				{
					$epaules = "epaules";
				}
			}
				
			$i = $i - 1 ;
		}
		
		if(!isset($error))
		{
			//log de mysql + password
			$cnx = mysql_connect( "localhost", "root", "" ) ;
			
			//sélection de la base de données:
			$db  = mysql_select_db( "salle_musculation" ) ;
			
			//chaine de caractère de la requête
			$sql = "INSERT INTO exercice (nom, commentaire, biceps, quadriceps, pectoraux, cuisses, mollets, dos, abdominaux, triceps, epaules)
					VALUES ('$nom_ex','$commentaire','$biceps','$quadriceps','$pectoraux','$cuisses','$mollets','$dos','$abdominaux','$triceps','$epaules') " ;
	
			//insertion dans la base de données
			$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;

			if($requete)
			{
				echo("L'insertion a &eacute;t&eacute; correctement effectu&eacute;e") ;
			}
			else
			{
				echo("L'insertion a &eacute;chou&eacute;e") ;
			}
			
		}
		
	}
}else {
    
        header('location:connexion.php');
}
?>
</div>
<div class="footer">
	<?php include "footer/footer.php"; ?></div>

</body>

</html>