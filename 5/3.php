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
		<fieldset class="info">
            <legend>Les touches "flèche à gauche" et "flèche à droite"</legend>
            <p>Les deux touches <img src="images/flcga.gif" alt="Flèche Gauche"> et <img src="images/flcdr.gif" alt="Flèche Droite" > permettent de déplacer le curseur de texte vers la gauche et vers la droite.</p>
        </fieldset>

     
    <div class="travail">
        <ul>
            <li>Fais un clic de souris sur le pronom "&nbsp;<kbd>Il&nbsp;</kbd>" au début de la zone jaune ci-dessous</li>
            <li>À partir de ce moment, <strong>ne touche plus à la souris</strong>. Écarte-la de ta main et plonge sur le clavier</li>
        </ul>
        <form action="">
            <p style="text-align:center">
            <input name="T1" size="52" value="Il est possible de faire bouger le curseur de texte" style="padding: 5px; font-family: 'Courier New',Courier,mono; background-color: #ff8; color: #00f;" type="text"></p>
        </form>
        <ul>
            <li>A l'aide de la touche <span class="clavier">flèche à droite</span> (<img src="images/flcdr.gif" alt="Flèche Droite" align="middle" height="32" width="32">), déplace le curseur de texte jusqu'au premier "&nbsp;<code>e</code>&nbsp;" du mot "&nbsp;<code>texte</code>&nbsp;".<br>
            Si tu gardes ton doigt appuyé sur la touche, le curseur se déplace rapidement vers la droite.</li>
            <li>Reviens sur la lettre "&nbsp;<code>I</code>&nbsp;" de "&nbsp;<code>Il est possible...&nbsp;"</code> à l'aide de la touche <span class="clavier">flèche&nbsp;gauche</span> (<img src="images/flcga.gif" alt="Flèche Gauche" align="middle" height="32" width="32">).</li>
        </ul>
    </div>
     
    </fieldset>
		
      <fieldset class="info">
        <legend>Les touches "flèche haut" et "flèche bas"</legend>
        <p>La touche <span class="clavier">flèche bas</span> (<img src="images/flcbas.gif" alt="Flèche bas" align="middle" height="32" width="32">)permet de faire DESCENDRE le curseur&nbsp;;</p>
        <p>la touche <span class="clavier">flèche haut</span> (<img src="images/flchaut.gif" alt="Flèche haut" align="middle" height="32" width="32">) permet faire MONTER le curseur.</p>
      </fieldset>

      <div class="travail">
        <ul>
          <li>Fais un clic de souris devant la lettre "&nbsp;<code>A</code>&nbsp;", en haut et à gauche de l'encadré jaune ci-dessous.</li>
		  <li>À partir de ce moment, <strong>ne touche plus à la souris</strong>. Écarte-la de ta main et plonge sur le clavier</li>
          <li>A l'aide des différentes touches de mouvement, amène le curseur sur la lettre "&nbsp;<code>X</code>&nbsp;" entourée d'étoiles ci-dessous, puis ramène-le encore une fois sur la lettre "&nbsp;<code>A</code>&nbsp;" du haut du cadre.</li>
        </ul>
        <textarea rows="4" name="S1" cols="52" style="padding: 5px; font-family: 'Courier New',Courier,mono; color: #00f; background-color: #ff8">A
******* * X * *******</textarea>
      </div>
	</fieldset>
    
          
      <fieldset class="info">
        <legend>Les autres touches de mouvement du curseur de texte</legend>
		  <p>Près des touches <span class="clavier">Page Up</span> (<img src="images/pgup.gif" alt="Page Up" align="middle" height="32" width="32">) et <span class="clavier">Page Down</span> (<img src="images/pgdn.gif" alt="Page Down" align="middle" height="32" width="32">), deux touches marquées <span class="clavier">Home</span> (<img src="images/home.gif" alt="Home" align="middle" height="32" width="32">) et <span class="clavier">End</span> (&nbsp;<img src="images/end.gif" alt="End" align="middle" height="32" width="32">&nbsp;) permettent de déplacer le curseur de texte:</p>
		  <ul>
			<li>au début de la ligne (touche <span class="clavier">Home</span>) et</li>
			<li>à la fin de la ligne (touche <span class="clavier">End</span>).</li>
		  </ul>
		  <p><img src="images/clavfra.png" alt="Clavier français de France" class="imagedroite" height="84" width="133">Le clavier "&nbsp;Français pour la France&nbsp;", par exemple, présente une autre disposition et d'autre mentions sur les touches.</p>
      </fieldset>

      <fieldset class="travail">
        <ul>
          <li>Clique dans la zone jaune ci-dessous</li>
          <li>À partir de ce moment, <strong>ne touche plus à la souris</strong>. Écarte-la de ta main et plonge sur le clavier</li>
          <li>En utilisant les touches fléchées, amène le curseur de texte devant la lettre "<code>I</code>" de "<code>Il n'y a vraiment...</code>" à la première ligne</li>
          <li>Frappe la touche <span class="clavier">End</span> (la touche <span class="clavier">Fin</span> sur les clavier français).</li>
          <li>Ramène le curseur au début de la ligne à l'aide de la touche <span class="clavier">Home</span> (la touche <span class="clavier">Origine</span> sur certains claviers français<code>...</code>" puis expérimente à nouveau les touches <span class="clavier">Home</span> et <span class="clavier">Origine</span>).</li>
          <li>Descend le curseur sur le "<code>E</code>" du début de la ligne "<code>Et sur cette ligne-ci...</code>" puis expérimente à nouveau les touches <span class="clavier">Home</span> et <span class="clavier">End</span>.</li>
        </ul>
        <form action="javascript:voide(0)" style="text-align:center">
          <textarea rows="4" name="S1" cols="60" style="padding: 5px; font-family: 'Courier New',Courier,mono; color: #00f; background-color: #ff8;">
Il n'y a vraiment rien de très intéressant sur cette ligne.
Et sur cette ligne-ci, non plus.
</textarea>
        </form>
      </fieldset>
      
      <p>Quand tu as réalisé les trois exercices proposés, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
	  </div>
		<!-- id="texte" -->

	<!-- id="conteneur" -->
		<?php include ("../../pied.inc.php"); ?> 
	</div>

</body>
</html>
