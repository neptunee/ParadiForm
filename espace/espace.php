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
	<p class="bonjour" style="margin-bottom:65px;">Bonjour </p>
	<p>Cette plateforme vous permet de gérer vos informations personnelles, vos 
	préférences et vos programmes.</p><br />
	<table class="tableDisplayOption">
		<tr>
			<div>
			<input type="button" name="voir_exos" value="voir les exercices " onclick="self.location.href='voir_exercice.php'" > </br>
			
			<td><a href="informations.php">
			<h4><img src="pictures/informations.png" alt="Informations" height="35px" width="40px" style="margin-bottom: -5px;" />&nbsp;&nbsp; 
			Mes Informations</h4>
			</a></td>
			</div>
			<div>
			<td><a href="programmes.php">
			<h4><img src="pictures/programmes.png" alt="Programmes" height="35px" width="40px" style="margin-bottom: -5px;" />&nbsp;&nbsp; 
			Mes Programmes</h4>
			</a></td>
			</div>
			<div>
			<td><a href="wiki.php">
			<h4><img src="pictures/programmes.png" alt="Programmes" height="35px" width="40px" style="margin-bottom: -5px;" />&nbsp;&nbsp; 
			wiki</h4>
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
