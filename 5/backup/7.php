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
      <h2>Delete et Retour arri�re</h2>
		<div class="info">
		  <p>Le clavier de l'ordinateur est muni de deux touches d'effacement qui permettent de corriger des erreurs �ventuelles lors de la frappe.</p>
		  <p>Ces deux touches sont:</p>
		  <ul>
			<li>la touche marqu�e <span class="clavier">Delete</span> (<img src="images/del.gif" alt="Delete" align="middle" height="32" width="32">) ou <span class="clavier">Del</span> situ�e pr�s de la touche <span class="clavier">Home</span> et</li>
			<li>la touche <span class="clavier">Retour Arri�re</span> (<img src="images/retour.gif" alt="Retour Arri�re" align="middle" height="32" width="64">), marqu�e d'une fl�che vers la gauche. Elle est situ�e <span style="text-decoration:underline">en haut</span> et <span style="text-decoration:underline">� droite</span> du clavier alphanum�rique.</li>
		  </ul>
		  <p>Sur certains claviers, il peut �tre indiqu� "&nbsp;Backspace&nbsp;" en plus de la fl�che vers la gauche.</p>
		  <p>Sur les claviers fran�ais, la touche correspondant� <span class="clavier">Delete</span> est marqu�e <span class="clavier">Suppr</span>.</p>
		</div>
      <div class="travail">
        <ul>
          <li>Clique dans la zone bleue ci-dessous.</li>
          <li>Am�ne le curseur devant la lettre "&nbsp;<strong>I</strong>&nbsp;" de "<strong>Il n'y a vraiment...</strong>" � la premi�re ligne puis frappe la touche <span class="clavier">Retour Arri�re</span>.</li>
        </ul>
        <p class="supplement" style="text-align:center"><input name="S1" style="padding: 5px; font-family: 'Courier New',Courier,mono; background-color: rgb(51, 153, 255);" value="Il n'y a vraiment rien de tr�s int�ressant sur cette ligne." size="60" type="text"></p>
        <form action="">
          Que se passe-t-il&nbsp;?<br>
          <input name="bt" onclick="alert('Exact.\nLe curseur de texte devait se trouver devant le \&quot;I\&quot;, premi�re lettre du texte\nIl n\'y avait donc rien � effacer.')" type="radio">Rien du tout.<br>
          <input name="bt" onclick="alert('R�ponse fausse.\nTu as d&ucirc; mal faire la manoeuvre. V�rifie que tu as bien utilis� la touche \&quot;Retour Arri�re\&quot;.\nEssaie encore une fois en t\'assurant que le curseur de texte se trouve bien � gauche de la lettre \&quot;I\&quot;.\nClique sur OK et frappe la touche F5 pour recommencer.')" type="radio">Le "&nbsp;I&nbsp;" a �t� supprim�.<br>
          <input name="bt" onclick="alert('Retour arri�re\&quot; est la touche marqu�e d\'une fl�che � gauche et qui se trouve en haut et � droite du clavier alphanum�rique.')" type="radio">Je ne sais pas quelle est cette touche <span class="clavier">Retour arri�re</span>.
        </form>
        <ul>
          <li>Am�ne le curseur � la fin de la ligne, derri�re le point final, � l'aide de la touche <span class="clavier">END</span> puis frappe la touche <span class="clavier">Delete</span>.</li>
        </ul>
        <form action="">
          Que se passe-t-il&nbsp;?<br>
          <input name="bt" onclick="alert('Exact.\nLe curseur de texte se trouvait derri�re le dernier caract�re.\nIl n\'y avait donc rien � effacer derri�re lui.')" type="radio">Rien du tout.<br>
          <input name="bt" onclick="alert('R�ponse fausse.\nTu as d&ucirc; mal faire la manoeuvre. V�rifie que tu as bien utilis� la touche \&quot;Delete\&quot; (\&quot;Suppr\&quot; pour les claviers fran�ais).\nEssaie encore une fois en t\'assurant que le curseur de texte se trouve bien � droite du \&quot;.\&quot; final.\nClique sur OK et frappe la touche F5 pour recommencer.')" type="radio">Le "&nbsp;.&nbsp;" final est supprim�.<br>
          <input name="bt" onclick="alert('\&quot;Delete\&quot; est la touche marqu�e \&quot;Delete\&quot; ou \&quot;Suppr\&quot; et qui se trouve � droite de la touche \&quot;Enter\&quot;.')" type="radio">Je ne sais pas quelle est cette touche "&nbsp;Delete&nbsp;".
        </form>
        <ul>
          <li>V�rifie que le curseur de texte est toujours derri�re le point final.</li>
          <li>Frappe ensuite, cinq fois de suite, la touche <span class="clavier">Retour Arri�re</span>.</li>
          <li>Am�ne le curseur au d�but de la ligne � l'aide de la touche <span class="clavier">Home</span>. Frappe ensuite, cinq fois de suite, la touche <span class="clavier">Delete</span>.</li>
        </ul>
        <form action="">
          Que reste-t-il de la phrase initiale?<br>
          <input name="bt" onclick="alert('Exact.\nCinq caract�res manquent au d�but et 5 caract�res manquent � la fin.')" type="radio">y a vraiment rien de tr�s int�ressant sur cette l<br>
          <input name="bt" onclick="alert('Non.\nUne partie de la phrase a �t� supprim�e, au d�but et � la fin.')" type="radio">Toute la phrase initiale<br>
          <input name="bt" onclick="alert('R�ponse fausse.\nTu as d&ucirc; faire une fausse manoeuvre ou frapper les touches d\'effacement plus que 5 fois chacune.\nClique sur OK puis frappe la touche F5 pour recommencer l\'exercice.')" type="radio">Tout a �t� effac�.
        </form>
      </div>
      <p>Quand tu as bien compris le fonctionnement de la touche <span class="clavier">Retour Arri�re</span>, passe � la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
