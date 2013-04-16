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
{?>
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
        try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=salle_musculation', 'root', '');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
        $reponse = $bdd->query('SELECT * FROM exercice');
        while ($donnees = $reponse->fetch())
  {
    echo $donnees['nom']."-".$donnees['biceps'].$donnees['mollets'].$donnees['dos'].$donnees['triceps'].$donnees['pectoraux'].$donnees['epaules'].$donnees['cuisses'].$donnees['abdominaux'].$donnees['quadriceps']."-". $donnees['commentaire']."<br>";
  }
?>
</div>
</tr>
</table>
</div>
<div class="footer">
	<?php
}else{
	header('location:connexion.php');
}
	include "footer/footer.php"; ?></div>


</body>

</html>