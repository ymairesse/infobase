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
      <h2>Delete et Retour arrière</h2>
		<div class="info">
		  <p>Le clavier de l'ordinateur est muni de deux touches d'effacement qui permettent de corriger des erreurs éventuelles lors de la frappe.</p>
		  <p>Ces deux touches sont:</p>
		  <ul>
			<li>la touche marquée <span class="clavier">Delete</span> (<img src="images/del.gif" alt="Delete" align="middle" height="32" width="32">) ou <span class="clavier">Del</span> située près de la touche <span class="clavier">Home</span> et</li>
			<li>la touche <span class="clavier">Retour Arrière</span> (<img src="images/retour.gif" alt="Retour Arrière" align="middle" height="32" width="64">), marquée d'une flèche vers la gauche. Elle est située <span style="text-decoration:underline">en haut</span> et <span style="text-decoration:underline">à droite</span> du clavier alphanumérique.</li>
		  </ul>
		  <p>Sur certains claviers, il peut être indiqué "&nbsp;Backspace&nbsp;" en plus de la flèche vers la gauche.</p>
		  <p>Sur les claviers français, la touche correspondantà <span class="clavier">Delete</span> est marquée <span class="clavier">Suppr</span>.</p>
		</div>
      <div class="travail">
        <ul>
          <li>Clique dans la zone bleue ci-dessous.</li>
          <li>Amène le curseur devant la lettre "&nbsp;<strong>I</strong>&nbsp;" de "<strong>Il n'y a vraiment...</strong>" à la première ligne puis frappe la touche <span class="clavier">Retour Arrière</span>.</li>
        </ul>
        <p class="supplement" style="text-align:center"><input name="S1" style="padding: 5px; font-family: 'Courier New',Courier,mono; background-color: rgb(51, 153, 255);" value="Il n'y a vraiment rien de très intéressant sur cette ligne." size="60" type="text"></p>
        <form action="">
          Que se passe-t-il&nbsp;?<br>
          <input name="bt" onclick="alert('Exact.\nLe curseur de texte devait se trouver devant le \&quot;I\&quot;, première lettre du texte\nIl n\'y avait donc rien à effacer.')" type="radio">Rien du tout.<br>
          <input name="bt" onclick="alert('Réponse fausse.\nTu as d&ucirc; mal faire la manoeuvre. Vérifie que tu as bien utilisé la touche \&quot;Retour Arrière\&quot;.\nEssaie encore une fois en t\'assurant que le curseur de texte se trouve bien à gauche de la lettre \&quot;I\&quot;.\nClique sur OK et frappe la touche F5 pour recommencer.')" type="radio">Le "&nbsp;I&nbsp;" a été supprimé.<br>
          <input name="bt" onclick="alert('Retour arrière\&quot; est la touche marquée d\'une flèche à gauche et qui se trouve en haut et à droite du clavier alphanumérique.')" type="radio">Je ne sais pas quelle est cette touche <span class="clavier">Retour arrière</span>.
        </form>
        <ul>
          <li>Amène le curseur à la fin de la ligne, derrière le point final, à l'aide de la touche <span class="clavier">END</span> puis frappe la touche <span class="clavier">Delete</span>.</li>
        </ul>
        <form action="">
          Que se passe-t-il&nbsp;?<br>
          <input name="bt" onclick="alert('Exact.\nLe curseur de texte se trouvait derrière le dernier caractère.\nIl n\'y avait donc rien à effacer derrière lui.')" type="radio">Rien du tout.<br>
          <input name="bt" onclick="alert('Réponse fausse.\nTu as d&ucirc; mal faire la manoeuvre. Vérifie que tu as bien utilisé la touche \&quot;Delete\&quot; (\&quot;Suppr\&quot; pour les claviers français).\nEssaie encore une fois en t\'assurant que le curseur de texte se trouve bien à droite du \&quot;.\&quot; final.\nClique sur OK et frappe la touche F5 pour recommencer.')" type="radio">Le "&nbsp;.&nbsp;" final est supprimé.<br>
          <input name="bt" onclick="alert('\&quot;Delete\&quot; est la touche marquée \&quot;Delete\&quot; ou \&quot;Suppr\&quot; et qui se trouve à droite de la touche \&quot;Enter\&quot;.')" type="radio">Je ne sais pas quelle est cette touche "&nbsp;Delete&nbsp;".
        </form>
        <ul>
          <li>Vérifie que le curseur de texte est toujours derrière le point final.</li>
          <li>Frappe ensuite, cinq fois de suite, la touche <span class="clavier">Retour Arrière</span>.</li>
          <li>Amène le curseur au début de la ligne à l'aide de la touche <span class="clavier">Home</span>. Frappe ensuite, cinq fois de suite, la touche <span class="clavier">Delete</span>.</li>
        </ul>
        <form action="">
          Que reste-t-il de la phrase initiale?<br>
          <input name="bt" onclick="alert('Exact.\nCinq caractères manquent au début et 5 caractères manquent à la fin.')" type="radio">y a vraiment rien de très intéressant sur cette l<br>
          <input name="bt" onclick="alert('Non.\nUne partie de la phrase a été supprimée, au début et à la fin.')" type="radio">Toute la phrase initiale<br>
          <input name="bt" onclick="alert('Réponse fausse.\nTu as d&ucirc; faire une fausse manoeuvre ou frapper les touches d\'effacement plus que 5 fois chacune.\nClique sur OK puis frappe la touche F5 pour recommencer l\'exercice.')" type="radio">Tout a été effacé.
        </form>
      </div>
      <p>Quand tu as bien compris le fonctionnement de la touche <span class="clavier">Retour Arrière</span>, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
