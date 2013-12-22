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
	<?php require ("./top.inc.php");  ?>
	<div id="texte">
			  <fieldset class="travail">
		<legend>Travail avec les touches d'effacement</legend>
		<p>Pour les questions suivantes, tu utiliseras la zone colorée en bleu ci-dessous. Si tu fais une fausse manœuvre, tu peux réinitialiser le texte en cliquant sur le bouton à droite</p>
		<form name="test" action="javascript:void(0)">
		<p style="text-align:center">
		  <input name="S1" style="padding: 5px; font-family: 'Courier New',Courier,mono; background-color: #8888ff; color:#ffffff" value="Il n'y a vraiment rien de très intéressant sur cette ligne." size="60" type="text"> 
		  <input type="reset" name="reset" value="Réinitialiser">
		</p>
		</form>
	  </fieldset>
	  
	  <fieldset class="qcu"><form action="javascript:void(0)" >
Amène le curseur devant la lettre " I " de "Il n'y a vraiment..." à la première ligne puis frappe la touche <img src="images/retour.gif" alt="Retour Arrière">.<br />
Que se passe-t-il?<br>
<input class="qcm" name="qcm1" type="radio">Rien du tout<br><p class="vrai">Exact.<br>Le curseur de texte devait se trouver devant le "I", première lettre du texte<br>Il n'y avait donc rien à effacer.</p>
<input class="qcm" name="qcm1" type="radio">Le " I " a été supprimé<br><p class="faux">Réponse fausse.<br>Tu as dû mal faire la manoeuvre. Vérifie que tu as bien utilisé la touche "Retour Arrière".<br>Essaie encore une fois en t'assurant que le curseur de texte se trouve bien à gauche de la lettre "I".<br>Clique sur OK et frappe la touche F5 pour recommencer.</p>
<input class="qcm" name="qcm1" type="radio">Je ne sais pas quelle est cette touche Retour arrière. <br><p class="faux">Retour arrière" est la touche marquée d'une flèche à gauche et qui se trouve en haut et à droite du clavier alphanumérique.<br>Revois la séquence de cours du haut de la page.</p>
<input class="qcm" name="qcm1" type="radio">L'ensemble du texte disparaît<br><p class="faux">Apparemment, tu n'as pas vraiment testé. La réponse est incorrecte.</p>
</form>
</fieldset>
	  
	  <fieldset class="qcu"><form action="javascript:void(0)" >
Amène le curseur à la fin de la ligne, derrière le point final, à l'aide de la touche END (Fin) puis frappe la touche Delete (Suppr) <img src="images/del.gif" alt="delete">.<br />
Que se passe-t-il?<br>
<input class="qcm" name="qcm1" type="radio">Rien du tout.<br><p class="vrai">Exact.<br>Le curseur de texte se trouvait derrière le dernier caractère.<br>Il n'y avait donc rien à effacer derrière lui.</p>
<input class="qcm" name="qcm1" type="radio">Le " . " final est supprimé.<br><p class="faux">Réponse fausse.<br>Tu as dû mal faire la manœuvre. Vérifie que tu as bien utilisé la touche "Delete" ("Suppr" pour les claviers français).<br>Essaie encore une fois en t'assurant que le curseur de texte se trouve bien à droite du "." final.</p>
<input class="qcm" name="qcm1" type="radio">Je ne sais pas quelle est cette touche " Delete "<br><p class="faux">"Delete" est la touche marquée "Delete" ou "Suppr" et qui se trouve à droite de la touche "Enter"</p>
<input class="qcm" name="qcm1" type="radio">L'ensemble du texte disparaît<br><p class="faux">Apparemment, tu n'as pas vraiment testé. La réponse est incorrecte.</p>
</form>
</fieldset>
	  
<fieldset class="qcu"><form action="javascript:void(0)" >
Vérifie que le curseur de texte est toujours derrière le point final.<br />
Frappe ensuite, cinq fois de suite, la touche Retour Arrière  <img src="images/retour.gif" alt="Retour Arrière">.<br />
Amène le curseur au début de la ligne à l'aide de la touche Home. Frappe ensuite, cinq fois de suite, la touche Delete  <img src="images/del.gif" alt="Delete">.<br />
Que reste-t-il de la phrase de départ? <br>
<input class="qcm" name="qcm1" type="radio">y a vraiment rien de très intéressant sur cette l<br><p class="vrai">Exact.<br>Cinq caractères manquent au début et 5 caractères manquent à la fin.</p>
<input class="qcm" name="qcm1" type="radio">Toute la phrase initiale<br><p class="faux">Non.<br>Une partie de la phrase a été supprimée, au début et à la fin.</p>
<input class="qcm" name="qcm1" type="radio">Tout a été effacé<br><p class="faux">Réponse fausse.<br>Tu as dû faire une fausse manœuvre ou frapper les touches d'effacement plus que 5 fois chacune</p>
</form>
</fieldset>

      <div class="travail">
        <ul>
          <li>Déplace le curseur à l'emplacement du "&nbsp;t&nbsp;" du mot incorrect "&nbsp;phtrase&nbsp;" dans le cadre suivant. Le curseur doit clignoter juste après le "&nbsp;h&nbsp;" et devant le "&nbsp;t&nbsp;".</li>
        </ul>
		
        <form action="">
          <div style="text-align:center">
            <input class="deleteOnly" name="T1" size="52" value="Il y a une faute dans cette phtrase." style="padding: 5px; background-color: rgb(0, 153, 255);" type="text">
            <div class="avertissement"></div><br>
            <input type="reset" name="reset" value="Remise à zéro">
          </div>
        </form>
        <ul>
          <li>Frappe la touche <span class="clavier">Delete</span> afin d'apporter la correction.</li>
          <li>En utilisant <strong>uniquement</strong> la touche <span class="clavier">Delete</span> et les touches de mouvements du curseur de texte, corrige les <strong>5 fautes d'orthographe</strong> du texte suivant:</li>
        </ul>
		
        <form action="javascript:void(0)" class="fautes5">
          <div style="text-align:center">
            <textarea class="deleteOnly S1" name="S1" rows="3" cols="65" style="padding: 5px; background-color: rgb(0, 153, 255);">Quand oon fait des fauutes d'orthographe avec un orrdinateur, ce n'est pass très grave, car on peutt toujours les corriger</textarea>
<div class="avertissement"></div><br>
			<input type="reset" name="reset" value="Remise à zéro"> <input type="submit" value="Vérifier">
          </div>
        </form>
        <p class="supplement">Il est important que tu apprennes à utiliser la touche <span class="clavier">Delete</span>. Ne fais pas l'exercice autrement.</p>
      </div>

	  
<div class="travail">
        <ul>
          <li>En utilisant la touche <span class="clavier">Retour Arrière</span>, corrige les 5 fautes d'orthographe du texte suivant:</li>
        </ul>
        <form action="javascript:void(0)" class="fautes5">
          <div style="text-align:center">
            <textarea class="backspaceOnly S1" name="S1" rows="3" cols="65" style="padding: 5px; background-color: rgb(0, 153, 255);">Quand oon fait des fauutes d'orthographe avec un orrdinateur, ce n'est pass très grave, car on peutt toujours les corriger</textarea>
			<div class="avertissement"></div>
		<input type="reset" name="reset" value="Remise à zéro"> <input type="submit" value="Vérifier">
          </div>
        </form>
        <p class="supplement">Il est important que tu apprennes à utiliser la touche <span class="clavier">Retour Arrière</span>. Ne fais pas l'exercice autrement.</p>
      </div>
	  
<p>Quand tu as répondu à toutes les questions, bien compris les réponses et que tu as réalisé les exercices, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
      
	  </div>
		<!-- id="texte" -->

	<!-- id="conteneur" -->
		<?php include ("../../pied.inc.php"); ?> 
	</div>
<script type="text/javascript">
	$(document).ready(function(){

	$(".qcm").click(function(){
	$(this).next().next().fadeIn(1000);
	})
	
	$(".qcm").attr("checked",false);

	$(".backspaceOnly").keydown(function(event){
		if (event.which == 46) {
			$(this).next().html("La touche 'Delete' n'est pas autorisée").css("background-color","red");
			return false;
			}
			else $(this).next().html("");
		})
		
	$(".deleteOnly").keydown(function(event){
		if (event.which == 8) {
			$(this).next().html("Le 'retour arrière' n'est pas autorisé").css("background-color","red");
			return false;
			}
			else $(this).next().html("");
		})

	$(".fautes5").submit(function(){
		var result = $(this).find(".S1").val();
		if (result != "Quand on fait des fautes d'orthographe avec un ordinateur, ce n'est pas très grave, car on peut toujours les corriger") {
			$(this).find(".S1").next(".avertissement").text("Ce n'est pas tout à fait correct");
			}
			else $(this).find(".S1").next(".avertissement").text("Très bien ;o)").css("background-color","green")
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
