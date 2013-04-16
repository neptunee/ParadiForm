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
if($_SESSION['type']=='abonne')
{
	?>
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
	<?php include "header/headerConnexion.php"; ?></div>
<div class="content">
	<h1>Connexion Abonn�</h1>
	<link href="style_form.css" media="screen" rel="stylesheet" type="text/css" />
        <?php
session_start();

if($_SESSION["type"] == 'abonne')
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title></title>

	<link rel="stylesheet" type="text/css" media="screen" href="style_form.css" />

	<!--[if IE 7]><![endif]-->

</head>
<body>
<form method="post" action="insertion_donnee.php" >
<LABEL for="poids">votre poids  : </label><input type="text" id="poids" name ="poids"> <?php if(isset ($_POST['Envoyer'])){if(empty($poids))
		{echo $error1;}}?><br>
<LABEL for="taille">taille  : </label><input type="text" id="taille" name ="taille"> <?php if(isset ($_POST['Envoyer'])){if(empty($taille))
		{echo $error2;}}?><br>
<LABEL for="pb_sante">probleme de sante   : </label><input type="text" id="pb_sante" name ="pb_sante"><br>
<LABEL for="objectif">objectif   : </label><input type="text" id="objectif" name ="objectif"> <?php if(isset ($_POST['Envoyer'])){ if(empty($objectif))
		{echo $error3;}}?><br>
<LABEL for="date_saisie"> date de saisie</LABEL><input type="date" id="date_saisie"  name ="date_saisie" > <?php if(isset ($_POST['Envoyer'])){if(empty($date_saisie))
		{echo $error4;}}?><br>
<LABEL for="mensuration_bras">mensuration des bras : </label><input type="text" id="mensuration_bras" name ="mensuration_bras"><br>
<LABEL for="mensuration_cou">votre poids  : </label><input type="text" id="mensuration_cou" name ="mensuration_cou"><br>
<LABEL for="mensuration_epaules">mensuration epaules  : </label><input type="text" id="mensuration_epaules" name ="mensuration_epaules"><br>
<LABEL for="mensuration_poitrine">mensuration poitrine  : </label><input type="text" id="mensuration_poitrine" name ="mensuration_poitrine"><br>
<LABEL for="mensuration_taille">mensuration taille : </label><input type="text" id="mensuration_taille" name ="mensuration_taille"><br>
<LABEL for="mensuration_hanches">mensuration hanches : </label><input type="text" id="mensuration_hanches" name ="mensuration_hanches"><br>
<LABEL for="mensuration_cuisses">mensuration cuisses  : </label><input type="text" id="mensuration_cuisses" name ="mensuration_cuisses"><br>
<LABEL for="mensuration_mollets">mensuration mollets  : </label><input type="text" id="mensuration_mollets" name ="mensuration_mollets"><br>
<LABEL for="mensuration_avant_bras">mensuration avant bras  : </label><input type="text" id="mensuration_avant_bras" name ="mensuration_avant_bras"><br>
<input type="submit" value="Envoyer" name="Envoyer">
<input type="reset" name="reset" value="annuler">
</form>
</body>
</html>
<?php
}
else
{
	echo "vous n'avez pas acc�s � cette page";
}
?>
</div>

<div class="footer">
	<?php
}else {
	header('location:connexion.php');
	}
include "footer/footer.php"; ?></div>

</body>

</html>
