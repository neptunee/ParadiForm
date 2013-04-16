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
	<?php
}else{
	header('location:connexion.php');
	include "header/header.php"; ?>
}
</div>

<div class="content">
	<h1>abonnÃ©es</h1>
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=salle_musculation', 'root', '');}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

if (isset ($_POST['Envoyer'])) 
{

	$prenom =htmlspecialchars ($_POST["prenom"]);
	$nom =htmlspecialchars ( $_POST["nom"]);
if(isset($_POST['pseudo']) && !empty($_POST['pseudo'])){
	$pseudo = htmlspecialchars( $_POST["pseudo"]);
}
else {
	$error='votre pseudo existe deja';
}
	if($_POST["password"] = $_POST['password_verif'])
	{
		$password= $_POST['password'];
	}else
	{
		$errormdp = 'le mot de passe ne correspond pas';
	}
	
	if (isset($_POST['mail']))
  {
    $_POST['mail'] = htmlspecialchars($_POST['mail']);
 
      if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['mail']))
        {
	$mail = $_POST["mail"];
	}else {
			$error_mail ='adresse Mail non valide';
			}
			}
	$date_naissance = $_POST["date_naissance"];
	$sexe = $_POST["sexe"];
	$adresse = htmlspecialchars ($_POST["adresse"]);
	$code_postal = $_POST["code_postal"];
	$ville = htmlspecialchars ($_POST["ville"]);
	$type = $_POST["type"];
	$date_inscription = $_POST["date_inscription"];
	$parrain = $_POST["parrain"];
	$tel_portable = $_POST["tel_portable"];
	
	
}	if(empty($prenom))
		{
		    $error1="Veuillez indiquer votre prenom";
		}
		if(empty($nom))
		{
		   $error2 ="Veuillez renseigner votre nom";
		  
		}
		if(empty($pseudo)){
		   $error3 ="Veuillez rentrer un pseudo";
		  
		}
		if(empty($password))
		{
		   $error4 ="merci d'indiquer un mot de passe";
		}
		if(empty($password_verif))
		{
			$error41="merci de mettre la vÃ©rification du mot de passe";
		}
		if(empty($mail))
		{
		    $error5="Veuillez indiquer votre adresse mail";
		}
		if(empty($date_naissance))
		{
		   $error6="Veuillez renseigner votre date de naissance";
		  
		}
		if(empty($adresse))
		{
		    $error7="veuillez entrer votre adresse";
		
		}  
		if(empty($code_postal)){
		   $error8="Veuillez renseigner votre code postal";
		  
		}
		if(empty($ville))
		{
		   $error9 ="merci d'indiquer la ville dans laquelle vous habitez";
		}
		
		if(empty($type)){
		   $error11 ="Veuillez renseigner ce champ";
		  
		}
		if(empty($date_inscription))
		{
		   $error12 ="la date d'inscription ";
		}
		if(empty($tel_portable))
		{
		   $error13 ="numero de portable ";
		}
    
	if(!isset($error) && !isset($error1) && !isset($error2) && !isset($error3) && !isset($error4) && !isset($error5) && !isset($error6) && !isset($error7) && !isset($error8) && !isset($error9) && !isset($error10) && !isset($error11) && !isset($error12))
	{
		//log de mysql + password
			$cnx = mysql_connect( "localhost", "root", "" ) ;
			
			//sÃ©lection de la base de donnÃ©es:
			$db  = mysql_select_db( "salle_musculation" ) ;
			
			//chaine de caractÃ¨re de la requÃªte
			
		$sql = "insert into abonne values ('','$nom','$password','$pseudo','$prenom','$date_naissance','$sexe','$adresse','$ville','$code_postal','$tel_portable','$mail','$type','$date_inscription','$parrain');";
		$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;

			if($requete)
			{
				header('location:abonnes.php');
				
			}
			 
	}else {
		include_once 'ajouter_abonne.php';
	}


?>	
</div>
<div class="footer">
	<?php include "footer/footer.php"; ?></div>

</body>

</html>
