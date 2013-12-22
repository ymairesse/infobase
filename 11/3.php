<?php //anti-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta name="generator" content="HTML Tidy for Linux/x86 (vers 1 September 2005), see www.w3.org">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
    <title>
      Le courrier �lectronique
    </title>
  </head>
  <body>
    <div id="conteneur">
      <?php include ("./top.inc.php");
      ?>
      <div id="texte">
        <h2>
          Comment se passe le transfert de courrier �lectronique
        </h2>
        <form class="travail" action="">
          Quel est l'ordinateur qui correspond � la bo�te aux lettres du bureau de poste�?<br>
          <input name="BR" onclick="alert('Exact. Le serveur SMTP sert � d�poser le courrier en partance.')" type=
          "radio"> Le serveur SMTP<br>
          <input value="" name="BR" onclick="alert('Non! Le serveur POP sert � recevoir le courrier.')" type="radio">
          Le serveur POP<br>
          <input value="" name="BR" onclick=
          "alert('Non! Mon ordinateur personnel me sert � r�diger mon courrier, pas � l\'acheminer.')" type="radio">
          Mon ordinateur personnel
        </form>
        <form class="travail" action="">
          Quel est l'ordinateur qui correspond � la bo�te aux lettres de la maison du destinataire�?<br>
          <input name="BR" onclick="alert('Non! Le serveur SMTP sert � d�poser le courrier en partance.')" type=
          "radio"> Le serveur SMTP<br>
          <input name="BR" onclick="alert('Le serveur POP sert effectivement � recevoir le courrier.')" type="radio">
          Le serveur POP<br>
          <input name="BR" onclick=
          "alert('Non! Mon ordinateur personnel me sert � lire mon courrier (� l\'�cran), pas � l\'acheminer.')" type=
          "radio"> Mon ordinateur personnel
        </form>
        <form class="travail" action="">
          Un ami m'avertit par t�l�phone qu'il m'enverra un courrier �lectronique demain � 15�h. Suis-je oblig�
          d'allumer mon ordinateur et d'�tre connect� � Internet au moment o� il envoie le message�?<br>
          <input name="BR" onclick="alert('Mauvaise r�ponse!\nAurais-tu oubli� le r�le du serveur POP?')" type="radio">
          Oui, je dois �tre connect�, sinon je ne recevrai jamais le message.<br>
          <input value="" name="BR" onclick=
          "alert('Oui, bien s�r! Mon courrier m\'attendra sur le disque dur\ndu serveur POP jusqu\'� ma prochaine connexion.')"
          type="radio"> Non, je peux me connecter plus tard pour r�cup�rer son message.
        </form>
        <form class="travail" action="">
          Tant que je ne me suis pas connect� � mon fournisseur d'acc�s pour r�cup�rer mon courrier �lectronique,
          celui-ci<br>
          <input value="" name="BR" onclick=
          "alert('Mauvaise r�ponse! N\'as-tu pas oubli� le r�le du serveur SMTP: c\'est lui qui tient lieu de bo�te aux lettres d\'envoi.')"
          type="radio"> Reste stock� sur le disque dur du serveur SMTP.<br>
          <input value="" name="BR" onclick=
          "alert('Oui, bien s�r! Mon courrier m\'attendra sur le disque dur du serveur POP jusqu\'� ma prochaine connexion.')"
          type="radio"> Reste stock� sur le disque dur du serveur POP.<br>
          <input value="" name="BR" onclick=
          "alert('Non! Le message est d�pos� en attente sur le disque dur d\'un ordinateur.')" type="radio"> Fait des
          aller et retour entre mon fournisseur d'acc�s et le fournisseur d'acc�s de mon correspondant<br>
          <input value="" name="BR" onclick=
          "alert('Non, puisque mon ordinateur personnel peut �tre �teint � ce moment.')" type="radio"> Est stock� sur
          le disque dur de mon ordinateur personnel.
        </form>
        <p>
          Quand tu as r�pondu correctement et bien compris les r�ponses aux questions de cette page, passe � la page
          suivante.<?php include ("../../suivant.inc.php");
          ?>
        </p>
      </div><?php include ("../../pied.inc.php");
      ?>
    </div>
  </body>
</html>
