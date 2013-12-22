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
      <h2>Les touches de mouvement du curseur de texte: synthèse</h2>
      <form action="" class="qcu">
        Je voudrais ramener le curseur de texte au début de la ligne. Quelle touche de mouvement dois-je utiliser?<br>
        <input name="bt" class="qcm"  type="radio">Home<br>
        <p class="vrai">Réponse correcte</p>
        <input name="bt" class="qcm" type="radio">Flèche à gauche<br>
        <p class="faux">Il y a une meilleure réponse.<br>La flèche à gauche devra généralement être frappée plusieurs fois. Il y a plus simple</p>
        <input name="bt" class="qcm"  type="radio">Page Up<br>
        <p class="faux">Réponse fausse.<br>Page Up fait monter le curseur d'une page</p>
        <input name="bt"  class="qcm" type="radio">Num Lock<br>
        <p class="faux">Réponse fausse.<br>Num Lock n'est d'ailleurs pas une touche de mouvement du curseur</p>
      </form>
      <form class="qcu" action="">
        Je voudrais descendre le curseur d'une hauteur d'environ un écran. Quelle touche de mouvement dois-je utiliser?<br>
        <input name="bt" class="qcm" type="radio">Page Up<br>
        <p class="faux">Réponse fausse.<br>&quot;Up&quot; signifie &quot;en haut&quot;. Relis bien la question</p>
        <input name="bt" class="qcm" type="radio">Flèche à gauche<br>
        <p class="faux">Réponse fausse.<br>Le curseur va se déplacer vers la gauche</p>
        <input name="bt" class="qcm" type="radio" >Page Down<br>
        <p class="vrai">Réponse correcte.</p>
        <input name="bt" class="qcm" type="radio">Flèche haut<br>
        <p class="faux">Réponse fausse.<br>Le curseur va remonter d'une seule ligne</p>
      </form>
      <form class="qcu" action="">
        Pour déplacer le curseur de texte de trois caractères vers la droite, je dois utiliser la touche<br>
        <input name="bt" class="qcm" type="radio">Home<br>
        <p class="faux">Réponse fausse.<br>La touche Home provoque le déplacement jusqu'au début de la ligne</p>
        <input name="bt" class="qcm" type="radio">End<br>
        <p class="faux">Ce n'est pas une bonne réponse.<br>La touche End provoque le déplacement jusqu'à la fin de la ligne</p>
        <input name="bt" class="qcm" type="radio">La touche flèche droite<br>
        <p class="vrai">Réponse exacte.<br>Il faut frapper la touche trois fois</p>
        <input name="bt" class="qcm" type="radio">Num Lock<br>
        <p class="faux">Réponse fausse.<br>Cette touche ne provoque pas de mouvement du curseur de texte</p>
      </form>
      <form class="qcu" action="">
        Combien de touches de mouvement du curseur de textes existent sur le clavier?<br>
        <input name="bt" class="qcm" type="radio">Une seule<br>
        <p class="faux">Réponse fausse.<br>Il y en a bien plus</p>
        <input name="bt" class="qcm" type="radio">Quatre<br>
        <p class="faux">Réponse fausse.<br>Il y a bien quatre touches fléchées, mais il existe plus de touches de mouvement</p>
        <input name="bt" class="qcm" type="radio">Huit touches<br>
        <div class="vrai">Réponse correcte.<ul><li>les quatre touches fléchées</li><li>les deux touches Home et End</li><li>les deux touches PgUp et PgDn</li></ul></div>
        <input name="bt" class="qcm" type="radio">Une centaine<br>
        <p class="faux">Réponse fausse.<br>Le clavier compte une centaine de touches au total</p>
      </form>
      <p>Quand tu as répondu à toutes les questions et bien compris les réponses, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>

	  </div>
		<!-- id="texte" -->

	<!-- id="conteneur" -->
		<?php include ("../../pied.inc.php"); ?> 
	</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".qcm").click(function(){
			$(this).next().next().show(300);
		})

	$(".qcm").attr("checked",false);
	})
</script>
</body>
</html>
