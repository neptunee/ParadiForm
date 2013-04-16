<!-- ---------------------------------------------------------- -->
<!--
  --
  -- index.php
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
<title>Accueil</title>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta content="TRAN-NGUYEN" name="author" />
<meta content="Site de Enji TRAN NGUYEN" name="description" />
<meta content="enji, tran, nguyen, tran-nguyen" name="keywords" />
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link href="pictures/icone.png" rel="shortcut icon" type="image/x-icon" />
<link href="pictures/icone.png" rel="icon" type="image/x-icon" />
<link href="styles/styles.css" media="all" rel="stylesheet" type="text/css">
<link href="styles/menu.css" media="all" rel="stylesheet" type="text/css">
<script src="javascript/jquery-1.3.2.js" type="text/javascript"></script>
<script src="scripts/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="javascript/menu.js" type="text/javascript"></script>
<style type="text/css">
.contentHome {
width:900px;
	margin: auto;
	margin-top: 20px;
}
a.back {
	position: fixed;
	width: 150px;
	height: 27px;
	outline: none;
	bottom: 0px;
	left: 0px;
}
#content {
	margin: auto;
	margin-top: 5px;
	margin-bottom: -20px;
	width: 860px;
	min-height: 460px;
	border: 1px #505050 solid;
}
.reference {
	clear: both;
	width: 800px;
	margin: 30px auto;
}
.reference p a {
	text-transform: uppercase;
	text-shadow: 1px 1px 1px #fff;
	color: #666;
	text-decoration: none;
	font-size: 10px;
}
.reference p a:hover {
	color: #333;
}
</style>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<style type="text/css">
</style>
</head>

<body>

<div class="header">
	<?php include "header/header.php"; ?></div>
<div class="contentHome ">
		<div class="rotator">
			<ul id="rotmenu">
				<li><a href="rot1">Présentation</a>
				<div style="display: none;">
					<div class="info_image">
						1.png</div>
					<div class="info_heading">
						Présentation</div>
					<div class="info_description">
						Découvrez dans cette partie qui nous sommes, notre raison d'être et notre 
						intêret à vous satisfaire... <a class="more" href="presentation.php">En savoir plus</a> </div>
				</div>
				</li>
				<li><a href="rot2">Cours</a>
				<div style="display: none;">
					<div class="info_image">
						2.png</div>
					<div class="info_heading">
						Cours</div>
					<div class="info_description">
						Vous pourrez trouver ici comment agencer votre emploi du temps afin d'assister 
						à vos cours favoris... <a class="more" href="cours.php">En savoir plus</a> </div>
				</div>
				</li>
				<li><a href="rot3">Formes</a>
				<div style="display: none;">
					<div class="info_image">
						3.png</div>
					<div class="info_heading">
						Formes</div>
					<div class="info_description">
						Découvrez le mode de fonctionnement de votre centre de remise en forme 
						favoris...<a class="more" href="forme.php">En savoir plus</a> </div>
				</div>
				</li>
				<li><a href="rot4">Formules</a>
				<div style="display: none;">
					<div class="info_image">
						4.png</div>
					<div class="info_heading">
						Formules</div>
					<div class="info_description">
						Analysez ici la formule qui vous convient parfaitement. Du PASS'FORM Découverte au 
						PASS'FORM Liberté, choisissez l'offre qui vous convient...<a class="more" href="formules.php">En savoir plus</a> </div>
				</div>
				</li>
			</ul>
			<div id="rot1">
				<img alt="" class="bg" height="300" src="" width="800" />
				<div class="heading">
					<h1></h1>
				</div>
				<div class="description">
					<p></p>
				</div>
			</div>
		</div>
	</div>
	<!-- The JavaScript -->
	<script src="javascript/jquery.min.js" type="text/javascript"></script>
	<script src="javascript/jquery.easing.1.3.js" type="text/javascript"></script>
	<script type="text/javascript">
            $(function() {
                var current = 1;
                
                var iterate		= function(){
                    var i = parseInt(current+1);
                    var lis = $('#rotmenu').children('li').size();
                    if(i>lis) i = 1;
                    display($('#rotmenu li:nth-child('+i+')'));
                }
                display($('#rotmenu li:first'));
                var slidetime = setInterval(iterate,5000);
				
                $('#rotmenu li').bind('click',function(e){
                    clearTimeout(slidetime);
                    display($(this));
                    e.preventDefault();
                });
				
                function display(elem){
                    var $this 	= elem;
                    var repeat 	= false;
                    if(current == parseInt($this.index() + 1))
                        repeat = true;
					
                    if(!repeat)
                        $this.parent().find('li:nth-child('+current+') a').stop(true,true).animate({'marginRight':'-20px'},300,function(){
                            $(this).animate({'opacity':'0.7'},700);
                        });
					
                    current = parseInt($this.index() + 1);
					
                    var elem = $('a',$this);
                    
                        elem.stop(true,true).animate({'marginRight':'0px','opacity':'1.0'},300);
					
                    var info_elem = elem.next();
                    $('#rot1 .heading').animate({'left':'-420px'}, 500,'easeOutCirc',function(){
                        $('h1',$(this)).html(info_elem.find('.info_heading').html());
                        $(this).animate({'left':'0px'},400,'easeInOutQuad');
                    });
					
                    $('#rot1 .description').animate({'bottom':'-270px'},500,'easeOutCirc',function(){
                        $('p',$(this)).html(info_elem.find('.info_description').html());
                        $(this).animate({'bottom':'0px'},400,'easeInOutQuad');
                    })
                    $('#rot1').prepend(
                    $('<img/>',{
                        style	:	'opacity:0',
                        className : 'bg'
                    }).load(
                    function(){
                        $(this).animate({'opacity':'1'},600);
                        $('#rot1 img:first').next().animate({'opacity':'0'},700,function(){
                            $(this).remove();
                        });
                    }
                ).attr('src','pictures/slider/'+info_elem.find('.info_image').html()).attr('width','860').attr('height','460')
                );
                }
            });
        </script>

<div class="footer">
	<?php include "footer/footer.php"; ?></div>

</body>

</html>
