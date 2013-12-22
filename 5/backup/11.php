<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Le clavier de l'ordinateur</title>
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
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>La touche de blocage des majuscules</h2>
      <div class="info">
        <p><img src="images/shlock.gif" alt="Shift lock" class="imagegauche" height="32" width="96">Le clavier alphanum�rique dispose d'une touche sp�ciale pour le bloquer en mode majuscules.&nbsp;</p>
        <p>Il s'agit d'une touche dispos�e � gauche du clavier au-dessus de la touche de majuscules; cette touche est marqu�e <span class="clavier">Caps&nbsp;Lock</span> ou <span class="clavier">Shift Lock</span>, selon le clavier.</p>
        <p><img src="images/numlock.png" alt="T�moin lumineux" class="imagedroite" height="40" width="150"> Le mode "&nbsp;majuscules bloqu�es&nbsp;" est mat�rialis� par l'allumage d'un petit t�moin lumineux situ� en haut et � droite du clavier sous l'inscription <strong>&lt;&nbsp;Caps&nbsp;&gt;</strong> ou <strong>&lt;&nbsp;Shift&nbsp;&gt;</strong>.</p>
      </div>
      
      <form action="" class="travail">
        <ul>
          <li>D�place le curseur de texte dans la ligne ci-dessous.</li>
        </ul>
        <p><input name="T1" size="52" style="padding: 5px; background-color: rgb(255, 255, 0); color: rgb(0, 0, 255); font-family: 'Courier New',Courier,mono;" type="text"></p>
        <ul>
          <li>En utilisant le clavier alphanum�rique, �cris la phrase suivante:<br>
          "&nbsp;IL FAIT FRAIS POUR LA SAISON&nbsp;"</li>
        </ul>
      </form>
      
      <div class="info">
        <p>Pour quitter le mode " majuscules bloqu�es ", il faut</p>
        <ul>
          <li>pousser une touche majuscule <strong>ou</strong></li>
          <li>pousser une nouvelle fois la touche "&nbsp;majuscules bloqu�es&nbsp;".</li>
        </ul>
        <p>La m�thode � utiliser d�pend de la fa�on dont l'ordinateur que l'on utilise a �t� configur�.</p>
        <p>V�rifie comment l'ordinateur que tu utilises est configur�: frapper encore une fois "Majsucules bloqu�es" ou simplement frapper une touche de majuscules.</p>
      </div>
      
      <form action="" method="post" name="form2" class="travail" id="form2">
        <ul>
          <li>Par un clic de souris, am�ne le curseur de texte dans la ligne ci-dessous.</li>
        </ul>
        <p><input name="T12" size="52" style="padding: 5px; background-color: rgb(255, 255, 0); color: rgb(0, 0, 255); font-family: 'Courier New',Courier,mono;" type="text"></p>
        <ul>
          <li>En bloquant et en d�bloquant le clavier du mode "&nbsp;majuscules bloqu�es&nbsp;", �cris la phrase suivante (en respectant MAJUSCULES et minuscules): "&nbsp;il FAIT frais POUR la SAISON&nbsp;".</li>
        </ul>
      </form>
      <div class="info">
        <p>La touche " majuscules bloqu�es " fait partie du groupe des touches " r�manentes ". Cette expression signifie que l'effet de la touche se poursuit apr�s que l'on ait frapp� celle-ci.</p>
      </div>
      <p>Quand tu as fini, passe � la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
