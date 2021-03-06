<!-- ---------------------------------------------------------- -->
<!--
  --
  -- site.php
  -- 
  -- Version : French
  --
  -- Copyright (c) 2012 Enji TRAN NGUYEN
  --
  -->
<!-- ---------------------------------------------------------- -->
<!DOCTYPE html>
<html>

<head>
<title>Le Site</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta content="TRAN-NGUYEN" name="author" />
<meta content="Site de Enji TRAN NGUYEN" name="description" />
<meta content="enji, tran, nguyen, tran-nguyen" name="keywords" />
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link href="pictures/icone.png" rel="shortcut icon" type="image/x-icon" />
<link href="pictures/icone.png" rel="icon" type="image/x-icon" />
<link href="styles/styles.css" media="all" rel="stylesheet" type="text/css">
<link href="styles/menu.css" media="all" rel="stylesheet" type="text/css">
<script src="javascript/jquery-1.3.2.js" type="text/javascript"></script>
<script src="javascript/menu.js" type="text/javascript"></script>
</head>

<body>

<div class="header">
	<?php include "header/header.php"; ?>
</div>

<div class="content">
	<h1>Le Site</h1>
	<div style="margin-top:110px; margin-left:50px;">
	<p><a href="index.php" class="t1">Accueil</a></p>
	<p><a href="presentation.php" class="t1">PrÃ©sentation</a></p>
	<p><a href="cours.php" class="t1">Cours</a></p>
	<p><a href="forme.php" class="t1">Formes</a></p>
	<p><a href="formules.php" class="t1">Formules</a></p>
	<p><a href="espace/connexion.php" class="t1">Mon Espace</a></p>
	</div>
</div>
<div class="footer">
	<?php include "footer/footer.php"; ?></div>

</body>

</html>
