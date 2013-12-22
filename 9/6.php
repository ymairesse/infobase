<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Introduction à l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");
                                  ?>
    <div id="texte">
      <h2>Mécanisme de transport de l'information sur Internet</h2>
      <p>En utilisant ce que tu as appris à la page précédente, réponds aux questions suivantes.</p>
      <form class="travail" action="">
        Dans le mécanisme de transport de l'information sur Internet&nbsp;:<br>
        <input name="BR" onclick="alert('Mauvaise réponse! Chaque paquet suit le chemin libre au moment où il est transmis.\nTe souviens-tu de la raison de cette curieuse méthode?')" type="radio"> chaque paquet suit obligatoirement le même trajet que les autres.<br>
        <input name="BR" onclick="alert('Réponse correcte! Tout dépend de quel chemin est libre à ce moment-là.\nTe souviens-tu de la raison de cette curieuse méthode?')" type="radio"> chaque paquet peut suivre un autre chemin que les autres.
      </form>
      <form class="travail" action="">
        Dans le mécanisme de transport de l'information sur Internet&nbsp;:<br>
        <input name="BR" onclick="alert('Mauvaise réponse! Souviens-toi que chaque paquet peut emprunter un chemin différent\ndes autres paquets. Donc, certains chemins pourraient être plus longs.')" type="radio"> chaque paquet mettra le même temps que le précédent pour arriver à destination&nbsp;;<br>
        <input name="BR" onclick="alert('Oui, bien sûr, puisque les chemins suivis peuvent être différents!')" type="radio"> le temps que met un paquet pour arriver à destination est variable.
      </form>
      <form action="" class="travail">
        Dans le mécanisme de transport de l'information sur Internet:<br>
        <input name="BR" onclick="alert('Non! Certains parcourent un plus long chemin que d\'autres.')" type="radio"> les paquets arrivent dans l'ordre où ils ont été envoyés à l'ordinateur destinataire.<br>
        <input name="BR" onclick="alert('Oui! Tout dépend de la longueur du chemin suivi.')" type="radio"> l'ordre dans lequel les paquets arrivent n'est pas forcément le même que l'ordre d'envoi.
      </form>
      <form action="" class="travail">
        Les paquets d'informations arrivés dans le désordre doivent être triés par:<br>
        <input name="BR" onclick="alert('Non! Cela prendrait énormément de temps.')" type="radio"> l'utilisateur de l'ordinateur de destination&nbsp;;<br>
        <input name="BR" onclick="alert('Oui! C\'est un programme qui fait ça.')" type="radio"> un programme spécialisé dans l'ordinateur de destination.
      </form>
      <form action="" class="travail">
        Lorsqu'un paquet d'informations est "&nbsp;endommagé&nbsp;" durant son cheminement sur l'Internet<br>
        <input name="BR" value="radiobutton" onclick="alert('Non, il existe un mécanisme qui permet d\'éviter cet inconvénient.')" type="radio"> l'intégralité du message doit être renvoyée&nbsp;;<br>
        <input name="BR" value="radiobutton" onclick="alert('Effectivement. Une demande de renvoi est effectuée.')" type="radio"> Le protocole TCP demande à l'ordinateur émetteur que le paquet soit renvoyé&nbsp;;<br>
        <input name="BR" value="radiobutton" onclick="alert('Non, le protocole TCP est bien plus robuste que cela.')" type="radio"> La communication entre les ordinateurs est rompue.
      </form>
      <p>Quand tu as répondu aux questions et bien compris les réponses, passe à la page suivante.<?php include ("../../suivant.inc.php");
                                                      ?></p>
    </div><?php include ("../../pied.inc.php");
                                  ?>
  </div>
</body>
</html>
