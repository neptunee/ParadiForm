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
<title>Gestion</title>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
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
	<form action="insertion_wiki.php" enctype="multipart/form-data" method="post">
		<label for="titre">titre : </label>
		<input id="titre" name="titre" type="titre"> <?php if(isset ($_POST['Envoyer'])){if(empty($titre)){echo $error1;}}?>
		<br><label for="definition">d&amp;eacutefinition : </label>
		<input id="definition" name="definition" type="definition"> <?php if(isset ($_POST['Envoyer'])){if(empty($definition)){echo $error2;}}?>
		<br><label for="illustration">illustration : </label>
		<input id="illustration" name="illustration" type="file"><br>
		<input name="Envoyer" type="submit" value="Envoyer">
		<input name="reset" type="submit" value="annuler">
	</form>
</div>
<div class="footer">
	<?php
}else{
	header('location:connexion.php');
	include "footer/footer.php"; ?></div>
}

</body>

</html>
