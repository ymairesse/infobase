<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Le clavier de l'ordinateur</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Les touches de mouvement du curseur de texte: synth�se</h2>
      <form action="" class="qcu">
        Je voudrais ramener le curseur de texte au d�but de la ligne. Quelle touche de mouvement dois-je utiliser?<br>
        <input name="bt" class="qcm"  type="radio">Home<br>
        <p class="vrai">R�ponse correcte</p>
        <input name="bt" class="qcm" type="radio">Fl�che � gauche<br>
        <p class="faux">Il y a une meilleure r�ponse.<br>La fl�che � gauche devra g�n�ralement �tre frapp�e plusieurs fois. Il y a plus simple</p>
        <input name="bt" class="qcm"  type="radio">Page Up<br>
        <p class="faux">R�ponse fausse.<br>Page Up fait monter le curseur d'une page</p>
        <input name="bt"  class="qcm" type="radio">Num Lock<br>
        <p class="faux">R�ponse fausse.<br>Num Lock n'est d'ailleurs pas une touche de mouvement du curseur</p>
      </form>
      <form class="qcu" action="">
        Je voudrais descendre le curseur d'une hauteur d'environ un �cran. Quelle touche de mouvement dois-je utiliser?<br>
        <input name="bt" class="qcm" type="radio">Page Up<br>
        <p class="faux">R�ponse fausse.<br>&quot;Up&quot; signifie &quot;en haut&quot;. Relis bien la question</p>
        <input name="bt" class="qcm" type="radio">Fl�che � gauche<br>
        <p class="faux">R�ponse fausse.<br>Le curseur va se d�placer vers la gauche</p>
        <input name="bt" class="qcm" type="radio" >Page Down<br>
        <p class="vrai">R�ponse correcte.</p>
        <input name="bt" class="qcm" type="radio">Fl�che haut<br>
        <p class="faux">R�ponse fausse.<br>Le curseur va remonter d'une seule ligne</p>
      </form>
      <form class="qcu" action="">
        Pour d�placer le curseur de texte de trois caract�res vers la droite, je dois utiliser la touche<br>
        <input name="bt" class="qcm" type="radio">Home<br>
        <p class="faux">R�ponse fausse.<br>La touche Home provoque le d�placement jusqu'au d�but de la ligne</p>
        <input name="bt" class="qcm" type="radio">End<br>
        <p class="faux">Ce n'est pas une bonne r�ponse.<br>La touche End provoque le d�placement jusqu'� la fin de la ligne</p>
        <input name="bt" class="qcm" type="radio">La touche fl�che droite<br>
        <p class="vrai">R�ponse exacte.<br>Il faut frapper la touche trois fois</p>
        <input name="bt" class="qcm" type="radio">Num Lock<br>
        <p class="faux">R�ponse fausse.<br>Cette touche ne provoque pas de mouvement du curseur de texte</p>
      </form>
      <form class="qcu" action="">
        Combien de touches de mouvement du curseur de textes existent sur le clavier?<br>
        <input name="bt" class="qcm" type="radio">Une seule<br>
        <p class="faux">R�ponse fausse.<br>Il y en a bien plus</p>
        <input name="bt" class="qcm" type="radio">Quatre<br>
        <p class="faux">R�ponse fausse.<br>Il y a bien quatre touches fl�ch�es, mais il existe plus de touches de mouvement</p>
        <input name="bt" class="qcm" type="radio">Huit touches<br>
        <div class="vrai">R�ponse correcte.<ul><li>les quatre touches fl�ch�es</li><li>les deux touches Home et End</li><li>les deux touches PgUp et PgDn</li></ul></div>
        <input name="bt" class="qcm" type="radio">Une centaine<br>
        <p class="faux">R�ponse fausse.<br>Le clavier compte une centaine de touches au total</p>
      </form>
      <p>Quand tu as r�pondu � toutes les questions et bien compris les r�ponses, passe � la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
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
