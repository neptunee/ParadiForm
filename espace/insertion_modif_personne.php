<?php
	<?php
session_start();
if($_SESSION['type']=='abonne')
{
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=salle_musculation', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


if (isset ($_POST['Envoyer']) ) 
{
	if(isset($_POST['nom']))
		{
			$nom =htmlspecialchars ( $_POST["nom"]);
		}else $nom="";
		
	if($_POST["password"] = $_POST['password_verif'])
	{
		$password= $_POST['password'];
	}else
	{
		$errormdp = 'le mot de passe ne correspond pas';
	}
	}else $password="";
	if (isset($_POST['mail']))
		{
		$_POST['mail'] = htmlspecialchars($_POST['mail']);
	 
			if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['mail']))
			{
				$mail =  htmlspecialchars  ($_POST['mail']);
			}
			else
			{
				$error ='adresse Mail non valide';
			}
		}
		else
		{
			$mail="";
		}
		if(isset($_POST['adresse']))
		{
			$adresse =htmlspecialchars ( $_POST["adresse"]);
		}else $adresse="";
	if(isset($_POST['code_postal']))
		{
			$code_postal =htmlspecialchars ( $_POST["code_postal"]);
		}else $code_postal="";
	if(isset($_POST['ville']))
		{
			$ville =htmlspecialchars ( $_POST["ville"]);
		}else $ville="";
	if(isset($_POST['tel_portable']))
		{
			$tel_portable =htmlspecialchars ( $_POST["tel_portable"]);
		}else $tel_portable="";
	$tel_portable = $_POST["tel_portable"];

		if ($pseudo=="" || $password ==""|| $mail=="" || $adresse="" || $code_postal=="" ||$ville="" || $tel_portable=="" || )
		{
			$error ="L'un des champs est vide";
			
		}

    if(!isset($error))
	{
			$cnx = mysql_connect( "localhost", "root", "" ) ;
                        //insertion dans la base de données
                        $db  = mysql_select_db( "salle_musculation" ) ;
                        
                      
			//chaine de caractère de la requête
			    $sql = "UPDATE personne
		      
		      SET nom   = '$nom', 
		      password = '$password',
		      mail= '$mail',
		      adresse = '$adresse',
		      ville = '$ville',
		      tel_portable = '$tel_portable'
		      WHERE pseudo='".$_SESSION["pseudo"]."'";
        		
			$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;

			if($requete)
			{
				echo("L'insertion a &eacute;t&eacute; correctement effectu&eacute;e") ;
			}
			else
			{
			
			
				echo("L'insertion a &eacute;chou&eacute;e") ;
			
			}
	}	
     
}else{
    header('location:connexion.php');
    
}
?>