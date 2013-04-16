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
                $id_exercice = $_POST['id_exercice'];
        }
             if(!isset($error))
		{
			//log de mysql + password
			$cnx = mysql_connect( "localhost", "root", "" ) ;
			
			//sÃ©lection de la base de donnÃ©es:
			$db  = mysql_select_db( "salle_musculation" ) ;
			
			//chaine de caractÃ¨re de la requÃªte
                        $sql = "DELETE FROM effectuer WHERE id_exercice=".$id_exercice."" ;
	
			//insertion dans la base de donnÃ©es
			$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
			$sql = "DELETE FROM exercice WHERE id_exercice=".$id_exercice."" ;
	
			//insertion dans la base de donnÃ©es
			$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
                }   if($requete)
                {
                    header('location:exercices.php');
                }else
                {
                    header('location:formulaire_supprimer_exercice.php');
                    echo " votre insertion Ã  Ã©chouÃ©e";
                }

?>
		<div>
			<td><a href="exercices.php">
			<h4><img src="pictures/programmes.png" alt="Programmes" height="35px" width="40px" style="margin-bottom: -5px;" />&nbsp;&nbsp; 
			Les Exercices</h4>
			</a></td>
			</div>
		</tr>
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
