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
if($_SESSION['type']=='employe')
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
	<h1>Espace Administrateur</h1>
        <?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=salle_musculation', 'root', '');}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

if (isset ($_POST['Envoyer'])) 
{
			
		$titre = htmlspecialchars($_POST["titre"]);
		$definition= htmlspecialchars($_POST["definition"]);
		$fileName = sha1(rand(1, 100).time()) . '.jpg';
		$fileCopied = rename($_FILES['illustration']['tmp_name'], __DIR__.'/upload/'. $fileName);
}
		    
		    
		if(empty($poids))
		{
		    $error1="Veuillez indiquer un titre";
		}
		if(empty($definition))
		{
		    $error2="Indiquez la définition ";
		}
		if(!isset($error) and $fileCopied)
		{
			//log de mysql + password
			$cnx = mysql_connect( "localhost", "root", "" ) ;
			
			//sélection de la base de données:
			$db  = mysql_select_db( "salle_musculation" ) ;
			
			$sql = "INSERT INTO wiki (titre,definition,illustration) values ('$titre','$definition','$fileName')";
			
		//insertion dans la base de données
			$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;

			if($requete)
			{
				echo("L'insertion a &eacute;t&eacute; correctement effectu&eacute;e") ;
                                header('location:wiki.php');
			}
			else
			{
				echo("L'insertion a &eacute;chou&eacute;e") ;
			}
			
		}
		
		
?>
		
	</table>
</div>
<div class="footer">
	<?php
}else{
	header('location:connexion.php');
	include "footer/footer.php"; ?></div>
}

</body>

</html>
