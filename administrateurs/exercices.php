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
if($_SESSION["type"] == 'employe')
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
	<h1><img src="pictures/programmes.png" alt="Programmes" height="40px" width="45px" style="margin-bottom: -5px;" />&nbsp;&nbsp; 
	Exercice
    </h1>
 </br>
<input type="button" name="ajouter_exercice" value="ajouter un exercice" onclick="self.location.href='ajouter_exercice.php'" > </br>
<input type="button" name="supprimer_exercice" value="supprimer un exercice" onclick="self.location.href='formulaire_supprimer_exercice.php'" > </br>
</div>
<div class="footer">
	<?php }else
        {
            echo "veuillez vous connecter";
            header('location:connexion.php');
            }
        
        include "footer/footer.php"; ?></div>

</body>

</html>
