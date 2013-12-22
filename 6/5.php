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
      <h2>Mémoire vive et mémoire morte</h2>
      <div class="info">
        <p><img class="imagedroite" style="width: 400px; height: 263px;" alt="Ordinateur au repos" src="images/dodo.jpg">La mémoire centrale de l'ordinateur fonctionne avec de l'électricité! Quand le courant est éteint, la mémoire se vide entièrement des  programmes et des données qu'elle pouvait contenir.</p>
      </div>
      <p class="questions">Tout ceci me rend fort inquiet. Comment l'ordinateur peut-il même savoir comment démarrer, s'il est complètement&nbsp;<a class="bulle" href="javascript:void(0)">amnésique<span>On dit d'une personne qu'elle est amnésique si elle a perdu la mémoire</span></a> à chaque réveil&nbsp;?</p>
      <p class="reponses">La solution est simple. Dans l'ordinateur, on a implanté un composant contenant de la mémoire qui ne peut pas s'effacer. Donc, à son réveil, l'ordinateur dispose de cette mémoire-là.</p>
      
	  <fieldset class="info">
		<legend>Le BIOS</legend>
        <p>En fait, il existe, dans l'ordinateur, une puce qui est capable de retenir des informations, même si le courant est coupé: c'est le BIOS (acronyme signifiant " Basic Input Output System ").</p>
        <p>Sur l'illustration ci-dessous, on voit un BIOS (avec une étiquette dorée) fabriqué par la société AMI parmi d'autres composants électroniques de l'ordinateur.</p><img src="images/rom.jpg" alt="BIOS" class="imagedroite" height="261" width="329">
        <p>Le <strong>BIOS</strong> contient quelques petits programmes très simples qui permettent à l'ordinateur de " retenir " comment faire pour lire l'état des boutons de la souris, comment faire pour écrire à l'écran, comment faire pour accepter des frappes au clavier, pour communiquer avec les disques,...</p> 
        <p><img src="images/tombe.gif" alt="Mémoire ROM" class="imagegauche" height="155" width="160">Le BIOS contient des informations qui sont définies une fois pour toutes; elles ne peuvent jamais changer. On parle de <strong>mémoire morte</strong>.</p>
        <p>La mémoire morte est aussi appelée " mémoire ROM ", de l'anglais " read only memory " (mémoire en lecture seule, dans laquelle il est impossible d'écrire).</p>
        <p>La mémoire centrale contient des informations qui peuvent changer continuellement. On parle de <strong>mémoire vive</strong>.</p>
        <div id="amorce" style="border: 1px solid blue; margin: 5px; padding: 5px; display: block; float: right; width: 14em; background-color: rgb(255, 255, 204);">
          Pour quelques infos supplémentaires, <span style="cursor: pointer; font-weight: bold; text-decoration: underline;" onclick="javascript:montrecache('supplement'); montrecache('amorce')">clique ICI</span>
        </div>
        <div id="supplement" style="border: 1px solid blue; margin: 5px; padding: 5px; display: none; cursor: pointer; background-color: rgb(255, 255, 204);" title="Cliquer pour cacher ce cadre" onclick="javascript:montrecache('supplement'); montrecache('amorce')">
          <p>Les informations données ci-dessus ne sont pas tout à fait exactes. Le BIOS contient un type de mémoire qui n'est pas si morte que cela.<br>
          En réalité, il est souvent possible de modifier le contenu du BIOS. Cette opération est intéressante lorsque les programmes contenus dans le BIOS ont été améliorés.</p>
          <p>L'opération est toutefois un peu risquée car, si l'ordinateur s'éteint pendant que la mémoire du BIOS est modifiée, il se peut que le BIOS ne fonctionne plus et que l'ordinateur soit mis hors service.</p>
          <p class="questions">Je crois comprendre. C'est comme si le BIOS contenait une recette de cuisine (un programme). Si le courant se coupe pendant que la recette est changée, le BIOS contiendra un morceau de la nouvelle recette et un morceau de l'ancienne. Le plat risque d'être " spécial ".</p>
          <p class="reponses">C'est culinaire, mon cher Watson ! Mais c'est un peu cela.</p>
        </div>
        <p>La mémoire vive est aussi appelée " mémoire RAM ", de l'anglais " random access memory " (mémoire à accès aléatoire, dans laquelle on peut accéder à n'importe quel élément choisi au hasard).</p>
      </fieldset>
      <p>Quand tu te sens prêt(e) à répondre à quelques questions sur les pages qui précèdent, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
	<?php include("../../pied.inc.php");?>
  </div>
</body>
</html>
