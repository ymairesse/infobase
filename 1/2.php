<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">

  <title>La console et les périphériques</title>
</head>
<body>
  <div id="conteneur">
    <?php 
		require ("./top.inc.php");
		require ("../../dewplayer.inc.php");
	?>
    <div id="texte">
      <fieldset class="info">
	  <legend>Etude de la console de jeux</legend>
	  <?php dewplay("2a.mp3");?> <img style="width: 250px; height: 287px; float: right;" alt="Consoles diverses"
      src="images/console.jpg">Une console de jeux est un ordinateur spécialisé dans le traitement des jeux. Elle contient exactement les mêmes types de composants qu'un ordinateur.</p>
      <ul>
        <li>Réfléchis bien et recherche l'ensemble des éléments qui composent une station de jeux, en plus de la console.</li>
        <li>Note tes idées.</li>
      </ul>
	  </fieldset>
	  
      <p class="questions">C'est quoi cette idée&nbsp;? Ne m'avait-on pas dit qu'il s'agit d'un cours d'informatique sérieux&nbsp;?</p>
      <p class="reponses">Pas d'inquiétude: il s'agit d'un cours d'informatique "sérieux". Nous allons simplement montrer qu'une station de jeux ressemble très fort à un ordinateur.</p>
      <p class="questions">Cool&nbsp;! Quand je joue, je fais de l'informatique? Je commence déjà à aimer ce cours, moi.</p>
      <fieldset class="info">
		<legend>Schéma de la station de jeux</legend>
		<p>L'ensemble constitué par la console de jeux et tous ses accessoires peut être schématisé comme sur le dessin ci-dessous.</p>
		<p style="text-align: center;"><img style="width: 378px; height: 378px;" alt="Station de jeu" src=  "images/gamestation.gif"></p>
	  </fieldset>
	  
      <p class="questions">Vous me faites bien rire! Vous trouvez que ça a l'air d'une console de jeux, ce dessin?</p>
      <p class="reponses">Disons qu'il s'agit d'une représentation symbolique et non d'une représentation fidèle, comme une photo. L'avantage est que nous voyons bien tous les éléments sans devoir les dessiner en détail.</p>

      <div class="encadre">
        <p>Chaque élément y est représenté selon <u><strong>une forme simple</strong></u>, plutôt que de dessiner une représentation fidèle.</p>
      </div>
      <fieldset class="info">
		<legend>Le sens des flèches</legend>
		<p><u><strong>Les flèches</strong></u> indiquent dans quel sens circulent les informations entre les différents composants.</p>
		<p>La flèche entre la console et la télévision indique que la console envoie des images vers l'écran de télévision.</p>
	  </fieldset>
	  
<form action="" class="qcu">
  Sur le schéma du  haut de la page, dans quel sens est orientée la flèche entre la console et l'écran de télévision?<br />
  <input class="qcm" name="qcm1" type="radio">
  Du haut vers le bas<br />
  <p class="faux">Réponse fausse. Regarde mieux le schéma.</p>
  <input class="qcm" name="qcm1" type="radio">
  Du bas vers le haut<br />
  <p class="vrai">Réponse correcte.</p>
  <input class="qcm" name="qcm1" type="radio">
  De la gauche vers la droite<br />
  <p class="faux">Du bas vers le haut</p>
  <input class="qcm" name="qcm1" type="radio">De la droite vers la gauche
  <br />
  <p class="faux">Du bas vers le haut</p>
</form>

	  
<form action="" class="qcu">
  Que signifie, à ton avis, la flèche double entre la console et la manette vibrante ?<br />
  <input class="qcm" name="qcm1" type="radio">
  Des informations circulent de la manette vers la console et inversement.<br />
  <p class="vrai">Cette réponse est correcte.
  La console envoie des ordres à la manette de manière à la faire vibrer.
  La manette indique à la console les manœuvres à effectuer dans le jeu.</p>
  <input class="qcm" name="qcm1" type="radio">
  Il s'agit d'une erreur dans le dessin.<br />
  <p class="faux">Non. Le dessin ne contient pas d'erreur à ce niveau.</p>
  <input class="qcm" name="qcm1" type="radio">
  La distance entre la manette vibrante et la console doit être aussi faible que possible.<br />
  <p class="faux">on. Les distances entre les différentes parties de la station de jeu ne sont pas illustrées ici.</p>
</form>


<form action="" class="qcu">
  Que signifie, à ton avis, la flèche entre le volant pour jeux automobiles et la console?<br />
  <input class="qcm" name="qcm1" type="radio">
  Des informations provenant du volant sont envoyées vers la console.<br />
  <p class="vrai">Exact.
  Le pilotage de la voiture est soumis aux ordres envoyés par le volant.</p>
  <input class="qcm" name="qcm1" type="radio">
  Des informations provenant de la console sont envoyées vers le volant.<br />
  <p class="faux">La console n'envoie pas d'informations au volant.<br>Si c'était le cas, il faudrait un autre type de flèche entre les deux dispositifs. Lequel?</p>
  <input class="qcm" name="qcm1" type="radio">
  Un fil relie la console et le volant.<br />
  <p class="faux">Réponse insuffisante.
  La ligne représente bien un fil ou un câble, mais que représente la flèche?</p>
</form>

	  
      <p class="interro">Peux-tu interpréter la forme des autres flèches dans ce schéma&nbsp;? Propose ta réponse oralement au professeur.</p>
	  <div class="encadre">
        <p>Le "<strong>centre nerveux</strong>" de la station de jeux est la <strong>console</strong>, parce que tous les appareils annexes y sont connectés.</p>
      </div>
      <p>Quand tu as bien compris toutes les informations données ici, passe à la page suivante.</p>
      <?php include ("../../suivant.inc.php");?>
    </div>
    <?php include ("../../pied.inc.php");?>
<script type="text/javascript">
	$(document).ready(function(){

	$(".qcm").click(function(){
	$(this).next().next().fadeIn(1000);
	})
	$(".qcm").attr("checked",false);
	
})
  </script>
  </div>
</body>
</html>
