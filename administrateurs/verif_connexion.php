<?php
session_start();

if (isset($_SESSION['pseudo']))
{
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
			
			//sélection de la base de données:
			$db  = mysql_select_db( "salle_musculation" ) ;	
// On regarde si l'utilisateur a bien utilisé le module de connexion pour traiter les données.
if(isset($_POST["Envoyer"])){

   // On regarde si tout les champs sont remplis. Sinon on lui affiche un message d'erreur.   
   if(($_POST['pseudo'] == '') OR ($_POST["password"] == '')){
      
      $error = TRUE;
      
      $errorMSG = "Vous devez remplir tout les champs !";
      
   }
   
   // Sinon si tout les champs sont remplis alors on regarde si le nom de compte rentré existe bien dans la base de données.
   else{
      
      $sql = "SELECT pseudo FROM employe WHERE password = '".$_POST["password"]."' ";
      
      $req = mysql_query($sql);
      
      // Si oui, on continue le script...      
      if($sql){
         
         // On sélectionne toute les données de l'utilisateur dans la base de données.   
         $sql = "SELECT * FROM employe WHERE pseudo = '".$_POST["pseudo"]."' AND password='".$_POST["password"]."' ";
		 
         $req = mysql_query($sql);
         
         // Si la requête SQL c'est bien passé...      
         if(mysql_affected_rows()){
         
            // On récupère toute les données de l'utilisateur dans la base de données.
            $donnees = mysql_fetch_assoc($req);
            
            // Si le mot de passe entré à la même valeur que celui de la base de données, on l'autorise a se connecter...         
            if($_POST["password"] == $donnees["password"])
	    {
		
               $connexionOK = TRUE;
               
               $connexionMSG = "Connexion au site réussie. Vous êtes désormais connecté !";
               
               $_SESSION["pseudo"] = $_POST["pseudo"];
               
               $_SESSION["password"] = $_POST["password"];
	       
            $MSG = "Connexion au site r&eacute;ussie. Vous &ecirc;tes d&eacute;sormais connect&eacute; !";
		
		echo $MSG;
			$reponse = $bdd->query("SELECT * FROM employe WHERE pseudo ='".$_SESSION["pseudo"]."'and password ='".$_SESSION["password"]."'");
	while ($donnees = $reponse->fetch())
		{
			
			$_SESSION["type"] = $donnees["type"];		
			$_SESSION["id"] = $donnees["id_abonne"];
			if($_SESSION["type"] == 'employe')
			{
				header('Location: espace.php');	
			}else{
				header('Location: connexion.php');
			}
			
		
		}
	
           	  
         }
         // Sinon on lui affiche un message d'erreur.      
         else{
         
            $error = TRUE;
         
            $errorMSG = "Nom de compte ou mot de passe incorrect !";
			
		header('Location: administrateurs/connexion.php');
		
	 }
      
      }
   
   }
   
}
}
}
else {
	header('location:connexion.php');
}
?>