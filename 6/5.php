<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Les programmes d'ordinateur</title>
  <script language="javascript" type="text/javascript">
function montrecache (bloc)
  {
  var obj = document.getElementById(bloc);
  if (obj.style.display == "none")
        obj.style.display = "block"
        else
        obj.style.display = "none";
  }
  </script>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>M�moire vive et m�moire morte</h2>
      <div class="info">
        <p><img class="imagedroite" style="width: 400px; height: 263px;" alt="Ordinateur au repos" src="images/dodo.jpg">La m�moire centrale de l'ordinateur fonctionne avec de l'�lectricit�! Quand le courant est �teint, la m�moire se vide enti�rement des  programmes et des donn�es qu'elle pouvait contenir.</p>
      </div>
      <p class="questions">Tout ceci me rend fort inquiet. Comment l'ordinateur peut-il m�me savoir comment d�marrer, s'il est compl�tement&nbsp;<a class="bulle" href="javascript:void(0)">amn�sique<span>On dit d'une personne qu'elle est amn�sique si elle a perdu la m�moire</span></a> � chaque r�veil&nbsp;?</p>
      <p class="reponses">La solution est simple. Dans l'ordinateur, on a implant� un composant contenant de la m�moire qui ne peut pas s'effacer. Donc, � son r�veil, l'ordinateur dispose de cette m�moire-l�.</p>
      
	  <fieldset class="info">
		<legend>Le BIOS</legend>
        <p>En fait, il existe, dans l'ordinateur, une puce qui est capable de retenir des informations, m�me si le courant est coup�: c'est le BIOS (acronyme signifiant " Basic Input Output System ").</p>
        <p>Sur l'illustration ci-dessous, on voit un BIOS (avec une �tiquette dor�e) fabriqu� par la soci�t� AMI parmi d'autres composants �lectroniques de l'ordinateur.</p><img src="images/rom.jpg" alt="BIOS" class="imagedroite" height="261" width="329">
        <p>Le <strong>BIOS</strong> contient quelques petits programmes tr�s simples qui permettent � l'ordinateur de " retenir " comment faire pour lire l'�tat des boutons de la souris, comment faire pour �crire � l'�cran, comment faire pour accepter des frappes au clavier, pour communiquer avec les disques,...</p> 
        <p><img src="images/tombe.gif" alt="M�moire ROM" class="imagegauche" height="155" width="160">Le BIOS contient des informations qui sont d�finies une fois pour toutes; elles ne peuvent jamais changer. On parle de <strong>m�moire morte</strong>.</p>
        <p>La m�moire morte est aussi appel�e " m�moire ROM ", de l'anglais " read only memory " (m�moire en lecture seule, dans laquelle il est impossible d'�crire).</p>
        <p>La m�moire centrale contient des informations qui peuvent changer continuellement. On parle de <strong>m�moire vive</strong>.</p>
        <div id="amorce" style="border: 1px solid blue; margin: 5px; padding: 5px; display: block; float: right; width: 14em; background-color: rgb(255, 255, 204);">
          Pour quelques infos suppl�mentaires, <span style="cursor: pointer; font-weight: bold; text-decoration: underline;" onclick="javascript:montrecache('supplement'); montrecache('amorce')">clique ICI</span>
        </div>
        <div id="supplement" style="border: 1px solid blue; margin: 5px; padding: 5px; display: none; cursor: pointer; background-color: rgb(255, 255, 204);" title="Cliquer pour cacher ce cadre" onclick="javascript:montrecache('supplement'); montrecache('amorce')">
          <p>Les informations donn�es ci-dessus ne sont pas tout � fait exactes. Le BIOS contient un type de m�moire qui n'est pas si morte que cela.<br>
          En r�alit�, il est souvent possible de modifier le contenu du BIOS. Cette op�ration est int�ressante lorsque les programmes contenus dans le BIOS ont �t� am�lior�s.</p>
          <p>L'op�ration est toutefois un peu risqu�e car, si l'ordinateur s'�teint pendant que la m�moire du BIOS est modifi�e, il se peut que le BIOS ne fonctionne plus et que l'ordinateur soit mis hors service.</p>
          <p class="questions">Je crois comprendre. C'est comme si le BIOS contenait une recette de cuisine (un programme). Si le courant se coupe pendant que la recette est chang�e, le BIOS contiendra un morceau de la nouvelle recette et un morceau de l'ancienne. Le plat risque d'�tre " sp�cial ".</p>
          <p class="reponses">C'est culinaire, mon cher Watson ! Mais c'est un peu cela.</p>
        </div>
        <p>La m�moire vive est aussi appel�e " m�moire RAM ", de l'anglais " random access memory " (m�moire � acc�s al�atoire, dans laquelle on peut acc�der � n'importe quel �l�ment choisi au hasard).</p>
      </fieldset>
      <p>Quand tu te sens pr�t(e) � r�pondre � quelques questions sur les pages qui pr�c�dent, passe � la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
	<?php include("../../pied.inc.php");?>
  </div>
</body>
</html>
