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
	<html>
<?php
session_start();
if($_SESSION["type"] == 'employe')
{
?>
<body>

<form method="post" action="insertion_exercice.php">

	<LABEL for ="nom_ex">nom de l'exercice</LABEL><input type="text" id="nom_ex" name="nom_ex" ><br>
	<LABEL for ="commentaire">commentaire</LABEL><input type="text" id="commentaire" name="commentaire" ><br>
	<br> quel(s) muscle(s) est (sont) travaillé(s) </br>
	<br><input type="checkbox" name="muscle[]" value="biceps" id="1" /> <label for="1">
	biceps</label><br /><br/>
	<input type="checkbox" name="muscle[]" value="quadriceps" id="2" /> <label for="2">
	quadriceps</label><br /><br/>
	<input type="checkbox" name="muscle[]" value="pectoraux" id="3" /> <label for="3">
	pectoraux</label><br /><br/>
	<input type="checkbox" name="muscle[]" value="cuisses" id="4" /> <label for="4">
	cuisses</label><br /><br/>
	<input type="checkbox" name="muscle[]" value="mollets" id="5" /> <label for="5">
	mollets</label><br /><br/>
	<input type="checkbox" name="muscle[]" value="dos" id="6" /> <label for="6">
	dos</label><br /><br/>
	<input type="checkbox" name="muscle[]" value="abdominaux" id="7" /> <label for="7">
	abdominaux</label><br /><br/>
	<input type="checkbox" name="muscle[]" value="triceps" id="8" /> <label for="8">
	triceps</label><br /><br/>
	<input type="checkbox" name="muscle[]" value="epaules" id="9" /> <label for="9">
	&amp;eacutepaules</label><br /><br/>

	<input type="submit"  value = "Envoyer" name=" Envoyer">
	<input type="reset" value ="annuler" name="nom">

</form>
</body>
</html>
<?php
}else
{
    echo " vous n'avez pas accÃ¨s Ã  cette page";
    header('location:index.php');
    }
?>
</div>
<div class="footer">
	<?php
	}else{
		header('location:connexion.php');
	}
	include "footer/footer.php"; ?></div>

</body>

</html>