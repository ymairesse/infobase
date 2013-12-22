<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Introduction � l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");
                                  ?>
    <div id="texte">
      <h2>M�canisme de transport de l'information sur Internet</h2>
      <p>En utilisant ce que tu as appris � la page pr�c�dente, r�ponds aux questions suivantes.</p>
      <form class="travail" action="">
        Dans le m�canisme de transport de l'information sur Internet&nbsp;:<br>
        <input name="BR" onclick="alert('Mauvaise r�ponse! Chaque paquet suit le chemin libre au moment o� il est transmis.\nTe souviens-tu de la raison de cette curieuse m�thode?')" type="radio"> chaque paquet suit obligatoirement le m�me trajet que les autres.<br>
        <input name="BR" onclick="alert('R�ponse correcte! Tout d�pend de quel chemin est libre � ce moment-l�.\nTe souviens-tu de la raison de cette curieuse m�thode?')" type="radio"> chaque paquet peut suivre un autre chemin que les autres.
      </form>
      <form class="travail" action="">
        Dans le m�canisme de transport de l'information sur Internet&nbsp;:<br>
        <input name="BR" onclick="alert('Mauvaise r�ponse! Souviens-toi que chaque paquet peut emprunter un chemin diff�rent\ndes autres paquets. Donc, certains chemins pourraient �tre plus longs.')" type="radio"> chaque paquet mettra le m�me temps que le pr�c�dent pour arriver � destination&nbsp;;<br>
        <input name="BR" onclick="alert('Oui, bien s�r, puisque les chemins suivis peuvent �tre diff�rents!')" type="radio"> le temps que met un paquet pour arriver � destination est variable.
      </form>
      <form action="" class="travail">
        Dans le m�canisme de transport de l'information sur Internet:<br>
        <input name="BR" onclick="alert('Non! Certains parcourent un plus long chemin que d\'autres.')" type="radio"> les paquets arrivent dans l'ordre o� ils ont �t� envoy�s � l'ordinateur destinataire.<br>
        <input name="BR" onclick="alert('Oui! Tout d�pend de la longueur du chemin suivi.')" type="radio"> l'ordre dans lequel les paquets arrivent n'est pas forc�ment le m�me que l'ordre d'envoi.
      </form>
      <form action="" class="travail">
        Les paquets d'informations arriv�s dans le d�sordre doivent �tre tri�s par:<br>
        <input name="BR" onclick="alert('Non! Cela prendrait �norm�ment de temps.')" type="radio"> l'utilisateur de l'ordinateur de destination&nbsp;;<br>
        <input name="BR" onclick="alert('Oui! C\'est un programme qui fait �a.')" type="radio"> un programme sp�cialis� dans l'ordinateur de destination.
      </form>
      <form action="" class="travail">
        Lorsqu'un paquet d'informations est "&nbsp;endommag�&nbsp;" durant son cheminement sur l'Internet<br>
        <input name="BR" value="radiobutton" onclick="alert('Non, il existe un m�canisme qui permet d\'�viter cet inconv�nient.')" type="radio"> l'int�gralit� du message doit �tre renvoy�e&nbsp;;<br>
        <input name="BR" value="radiobutton" onclick="alert('Effectivement. Une demande de renvoi est effectu�e.')" type="radio"> Le protocole TCP demande � l'ordinateur �metteur que le paquet soit renvoy�&nbsp;;<br>
        <input name="BR" value="radiobutton" onclick="alert('Non, le protocole TCP est bien plus robuste que cela.')" type="radio"> La communication entre les ordinateurs est rompue.
      </form>
      <p>Quand tu as r�pondu aux questions et bien compris les r�ponses, passe � la page suivante.<?php include ("../../suivant.inc.php");
                                                      ?></p>
    </div><?php include ("../../pied.inc.php");
                                  ?>
  </div>
</body>
</html>
