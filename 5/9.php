<!DOCTYPE html>

<html lang="fr">
<meta charset="UTF-8">
<head>
    <title> Exploration et maîtrise du clavier de l'ordinateur </title>
    <link rel="stylesheet" type="text/css" href="../../info.css" media="screen,print">
    <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
    <script type="text/javascript" src="../../js/jquery.js"></script>

</head>
<body>
<div id="conteneur">
	<?php
    require ("./top.inc.php");
    require ("../../dewplayer.inc.php");
    ?>
	<div id="texte">
      <h2>Les accents, le tréma " et le tilde ~</h2>
      
<fieldset class="info">
    <legend>L'accent circonflexe et le tréma</legend>
    <p><?php dewplay ("9.mp3");?>Les langues latines comme le français, l'espagnol, le portugais,... utilisent des accents sur certaines lettres.</p>
    <p>Ces lettres accentuées sont parfois disponibles directement sur le clavier ("é", "à", "ù",...). Dans d'autres cas, la lettre accentuée doit être composée en utilisant deux touches successivement.</p>
    <ol>
        <li>la touche qui porte l'accent</li>
        <li>la touche de la lettre que l'on veut accentuer</li>
    </ol>
    <p>Pour ajouter un <strong>accent circonflexe</strong> ou un <strong>tréma</strong> on utilise</p>
        <ul>
        <li>la touche <img src="images/accents.png" style="width: 32px; height: 32px;" alt="accent circonflexe, tréma" align="middle"> qui se trouve dans la partie droite du clavier alphanumérique belge <img src="images/be.png" style="width: 10px; height: 10px;" alt="be"> et français <img src="images/fr.png" style="width: 10px; height: 10px;" alt="be"> ou</li>
        <li>la touche <img src="images/accentsca.png" style="width: 32px; height: 32px;" alt="accent circonflexe, tréma CA" align="middle"> dans la partie droite du clavier alphanumérique canadien <img src="images/ca.png" style="width: 10px; height: 10px;" alt="ca">  francophone ou</li>
        <li>les touches <img src="images/accentsch.png" style="width: 32px; height: 32px;" alt="accent circonflexe CH" align="middle"> et <img src="images/tremach.png" style="width: 32px; height: 32px;" alt="accent tréma CH" align="middle"> dans la partie droite du clavier alphanumérique <img src="images/ch.png" style="width: 10px; height: 10px;" alt="ca"> suisse francophone.<br>
        </li>
        </ul>
</fieldset>
      
      <div class="travail">
      <p><?php dewplay("9a.mp3"); ?>Repère la touche qui permet d'écrire l'accent circonflexe sur ton clavier. Pour écrire un "<strong>ê</strong>", il faut</p>
	<ol>
		<li>Frapper brièvement la touche de l'accent circonflexe <strong>et la relâcher immédiatement</strong></li>
	</ol>
	<p class="supplement">RIEN NE SE PASSE. C'est normal.</p>
	  <ol start="2">
		<li>Frapper la touche <img src="images/Eeuro.png" style="width: 32px; height: 32px;" alt="E-Euro" align="middle">.</li>
	  </ol>
	<p class="supplement">La lettre <strong>ê</strong> munie d'un accent circonflexe apparaît.</p>

	<form action="javascript:void(0)" class="correction" name="form1">
        <input type="hidden" name="numero" value="1" class="numero">
		<ol start="3">
			<li>Écris le mot "<strong>Fête</strong>" (sans oublier la majuscule), dans la zone jaune ci-dessous.</li>
		</ol>
        <input size="15" style="background-color: yellow;" type="text" name="S1" class="S1" value="">
        <div class="avertissement"></div>
        <br>
        <input type="submit" value="Vérifier" name="submit">
    </form>
    
    <form action="javascript:void(0)" class="correction" name="form2">
        <input type="hidden" name="numero" value="2" class="numero">
        <ol start="4">
			<li>Écris maintenant les mots suivants: <strong>âme abîme fût rôle</strong></li>
		</ol>
		<input size="40" style="background-color: yellow;" type="text" name="S1" class="S1" value="">
        <div class="avertissement"></div>
            <br>
        <input type="submit" value="Vérifier" name="submit">
    </form>
    </div>
      
      
      <fieldset class="info">
        <legend>Le tréma</legend>
        <p>Le tréma s'obtient d'une façon semblable.</p>
		<p>Mais, sur les claviers belges, français et canadiens, le tréma se trouve en position supérieure de la touche <img src="images/accents.png" style="width: 32px; height: 32px;" alt="accent circonflexe, tréma" align="middle">. On l'obtient donc en frappant cette touche en même temps qu'<strong>une des touches de majuscules</strong>.</p>
      </fieldset>
      
		<fieldset class="travail">
		<p><?php dewplay("9c.mp3") ?>Repère la touche qui permet d'écrire un tréma sur ton clavier.</p>
        <p>Pour écrire un <strong>e</strong> avec un <strong>tréma</strong>, comme dans le nom de Raphaël</p>
        <ol>
			<li>Si nécessaire (<img src="images/be.png" style="width: 10px; height: 10px;" alt="be">, <img style="width: 10px; height: 10px;" src="images/ca.png" alt="ca"> et <img src="images/fr.png" style="width: 10px; height: 10px;" alt="fr">)&nbsp; maintiens l'une des touches de majuscules enfoncées (attention, <strong>pas</strong> la touche <strong>Majuscules bloquées</strong>)</li>
			<li>Frappe brièvement la touche qui porte le tréma <strong>et relâche-la immédiatement</strong></li>
            <li>Lâche également la touche de majuscules</li>
		</ol>
		<p class="supplement">RIEN NE SE PASSE. C'est normal.</p>
		<ol start="3">
			<li>Frappe la touche <img src="images/Eeuro.png" style="width: 32px; height: 32px;" alt="E-Euro" align="middle">.</li>
		</ol>
        <p class="supplement">La lettre <strong>ë</strong> munie d'un tréma apparaît.</p>
        <ol start="4">
          <li>Écris maintenant la suite de lettres suivante dans la zone jaune ci-dessous: <strong>ä ï ü ö</strong> (n'oublie pas l'espace entre les lettres)</li>
        </ol>
        <form action="javascript:void(0)" class="correction" name="form3">
            <input type="hidden" name="numero" value="3" class="numero">
        <input size="15" style="background-color: yellow;" type="text" class="S1" name="S1">
            <div class="avertissement"></div><br>
            <input type="submit" value="Vérifier" name="submit">
        </form>
      </fieldset>
        
      
	<fieldset class="info">
        <legend>Le tilde</legend>
		<p>Le <strong>tilde</strong> est plutôt rare en français, mais fréquent en espagnol et en portugais, ainsi que dans certains noms propres de personnes de la même origine.</p>
	</fieldset>
    
	<fieldset class="travail">
		<p><img src="images/canyon.jpg" style="width: 150px; height: 200px;" title="Auteur de l'image: http://www.flickr.com/photos/tychomoon/ (licence Cc)" class="imagedroite" alt="le cañon">Pour écrire un <strong>a</strong> avec un <strong>tilde</strong> comme dans le nom de <strong>João</strong></p>
		<ol>
		<li>Maintiens la touche <span class="clavier">AltGr</span> enfoncée</li>
		<li>Frappe brièvement la touche
			<ul>
				<li><img src="images/tilde.png" class="supplement" style="width: 32px; height: 33px;" alt="accent circonflexe, tréma" align="middle"> (pour un clavier belge francophone <img src="images/be.png" style="width: 10px; height: 10px;" alt="be">) </li>
				<li><img src="images/tildefr.png" class="supplement" style="width: 32px; height: 32px;" alt="accent circonflexe, tréma" align="middle"> (pour un clavier français <img src="images/fr.png" style="width: 10px; height: 10px;" alt="fr">)</li>
				<li><img src="images/tildech.png" class="supplement" style="width: 32px; height: 33px;" alt="accent circonflexe, tréma" align="middle"> (pour un clavier suisse francophone <img src="images/ch.png" style="width: 10px; height: 10px;" alt="ch">)</li>
				<li><img src="images/tildeca.png" class="supplement" style="width: 32px; height: 33px;" alt="accent circonflexe, tréma" align="middle"> (pour un clavier canadien francophone <img src="images/ca.png" style="width: 10px; height: 10px;" alt="ca">)</li>
			</ul>
		<strong>et relâche-la immédiatement</strong></li>
		<li>lâche également la touche <span class="clavier">AltGr</span></li>
		<li>frappe la touche <img src="images/lettreA.png" style="width: 32px; height: 32px;" alt="touche A" align="middle">.</li>
		<li>écris maintenant l'expression <br>
            <strong>"mon&nbsp;ami&nbsp;João&nbsp;habite&nbsp;dans&nbsp;le&nbsp;cañon.&nbsp;Il&nbsp;a&nbsp;passé&nbsp;Noël&nbsp;dans&nbsp;son&nbsp;canoë.&nbsp;Est-il&nbsp;bête?</strong>",<br>
            sans les guillemets et en respectant parfaitement la ponctuation et les espaces.</li>
		</ol>
		<form action="javascript:void(0)" class="correction" name="form4">
            <input type="hidden" name="numero" value="4" class="numero">
			<input size="55" style="background-color: yellow;" type="text" class="S1">
            <div class="avertissement"></div><br>
            <input type="submit" value="Vérifier" name="submit">
		</form>
	</fieldset>
    
    
	<fieldset class="info">
        <legend>Les autres caractères accentués</legend>
		<p>Certaines lettres accentuées ne figurent pas sur les claviers francophones.</p>
		<ol>
		<li>les lettres accentuées en majuscules: <strong>&Eacute; &Egrave; &Agrave; &Ugrave;</strong></li>
		<li>les lettres accentuées qui n'existent pas en français: <strong>&aacute;, &oacute;, &uacute;,...</strong></li>
		</ol>
		<h4>Sous Linux</h4>
		<p>Sous <strong>Linux</strong>, pour obtenir les caractères accentués majuscules, il suffit d'activer la touche <img src="images/capslock.png" style="width: 64px; height: 32px;" alt="Caps Lock" align="middle"> et de frapper la touche qui porte la lettre minuscule correspondante.<br>
        Par exemple, <img src="images/eaccentaigu.png" style="width: 32px; height: 32px;" alt="2 é @" align="middle"> produit un <strong>&Eacute;</strong> si la touche <img src="images/capslock.png" style="width: 64px; height: 32px;" alt="Caps Lock" align="middle"> est activée.</p>
		<h4>Dans tous les cas</h4>
		<p>Dans tous les cas, on peut obtenir les accents grave et aigu en utilisant les touches qui présentent ces accents isolés.</p>
		<p>Sur les claviers belges francophones <img src="images/be.png" style="width: 10px; height: 10px;" alt="be">, ces touches sont <img src="images/accgrave.png" style="width: 32px; height: 32px;" alt="accent grave" align="middle"> et <img src="images/accaigu.png" style="width: 32px; height: 32px;" alt="accent grave" align="middle">. Elles s'utilisent de la même manière que la touche d'accent circonflexe <img src="images/accents.png" style="width: 32px; height: 32px;" alt="accent circonflexe, tréma" align="middle"> (d'abord l'accent puis la lettre qui doit être accentuée).</p>
		<p>Si tu utilises un autre clavier, cherche où se trouvent les touches qui permettent d'écrire les accents graves et aigus.</p>
	</fieldset>
      
      
      <p>Quand tu as réalisé et réussi les exercices proposés, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
	  </div>
		<!-- id="texte" -->

	<!-- id="conteneur" -->
		<?php include ("../../pied.inc.php"); ?> 
	</div>
<script type="text/javascript">
    var reponses = new Array();
    reponses[1] = "Fête";
    reponses[2] = "âme abîme fût rôle";
    reponses[3] = "ä ï ü ö";
    reponses[4] = "mon ami João habite dans le cañon. Il a passé Noël dans son canoë. Est-il bête?";
    
	$(document).ready(function(){
		$(".qcm").click(function(){
			$(this).next().next().show(300);
		})

	$(".qcm").attr("checked",false);
    

    
    $(".correction").submit(function(){
        var test = $(this);
        var result = $(this).find(".S1").val();
        var numCorrect = parseInt($(this).find(".numero").val());
        var correct = reponses[numCorrect];
        if (result != correct) {
            $(this).find(".S1").next(".avertissement").text("Ce n'est pas tout à fait correct");
			}
			else $(this).find(".S1").next(".avertissement").text("Très bien ;o)").css("background-color","green");
        })


	})
    

</script>
  <style type="text/css">
  .avertissement {
	  color: yellow;
	  background-color: red;
	  clear:both;
	  }
  
  </style>
  
</body>
</html>
