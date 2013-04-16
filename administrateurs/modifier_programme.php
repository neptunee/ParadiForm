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
{?>
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
	<?php include "header/header.php"; ?>
</div>

<div class="content">
	<h1>Connexion</h1>
	
<?php
        try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=salle_musculation', 'root', '');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}

//log de mysql + password
			$cnx = mysql_connect( "localhost", "root", "" ) ;
			
			//sÃ©lection de la base de donnÃ©es:
			$db  = mysql_select_db( "salle_musculation" ) ;	
// On regarde si l'utilisateur a bien utilisÃ© le module de connexion pour traiter les donnÃ©es.
if(isset($_POST["Envoyer"]))
{
$id=  $_POST['idprogramme'];
$reponse = $bdd->query("SELECT * FROM programme where id_programme='".$id."'");
while ($donnees = $reponse->fetch())
{
?>
<form method="post" action="insertion_modif_programme.php">
<LABEL for="nom">nom : </LABEL><INPUT type="nom" id="nom" name ="nom" value="<?php echo $donnees['nom'];?>"><BR>
	ancien muscle travaillé <input type="text" name="ancien" value="<?php echo $donnees['muscle_travaille'];?>"> <br>
	nouveau muscle travaillé : <input type="radio" name="muscle_travaille" value="biceps"> 
	biceps </label><input type="radio" name="muscle_travaille" value="quadriceps"> 
	Quadriceps </label><input type="radio" name="muscle_travaille" value="muscle_travaille"> 
	pectoraux
<input type="radio" name="muscle_travaille" value="cuisses"> cuisses </label><input type="radio" name="muscle_travaille" value="mollets"> 
	mollets </label><input type="radio" name="muscle_travaille" value="dos"> dos
<input type="radio" name="muscle_travaille" value="abdominaux"> abdominaux </label><input type="radio" name="muscle_travaille" value="triceps"> 
	Triceps </label><input type="radio" name="muscle_travailles" value="epaules"> 
	epaules</br>

<label for ="difficulte">difficulté : </label><input type="radio" name="difficulte" value="facile"> 
	facile </label><input type="radio" name="difficulte" value="moyen"> moyen </label><input type="radio" name="difficulte" value="dur"> 
	dur <br>
 
<br>
<?php

echo "les exercices de ce programme ";
$reponse = $bdd->query("SELECT exercice.nom, exercice.id_exercice FROM exercice, effectuer where exercice.id_exercice=effectuer.id_exercice and id_programme='".$id."'");
while ($donnees = $reponse->fetch())
{
    echo "<br/> ".$donnees["nom"];
}
$reponse = $bdd -> query('SELECT * from exercice');
echo "<br> Quelles sont les nouveaux exercices ?";
while($donnees = $reponse->fetch())
{
	$muscle = $donnees['biceps'] ." ". $donnees['quadriceps']." ".$donnees['pectoraux']." ";
	$muscle .= $donnees['cuisses'] ." ". $donnees['mollets']." ". $donnees['dos']." ";
	$muscle .= $donnees['abdominaux'] ." ". $donnees['triceps']." ".$donnees['epaules']."	";
	
	

?>	
<input type="checkbox" name="exercices[]" id="exercices" value="<?php echo $donnees['id_exercice']; ?>" /> 
	<LABEL for="libelle"><?php echo $donnees['nom']; ?>
	<?php

}

}$reponse->closeCursor(); // Termine le traitement de la requÃªte
}

?>

</br><input type="submit" name="Envoyer" id="btn" value="Envoyer">
<input type="reset" name="reset" value="annuler">
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
