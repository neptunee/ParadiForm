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
	<h1>Espace Administrateurs</h1>
	<p class="bonjour" style="margin-bottom:65px;">Bonjour <?php echo "Bonjour"."!"?></p>
	<p>Cet plateforme vous permet de gÃ©rer la plateforme et les utilisateurs 
	abonnÃ©s.</p><br />
	<table class="tableDisplayOption">
		<tr>
			<div>
			<td><a href="abonnes.php">
			<h4><img src="pictures/informations.png" alt="Informations" height="35px" width="40px" style="margin-bottom: -5px;" />&nbsp;&nbsp; 
			Les AbonnÃ©s</h4>
			</a></td>
			</div>
			<div>
			<td><a href="programmes.php">
			<h4><img src="pictures/programmes.png" alt="Programmes" height="35px" width="40px" style="margin-bottom: -5px;" />&nbsp;&nbsp; 
			Les Programmes</h4>
			</a></td>
			</div>
		</tr>
		<tr>
		<div>
			<td><a href="exercices.php">
			<h4><img src="pictures/programmes.png" alt="Programmes" height="35px" width="40px" style="margin-bottom: -5px;" />&nbsp;&nbsp; 
			Les Exercices</h4>
			</a></td>
			<td><a href="wiki.php">
			<h4><img src="pictures/programmes.png" alt="Programmes" height="35px" width="40px" style="margin-bottom: -5px;" />&nbsp;&nbsp; 
			Wiki</h4>
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
