<!-- ---------------------------------------------------------- -->
<!--
  --
  -- informations.php
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
if ($_SESSION['type']=='abonne')
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
	<h1><img src="pictures/informations.png" alt="Informations" height="40px" width="45px" style="margin-bottom: -5px;" /> &nbsp; Informations</h1>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title></title>

	<link rel="stylesheet" type="text/css" media="screen" href="style_form.css" />

	<!--[if IE 7]><![endif]-->
<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=salle_musculation', 'root', '');}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query("SELECT * FROM abonne WHERE pseudo ='".$_SESSION["pseudo"]."'and password ='".$_SESSION["password"]."'");
while ($donnees = $reponse->fetch())
{
?>

	<link rel="stylesheet" type="text/css" media="screen" href="style_form.css" />

	<!--[if IE 7]><![endif]-->

<form method="post"  action="insertion_modif_personne.php">
    <p>
<label for="nom">nom : </label ><input type="text" id="nom" name="nom"  value ="<?php echo $donnees['nom']?>"> <br />
<label for="ancien_mot_de_passe">mot de passe actuel : </label ><input type="text" value ="<?php echo $donnees['password']?>"><br />
<label for="password" class="lblForm_en_ligne"> nouveau mot de passe : </label><input type="password" class="text" id="password" name ="password" >
		<label>6 caractères minimum</label>
		<?php  if (isset ($_POST['Envoyer'] ))
	{
		if(isset ($errormdp))
		
	{
		echo $errormdp;
	}
	}?><br />
<label for="password">retapez votre password : </label><input type="password" class="text" id="password_verif" name ="password_verif" ><br /><label for="mail" >adresse mail : </LABEL><INPUT type="text" class="text" id="mail" name ="mail" value ="<?php echo $donnees ['mail']?>" >
<?php

	if(isset($error_mail)){
		echo $error_mail;
        }
	
?><br />
<label for="adresse">adresse : </label><input type="text" id="adresse" name ="adresse"  value ="<?php echo $donnees['adresse']?>"><br />
<label for="ville">ville : </label><input type="text" id="ville" name ="ville" value ="<?php echo $donnees['ville']?>"><br />
<label for="code_postal">code postal : </label><input type="text" id="code_postal"  name ="code_postal" value ="<?php echo $donnees['code_postal']?>"><br />
<label for="tel_portable">Téléphone portable : </label><input type="text" id="tel_portable" name ="tel_portable" value ="<?php echo $donnees['tel_portable']?>">
<br />
</p>

<input type="submit" name="Envoyer" id="btn" value="Envoyer" >
<input type="reset" name="reset" value="annuler">
</form>

<?php
}
}else {
	header('location:connexion.php');
}
?>


</div>
<div class="footer">
	<?php include "footer/footer.php"; ?></div>

</body>

</html>
