<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
	var isRunning = false;
	
	  $("#start").click(function(){
		$("#bombe").show();
		$("#timer").html("").show();
		$("#image").addClass("image").removeClass("explosion").html("");
		isRunning = true;
		var compteur = 1;
		intId = window.setInterval(function(){
			if (isRunning) {
				if (compteur <= 10) {
					compteur++;
					$("#timer").html(11-compteur+" s");
					$("#image").html("<img src='images/bombe"+compteur+".png'>");
					}
					else {
						isRunning = false;
						$("#image").addClass("explosion").html("BAOUM");
						window.clearInterval(intId);
						}
				}
			},1000);
		
		});
		
	$(document).keydown(function(event){
		if (isRunning)
			if (event.which == 27) 
				Ouf();
		})
		
	function Ouf() {
	$("#bombe img").hide();
	$("#timer").hide();
	$("#image").html("OUF").addClass("explosion");
	if (intId != "") {
		window.clearInterval(intId);
		intId = "";
	}
	isRunning = false;
	}
  })
  </script>
  
  <style type="text/css">
#start {
	display: block;
	width: 12em;
	cursor:pointer;
	color: blue;
	border: 1px solid red;
	background-color: white;
	text-decoration: underline;
	}
	  
 
 #image {
	height: 96px;
	width: 100%;
	float: left;
	font-weight: bold;
	font-size: 3em;
	}
#timer {
	height: 2em;
	width: 3em;
	float: right;
	padding-top: 1em;
	font-size: 3em;
	background-color: yellow;
	color: red;
	font-weight: bold;
	text-align: center;
	}

.explosion {
	font-weight: bold;
	background-color: yellow;
	height: 86px;
	float: left;
	font-size: 3em;
	color: red;
	text-align:center;
	}
  
  </style>
  <title>Le clavier de l'ordinateur</title>
</head>
<body>			
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>La touche d'échappement</h2>
      <div class="info">
    <img src="images/esc.gif" alt="Escape" class="imagegauche" height="32" width="32">
      <p>La touche <span class="clavier">Esc</span> se trouve en haut et à gauche du clavier.</p>
      <p>Les claviers français sont un peu différents des claviers belges. Cette touche s'appelle alors <span class="clavier">Echap</span>. Quand on évoque la touche <span class="clavier">Echap</span> dans un manuel d'origine française, il s'agit de la touche <span class="clavier">Esc</span> des claviers belges.</p>
      <p>Le nom de la touche <span class="clavier">Esc</span> rappelle son rôle habituel:<br>
      "&nbsp;Esc&nbsp;" est l'abréviation de "&nbsp;escape&nbsp;" (prononcer "&nbsp;èsképe&nbsp;"); le verbe anglais "&nbsp;to escape&nbsp;" signifie "&nbsp;s'échapper&nbsp;".</p>
      <p>La touche <span class="clavier">Esc</span> sert généralement à quitter une partie de programme sans achever l'action en cours.</p>
      </div>
      <div class="interro">
		<p>Connais-tu un mot français commençant par "&nbsp;esc&nbsp;" et qui aurait un peu le même sens&nbsp;? En rapport avec les loisirs ou les vacances...</p>
      </div>
      <div class="travail">
		<p id="timer">10 s</p>
		<p>Ci-dessous, un petit exercice pour vérifier si tu es capable d'empêcher à temps l'autodestruction de l'ordinateur</p>
		<p>Attention, tu n'as que 10 secondes...</p>
		<p id="start">Clique ici pour démarrer le test</p>
		<div id="bombe" style="display: none; border:1px solid blue">
			<p>Frappe la touche <span class="clavier">ESC</span> avant l'explosion de l'ordinateur</p>
			<div id="image"></div>
			<div id="images" style="display:none">
			<!-- préchargement des images -->
			<img src="images/bombe1.png"><img src="images/bombe2.png"><img src="images/bombe3.png">
			<img src="images/bombe4.png"><img src="images/bombe5.png"><img src="images/bombe6.png">
			<img src="images/bombe7.png"><img src="images/bombe8.png"><img src="images/bombe8.png">
			<img src="images/bombe10.png">
		</div>
      </div>
      
      <p style="clear:both">Quand tu as accompli ta mission, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
