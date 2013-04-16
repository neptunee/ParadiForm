<!-- ---------------------------------------------------------- -->
<!--
  --
  -- forme.php
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
<title>Forme</title>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
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
	<?php include "header/header.php"; ?></div>
<div class="content">
	<h1>Forme</h1>
	<p>Découvrez ici les différentes méthodes de remise ou de maintien en forme, 
	accompagné ou en solo, des coachs sont à votre disposition sur du matériel de 
	qualité.</p>
	<p>Ci-dessous une présentation du mode de remise en forme en solo ou accompagnée 
	:</p>
	<table class="tableDisplayOption" style="margin:auto;">
		<tr>
			<div>
			<td style="padding:30px;"><a href="forme_accompagnee.php">
			<h2 style="color: #FFFFFF; text-align:center;">Accompagnée</h2>
			<img alt="cardio" class="cardio" height="" src="pictures/solo.png" width="320" />
			</a></td>
			</div>
			<div>
			<td style="padding:30px;"><a href="forme_solo.php">
			<h2 style="color: #FFFFFF; text-align:center;">En Solo</h2>
			<img alt="cardio" class="cardio" height="" src="pictures/accompagne.png" width="320" />
			</a></td>
			</div>
		</tr>
	</table>
</div>
<div class="footer">
	<?php include "footer/footer.php"; ?></div>

</body>

</html>
