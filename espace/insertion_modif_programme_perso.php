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

if (isset($_SESSION['pseudo']))
{
    ?>
<html>

<head>
<title>Connexion</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><meta content="TRAN-NGUYEN" name="author" />
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
	<h1>Connexion</h1>
	
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
			
			$nom =  htmlspecialchars ($_POST["nom"]);
                        $muscle_travaille = $_POST["muscle_travaille"];
			$difficulte= $_POST["difficulte"];
			
			
			
		$Exercicess_concat = ""; //chaine de caractère qui récupère tous les muscles cochés en les séparant par un "."
			
		if (isset($_POST['exercices']))
		{
			$chkBoxExercicess = implode(',' , $_POST['exercices']); //Récupère l'ensemble des checkbox cochées dans un tableau "$chkBoxMuscles"
		}
		
		if(!isset($error))
		{
			//log de mysql + password
			$cnx = mysql_connect( "localhost", "root", "" ) ;
			
                        
			//sélection de la base de données:
			$db  = mysql_select_db( "salle_musculation" ) ;
			$sql = "select id_programme from programme where nom ='".$nom."'";
			$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
			$ligne = mysql_fetch_assoc($requete); 
			$id_programme = $ligne["id_programme"];
				 
			//chaine de caractère de la requête
			$sql = "UPDATE programme
                                SET nom = '$nom', 
                                muscle_travaille = '$muscle_travaille',
                                difficulte = '$difficulte',
                                type= '".$_SESSION['type']."' where id_programme =".$id_programme.";";
			
			//insertion dans la base de données
			$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;

			if($requete)
			{
				echo("L'insertion a &eacute;t&eacute; correctement effectu&eacute;e") ;
				//insertion des exercices dans la table effectuer
				
				for ($i = 0 ; $i<count($_POST['exercices']); $i++)
				{
				    if ($_POST['exercices'][$i]!=""){
                                        $sql="UPDATE effectuer set
                                        id_progamme = '$id_programme',
                                        id_exercice = '".$_POST['exercices']."' where id_programme =".$id_programme."*;";
				echo "<br/>".$sql;
				$resultat = mysql_query($sql);}
				header('location:espace.php');
                                echo "programme rempli avec succès";
				}
			}
			else
			{
				
				header('location: espace.php');
                                echo("L'insertion a &eacute;chou&eacute;e") ;
			}
			
		}
		
	}
        else {
            echo "rien n'est posté";
        }
}
else{
    header('location:connexion.php');
}
?>
</div>
<div class="footer">
	<?php include "footer/footer.php"; ?></div>

</body>

</html>