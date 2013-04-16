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
	<h1><img src="pictures/programmes.png" alt="Programmes" height="40px" width="45px" style="margin-bottom: -5px;" />&nbsp;&nbsp; 
	Programmes</h1>
	
	<table class="tableDisplayOption">
		<tr>
			<div>
			<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=salle_musculation', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query("SELECT * FROM programme where id_programme =".$_SESSION['id'].";");
while ($donnees = $reponse->fetch())
{
 ?><form method="post" action="delete_programme_perso.php">
  <input type="checkbox" value="<?php echo $donnees['id_programme'] ?>" name="id_programme"  id="id_programme"> <?php  echo $donnees['nom']; ?>
<?php
}
?>
<br>
<input type="submit" value ="Envoyer" name="Envoyer">
<input type="reset" value="annuler" name="annuler">
</div>
</tr>
</table>


</div>
<div class="footer">
	<?php
}else{
	header('location:index.php');
}
	include "footer/footer.php"; ?></div>

</body>

</html>