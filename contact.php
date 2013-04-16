<?php  
    define( 'MAIL_TO', /* >>>>> */'cherot-damien@hotmail.fr'/* <<<<< */ );  //ajouter votre courriel  
    define( 'MAIL_FROM', 'utilisateur@domaine.tld' ); // valeur par dÃ©faut  
    define( 'MAIL_OBJECT', 'objet du message' ); // valeur par dÃ©faut  
    define( 'MAIL_MESSAGE', 'votre message' ); // valeur par dÃ©faut  

    $mailSent = false; // drapeau qui aiguille l'affichage du formulaire OU du rÃ©capitulatif  
    $errors = array(); // tableau des erreurs de saisie  
      
    if( filter_has_var( INPUT_POST, 'send' ) ) {  
        $from = filter_input( INPUT_POST, 'from', FILTER_VALIDATE_EMAIL );  
        if( $from === NULL || $from === MAIL_FROM ) {  
            $errors[] = 'Vous devez renseigner votre adresse de courrier Ã©lectronique.';  
        } elseif( $from === false ) {  
            $errors[] = 'L\'adresse de courrier Ã©lectronique n\'est pas valide.';  
            $from = filter_input( INPUT_POST, 'from', FILTER_SANITIZE_EMAIL );  
        }  

        $object = filter_input( INPUT_POST, 'object', FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_HIGH | FILTER_FLAG_ENCODE_LOW );  
        if( $object === NULL OR $object === false OR empty( $object ) OR $object === MAIL_OBJECT ) {  
            $errors[] = 'Vous devez renseigner l\'objet.';  
        }  

        $message = filter_input( INPUT_POST, 'message', FILTER_UNSAFE_RAW );  
        if( $message === NULL OR $message === false OR empty( $message ) OR $message === MAIL_MESSAGE ) {  
            $errors[] = 'Vous devez Ã©crire un message.';  
        }  

        if( count( $errors ) === 0 ) {  
            if( mail( MAIL_TO, $object, $message, "From: $from\nReply-to: $from\n" ) ) {  
                $mailSent = true;  
            } else {  
                $errors[] = 'Votre message n\'a pas Ã©tÃ© envoyÃ©.';  
            }  
        }  
    } else {  
        $from = MAIL_FROM;  
        $object = MAIL_OBJECT;  
        $message = MAIL_MESSAGE;  
    }  
?> 


<!-- ---------------------------------------------------------- -->
<!--
  --
  -- contact.php
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
<title>Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta content="TRAN-NGUYEN" name="author" />
<meta content="Site de Enji TRAN NGUYEN" name="description" />
<meta content="enji, tran, nguyen, tran-nguyen" name="keywords" />
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link href="pictures/icone.png" rel="shortcut icon" type="image/x-icon" />
<link href="pictures/icone.png" rel="icon" type="image/x-icon" />
<link href="styles/styles.css" media="all" rel="stylesheet" type="text/css">
<link href="styles/menu.css" media="all" rel="stylesheet" type="text/css">
<style type="text/css">  
textarea{ 
	width:772px; 
	}  
label{ 
	display:block; 
	font-weight:bold; 
	}  
p#welcome{ 
	padding:10px 20px; 
	border: 1px #505050 solid;
	color:#FFFFFF; 
	font-weight:bold;
	font-size:12px;
	background: url(pictures/backgroundMenu.png) repeat top left; 
	text-align:center;
	width:280px;
	margin:auto;
	}  
ul{ 
	padding:10px 20px; 
	border:1px solid #f00; 
	color:#f00; 
	font-weight:bold; 
	list-style-type: none;
	margin:15px 5px 25px 5px;
	}  
p#success{ 
	padding:10px 20px; 
	border:1px dotted #0f0; 
	color:#0f0; 
	font-weight:bold; 
	}  
p em{ 
	display:block; 
	font-weight:normal; 
	}  
</style>  
<script src="javascript/jquery-1.3.2.js" type="text/javascript"></script>
<script src="javascript/menu.js" type="text/javascript"></script>
</head>

<body>

<div class="header">
	<?php include "header/header.php"; ?></div>
<div class="content">
        <h1>Contact</h1>  
  <?php  
    if( $mailSent === true ) 
    {  
?>  
        <p id="success">Votre message a bien Ã©tÃ© envoyÃ©.</p>  
        <p><strong>E-mail :</strong><br /><?php echo( $from ); ?></p>  
        <p><strong>Objet :</strong><br /><?php echo( $object ); ?></p>  
        <p><strong>Message :</strong><br /><?php echo( nl2br( htmlspecialchars( $message ) ) ); ?></p>  
<?php  
    }  
    else
    {  
        if( count( $errors ) !== 0 )  
        {  
            echo( "\t\t<ul>\n" );  
            foreach( $errors as $error )  
            {  
                echo( "\t\t\t<li>$error</li>\n" );  
            }  
            echo( "\t\t</ul>\n" );  
        }  
        else  
        {  
            echo( "\t\t<p id=\"welcome\"><em>Tous les champs sont obligatoires</em></p>\n" );  
        }  
?>  
        <form id='contact' style="margin-left:65px; margin-bottom:35px;" method="post" action="<?php echo( $_SERVER['REQUEST_URI'] ); ?>">  
            <p>  
                <label for="from">E-mail :</label>  
                <input type="text" name="from" id="from" value="<?php echo( $from ); ?>" />  
            </p>  
            <p>  
                <label for="object">Objet :</label>  
                <input type="text" name="object" id="object" value="<?php echo( $object ); ?>" />  
            </p>   
            <p style="margin-bottom:35px;">  
                <label for="message">Message :</label>  
                <textarea name="message" id="message" rows="20" cols="80"><?php echo( $message ); ?></textarea>  
            </p>  
            <p>  
                <input type="reset" name="reset" value="Effacer" />  
                <input type="submit" name="send" value="Envoyer" />  
            </p>  
        </form>  
<?php  
    }  
?>  
    </div>
<div class="footer">
	<?php include "footer/footer.php"; ?></div>

</body>

</html>