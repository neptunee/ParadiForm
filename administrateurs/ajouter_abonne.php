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
<title>Connexion</title>
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
	<h1>abonnÃ©es</h1>
	<form action="insertion_personne.php" method="post" name="form1">
		<p><label for="prenom">Prénom : </label>
		<input id="prenom" name="prenom" type="text"> <?php if(isset ($_POST['Envoyer'])){if(empty($prenom))
		{echo $error1;}}?><br><label for="nom">Nom : </label>
		<input id="nom" name="nom" type="text"> <?php if(isset ($_POST['Envoyer'])){if(empty($nom))
		{echo $error2;}}?><br><label for="pseudo">pseudo : </label>
		<input id="pseudo" class="text" name="pseudo" type="text"> <?php 

	if(isset($error)){
		echo $error;
		}
	if(isset ($_POST['Envoyer'])){
		if(empty($pseudo))
		{
			echo $error3;
		}
		}?><br><label for="password">password : </label>
		<input id="mot_de_passe" class="text" name="password" type="password"> 6 
		caractÃ¨res minimum</label> <?php  if (isset ($_POST['Envoyer'] ))
	{
		if(isset ($errormdp))
		
	{
		echo $errormdp;
	}
	}
		if(isset ($_POST['Envoyer'])){if(empty($password))
		{echo $error4;}}?><br><label for="password_verif">retapez votre password 
		: </label>
		<input id="password_verif" class="text" name="password_verif" type="password">
		<?php if(isset ($_POST['Envoyer'])){if(empty($password_verif))
		{echo $error41;}}?><br><label for="mail">e-mail : </label>
		<input id="mail" class="text" name="mail" type="text"> <?php

	if(isset($error_mail)){
		echo $error_mail;
	}
	if(isset ($_POST['Envoyer'])){if(empty($mail))
		{echo $error5;}}
		?><br><br><label for="date de naissance">date de naissance : </label>
		<input id="date_de_naissance" name="date_naissance" type="date"> <?php if(isset ($_POST['Envoyer'])){if(empty($date_naissance))
		{echo $error6;}}?><br><input name="sexe" type="radio" value="homme"> Homme<br>
		<input name="sexe" type="radio" value="femme"> Femme<br>
		<label for="tel_portable">téléphone portable : </label>
		<input id="tel_portable" name="tel_portable" type="text"> <?php if(isset ($_POST['Envoyer'])){if(empty($adresse))
		{echo $error7;}}?><br><label for="adresse">adresse : </label>
		<input id="adresse" name="adresse" type="text"> <?php if(isset ($_POST['Envoyer'])){if(empty($adresse))
		{echo $error7;}}?><br><label for="code_postal">code postal : </label>
		<input id="code_postal" name="code_postal" type="text"> <?php if(isset ($_POST['Envoyer'])){if(empty($code_postal))
		{echo $error8;}}?><br><label for="ville">ville : </label>
		<input id="ville" "&gt;
<?php if(isset ($_POST['Envoyer'])){if(empty($ville))
		{echo $error9;}} ?><label for=" d'inscription"="" date="" name="ville" type="text">date d'inscription 
		: </label>
		<input id="date_inscription" name="date_inscription" type="date"> <?php if(isset ($_POST['Envoyer'])){if(empty($date_inscription))
		{echo $error12;}}?><br><label for="type">type : </label>
		<input name="type" type="radio" value="abonne"> Abonné <?php if(isset ($_POST['Envoyer'])){if(empty($type))
		{echo $error11;}}?><br><label for="parrain">parrain : </label>
		<input id="parrain" name="parrain" type="text"><br></p>
	</form>
	<form>
		<input id="btn" name="Envoyer" type="submit" value="Envoyer">
		<input name="reset" type="reset" value="annuler">
	</form>
</div>
<div class="footer">
	<?php
}else {
	header('location:connexion.php');
	include "footer/footer.php"; ?></div>
}

</body>

</html>
