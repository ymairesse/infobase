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
	<h2>Parcours dans le clavier, sans la souris</h2>
      <fieldset class="info">
        <legend>Utiliser le clavier</legend>
		<p><?php dewplay("14.mp3");?><span class="imagedroite"><img src="images/parkour.jpg" alt="parkour" title="Image: Marco Gomes"><br>
		<span class="micro">Origine de l'image<br> http://en.wikipedia.org/wiki/File:Parkour_-_Poliana.jpg</span>
		</span>
		Le "Parkour" est un sport extrême et très dangereux qui consiste à se déplacer en sautant des obstacles en milieu urbain. Sur cette page, on te propose de réaliser un "parkour" sur une page web. C'est un sporte extrême aussi, mais peu dangereux. Il se pratique à mains nues, sans souris, comme le vrai "Parkour".</p>
        <p>Pour démarrer le travail, fais un clic de souris dans la première zone (en jaune). <strong>Ensuite, écarte la souris de ta main et n'y touche plus avant d'avoir terminé l'exercice</strong>.</p>
		<p>Lis soigneusement toutes les consignes, une à une et fais ce qui est demandé. Bonne chance pour ton "parkour".</p>
	  </fieldset>
	  
	  <fieldset class="travail">
		<legend>Parkour en 28 étapes</legend>
      <form name="form" action="javascript:void(0)" id="parkour">
		<p>Si nécessaire, tu peux recommencer le parcours de zéro en cliquant sur le bouton <input type="reset" name="reset2" value="Réinitialiser" class="autorise reset">.</p>
        <p>Clique ici pour démarrer: <input type="text" size="20" name="input1" style="background-color:#ff0; color:#00a" value="Départ ici" class="autorise" id="depart"><span style="padding-left: 2em; color: red"></span></p>
        <ol>
			<li>Pour passer à la zone de texte suivante, frappe la touche de tabulation <img src="images/tab.gif" alt="Tab">.</li>
		</ol>
        <textarea style="margin-left: 3em" cols="80" rows="3" name="input2" id="input2">Le texte écrit ici n'est pas très intéressant. Il sert seulement pour l'exercice.</textarea>
        
        <ol start="2">
			<li>Si le curseur de texte ne se trouve pas devant le premier caractère, frappe la combinaison <span class="clavier">Ctrl</span>&nbsp;+&nbsp;<span class="clavier">Home</span>.</li>
	        <li>À l'aide de la combinaison <span class="clavier">Ctrl</span> + <span class="clavier">Flèche droite</span>, déplace le curseur de texte devant l'expression <strong style="color:red">très intéressant</strong> dans la zone ci-dessus.</li>
	        <li>À l'aide de la combinaison <span class="clavier">Ctrl</span> + <span class="clavier">Maj</span> + <span class="clavier">Flèche droite</span>, sélectionne l'expression <strong style="color:red">très intéressant</strong> dans la zone jaune.</li>
	        <li>À l'aide de la combinaison <span class="clavier">Ctrl</span> + <span class="clavier">c</span>, copie cette expression sélectionnée.</li>
	        <li>Pour passer à la zone de texte suivante, frappe la touche de tabulation <img src="images/tab.gif" alt="Tab">.</li>
        </ol>
        <textarea name="input3" cols="80" rows="3" style="margin-left: 3em">On apprend plein de choses sur le clavier. C'est ...</textarea>
        
        <ol start="7">
            <li>Si le curseur de texte ne se trouve pas devant le premier caractère, frappe la combinaison <span class="clavier">Ctrl</span> + <span class="clavier">Home</span>.</li>
            <li>À l'aide de la touche <span class="clavier">End</span>, place le curseur de texte derrière les "...".</li>
            <li>À l'aide d'une touche d'effacement, supprime ces "...".</li>
            <li>Par la combinaison de touches <span class="clavier">Ctrl</span> + <span class="clavier">v</span>, colle ce que tu avais copié plus haut à l'emplacement des points. La phrase doit devenir:</li>
        </ol>
        
        <cite style="font-weight:bold; text-align:right">On apprend plein de choses sur le clavier. C'est très intéressant</cite>
        <ol start="11">
			<li>Pour passer à la zone suivante, frappe la touche de tabulation <img src="images/tab.gif" alt="Tab">.</li>
			<li>Lis et exécute les consignes dans la zone jaune</li>
		</ol>

        <select name="input4" size="1">
            <option value="fb">Frappe la touche Flèche bas</option>
            <option value="fb2">Frappe encore une fois la touche flèche bas</option>
            <option value="fb3">Ça y est, tu es arrivé(e). Passe à la consigne suivante.</option>
        </select>
		
		<ol start="13">
			<li>Pour passer à la zone suivante, frappe la touche de tabulation <img src="images/tab.gif" alt="Tab">.</li>
			<li>Exécute les consignes dans la zone jaune</li>
		</ol>
		
        <select name="input4" size="3">
            <option value="fb">Frappe la touche Flèche bas</option>
            <option value="fb2">Frappe encore une fois la touche flèche bas</option>
			<option value="fb3">Frappe encore et toujours une fois la touche flèche bas</option>
            <option value="fb4">Ça y est, tu es encore arrivé(e). Passe à la consigne suivante.</option>
        </select>
        
		<ol start="15">
			<li>Pour passer à la zone suivante, frappe la touche de tabulation <img src="images/tab.gif" alt="Tab">.</li>
			<li>À l'aide de la touche <span class="clavier">Flèche gauche</span>, sélectionne la case "le chocolat"</li>
        </ol>
        <p>J'aime le chocolat<input type="radio" name="rd" value="chocolat" class="choco">
			les fruits <input type="radio" name="rd" value="fruits" class="choco">
			la saucisse <input type="radio" name="rd" valule="saucisse" checked="checked" class="choco"></p>
        
		<ol start="17">
            <li>À laide de la touche <span class="clavier">Flèche droite</span>, sélectionne la case "les fruits"</li>
			<li>Pour passer à la zone suivante, frappe la touche de tabulation <img src="images/tab.gif" alt="Tab">.</li>
			<li>Frappe la barre <span class="clavier">Espace</span> pour désélectionner le chocolat</li>
		</ol>
        <p>Pour mon dessert, je veux du chocolat <input type="checkbox" name="dessert[]" value="chocolat" checked="checked" class="choco"> <img src="images/tab.gif" alt="Tab">
        Des fruits <input type="checkbox" name="dessert[]" value="fruits" checked="checked" class="choco"> <img src="images/tab.gif" alt="Tab">
        De la saucisse <input type="checkbox" name="dessert[]" value="saucisse" checked="checked" class="choco">
        
        <ol start="20">
            <li>Frappe la touche de tabulation <img src="images/tab.gif" alt="Tab"> pour passer aux fruits</li>
            <li>Frappe la barre <span class="clavier">Espace</span> pour désélectionner les fruits</li>
            <li>Frappe la touche de tabulation <img src="images/tab.gif" alt="Tab"> pour passer à la saucisse</li>
            <li>Frappe la barre <span class="clavier">Espace</span> pour désélectionner la saucisse</li>
            <li>Frappe la combinaison <span class="clavier">Maj</span> + <img src="images/tab.gif" alt="Tab"></li>
            <li>Frappe la barre <span class="clavier">Espace</span> pour sélectionner les fruits</li>
            <li>Frappe la combinaison <span class="clavier">Maj</span> + <img src="images/tab.gif" alt="Tab"></li>
            <li>Frappe la barre <span class="clavier">Espace</span> pour sélectionner le chocolat</li>
			<li>Fin du "Parkour", montre ton travail au professeur</li>
        </ol>
        
        <input type="reset" name="reset" value="Réinitialiser" id="reset" class="autorise reset">
      </form>
      </fieldset>            
      <p>Quand tu as répondu à toutes les questions et bien compris les réponses, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>

	  </div>
		<!-- id="texte" -->

	<!-- id="conteneur" -->
		<?php include ("../../pied.inc.php"); ?> 
	</div>
<script type="text/javascript">
    var couleur = "#fff";
    
	$(document).ready(function(){

    
    $("input, textarea, select").focus(function(){
        $(this).css("background-color", "#ff0")
		$('html,body').animate({ scrollTop: $(this).offset().top - ( $(window).height() - $(this).outerHeight(true) ) / 2  }, 1000);
        })
	
    $("input, textarea, select").blur(function(){
        $(this).css("background-color", couleur);
        })
	
	$(".choco").focus(function(){
		$(this).parent().css("background-color","#afa")
		})
	
	$(".choco").blur(function(){
		$(this).parent().css("background-color",couleur)
		})
	
	$("input:text, textarea, select").not(".autorise").click(function(){
		alert("On avait dit \"sans la souris\". Tu triches...\nRetour à la case \"Départ\"");
		$("#reset").click();
		$("#depart").focus();		
		})
	
	$("#depart").click(function(){
		$(this).next("span").text("Bonne chance, jeune Padawan!!");
	})
	
	$(".reset").click(function(){
		$("#depart").focus();
		})
	
	


	})
</script>
</body>
</html>
