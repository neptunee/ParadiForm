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
<title>Gestion</title>
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
	<h1>Abonnés</h1>
<input type="button" name="ajouter_abonne" value="ajouter un abonnÃ©" onclick="self.location.href='ajouter_abonne.php'" > <br />
<input type="button" name="supprimer_abonne" value="supprimer un abonnÃ©" onclick="self.location.href='supprimer_abonne.php'" > <br />
<input type="button" name="voir_abonne" value="voir les abonnÃ©s" onclick="self.location.href='voir_abonne.php'" > <br />
</div>
<div class="footer">
	<?php
}else{
	header('location:connexion.php');
	include "footer/footer.php"; ?></div>
}

</body>

</html>
