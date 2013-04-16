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
<html>

<head>
<title>Connexion</title>
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
	<?php include "header/header_index.php"; ?></div>
<div class="content">
	<h1>Connexion Employé©</h1>
	<form action="verif_connexion.php" method="post">
		<label for="pseudo">Identifiant : </label>
		<input id="pseudo" name="pseudo" type="text"><br><label for="password">
		Mot de Passe : </label><input id="password" name="password" type="password"><br>
		<input name="Envoyer" type="submit" value="Envoyer">
		<input name="reset" type="reset" value="Annuler">
	</form>
</div>
<div class="footer">
	<?php include "footer/footer.php"; ?></div>

</body>

</html>
