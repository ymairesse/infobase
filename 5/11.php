<!DOCTYPE html>

<html lang="fr">
<meta charset="UTF-8">
<head>
    <title> Exploration et maîtrise du clavier de l'ordinateur </title>
    <link rel="stylesheet" type="text/css" href="../../info.css" media="screen,print">
    <link rel="stylesheet" type="text/css" href="../../print.css" media="print">

</head>
<body>
<div id="conteneur">
	<?php require ("./top.inc.php");  ?>
	<div id="texte">
 <h2>La touche de tabulation</h2>
      <fieldset class="info">
              <legend>Où est la touche de tabulation?</legend>
        <p><img src="images/tab.gif" alt="TAB" class="imagegauche" height="32" width="56">Sur un clavier de machine à écrire, on disposait d'une touche de tabulation qui permettait de faire avancer le chariot de plusieurs caractères.</p>
        <p>Le clavier de l'ordinateur est muni d'une touche semblable.</p>
        <p>Il s'agit de la touche située à gauche du clavier et qui porte le dessin de deux flèches horizontales opposées. On note fréquemment <span class="clavier">Tab</span> pour désigner cette touche.</p>
      </fieldset>

      <fieldset class="info">
        <legend>À quoi sert la touche de tabulation?</legend>
        <p>Dans les programmes de <strong>traitement de textes,</strong> cette touche permet de faire avancer le curseur en une fois jusqu'à un prochain "taquet de tabulation". Grâce à cette touche, on peut aisément remplir des tableaux.&nbsp;</p>
        <p><strong>Dans les pages web</strong> et dans la plupart des applications, la touche de tabulation permet de passer d'un "&nbsp;<strong>champ</strong>&nbsp;" d'un formulaire au "&nbsp;<strong>champ</strong>&nbsp;" suivant.</p>
      </fieldset>
      
      <fieldset class="travail">
      <form action="javascript:void(0)" name="form4">
        <p>Tu vas découvrir ci-dessous un ensemble de 8 zones de texte. À cause d'un coup de vent, elles ont toutes été mélangées.</p>
        <ul>
          <li>Clique dans la zone notée notée "<strong>Zone n° 1</strong>";</li>
          <li>Lâche la souris et écarte-la de ta main; <strong>tu ne l'utiliseras pas pour la suite de l'exercice</strong>.</li>
          <li><strong>En frappant la touche de tabulation</strong>, tu vas ensuite faire passer le curseur dans chacune des 8 zones. Attention, il va se passer des choses étranges.</li>
        </ul>
        <p><input name="T1" size="20" tabindex="1" value="Zone n° 1" type="text">&nbsp;
        <input name="T12" size="20" tabindex="3" value="Zone n°" class="peuxPas type="text"></p>
        <p><input name="T12" size="20" tabindex="8" value="Zone n°" class="peuxPas type="text">&nbsp;
        <input name="T12" size="20" tabindex="2" value="Zone n°" class="peuxPas type="text"></p>
        <p><input name="T12" size="20" tabindex="6" value="Zone n°" class="peuxPas type="text">&nbsp;
        <input name="T12" size="20" tabindex="7" value="Zone n°" class="peuxPas type="text"></p>
        <p><input name="T12" size="20" tabindex="5" value="Zone n°" class="peuxPas type="text">&nbsp;
        <input name="T12" size="20" tabindex="4" value="Zone n°"  class="peuxPas type="text"></p>

        <ul>
          <li>Quand tu as parcouru les 8 zones, recommence l'exercice en indiquant son numéro d'ordre dans chacune des zones.</li>
        </ul>
        <p class="supplement">Il est parfois bien plus pratique d'utiliser la touche de tabulation que la souris pour passer d'une zone à l'autre.</p>
      </form>
      </fieldset>
      <fieldset class="info">
        <p>Pour revenir à la zone précédente, il suffit de frapper <strong>ensemble</strong> une touche <span class="clavier">Maj</span> et la touche <span class="clavier">Tab</span>.</p>
      </fieldset>
      
      <div class="travail">
        <ul>
          <li>Parcours les 8 zones de texte précédentes en arrière, en utilisant la combinaison <span class="clavier">Maj</span>&nbsp;+&nbsp;<span class="clavier">Tab</span>.</li>
        </ul>
      </div>
      
      <p>Quand tu as réalisé l'exercice proposé, présente-le au professeur puis passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
	  </div>
		<!-- id="texte" -->

	<!-- id="conteneur" -->
		<?php include ("../../pied.inc.php"); ?> 
	</div>
<script type="text/javascript">
    $(document).ready(function(){
        
        $(".peuxPas").click(function(){
              alert('On avait demandé de faire cet exercice uniquement avec la touche de tabulation');
            })
    })

</script>
</body>
</html>
