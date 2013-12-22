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
      Le courrier électronique
    </title>
  </head>
  <body>
    <div id="conteneur">
      <?php include ("./top.inc.php");
      ?>
      <div id="texte">
        <h2>
          Comment se passe le transfert de courrier électronique
        </h2>
        <form class="travail" action="">
          Quel est l'ordinateur qui correspond à la boîte aux lettres du bureau de poste ?<br>
          <input name="BR" onclick="alert('Exact. Le serveur SMTP sert à déposer le courrier en partance.')" type=
          "radio"> Le serveur SMTP<br>
          <input value="" name="BR" onclick="alert('Non! Le serveur POP sert à recevoir le courrier.')" type="radio">
          Le serveur POP<br>
          <input value="" name="BR" onclick=
          "alert('Non! Mon ordinateur personnel me sert à rédiger mon courrier, pas à l\'acheminer.')" type="radio">
          Mon ordinateur personnel
        </form>
        <form class="travail" action="">
          Quel est l'ordinateur qui correspond à la boîte aux lettres de la maison du destinataire ?<br>
          <input name="BR" onclick="alert('Non! Le serveur SMTP sert à déposer le courrier en partance.')" type=
          "radio"> Le serveur SMTP<br>
          <input name="BR" onclick="alert('Le serveur POP sert effectivement à recevoir le courrier.')" type="radio">
          Le serveur POP<br>
          <input name="BR" onclick=
          "alert('Non! Mon ordinateur personnel me sert à lire mon courrier (à l\'écran), pas à l\'acheminer.')" type=
          "radio"> Mon ordinateur personnel
        </form>
        <form class="travail" action="">
          Un ami m'avertit par téléphone qu'il m'enverra un courrier électronique demain à 15 h. Suis-je obligé
          d'allumer mon ordinateur et d'être connecté à Internet au moment où il envoie le message ?<br>
          <input name="BR" onclick="alert('Mauvaise réponse!\nAurais-tu oublié le rôle du serveur POP?')" type="radio">
          Oui, je dois être connecté, sinon je ne recevrai jamais le message.<br>
          <input value="" name="BR" onclick=
          "alert('Oui, bien sûr! Mon courrier m\'attendra sur le disque dur\ndu serveur POP jusqu\'à ma prochaine connexion.')"
          type="radio"> Non, je peux me connecter plus tard pour récupérer son message.
        </form>
        <form class="travail" action="">
          Tant que je ne me suis pas connecté à mon fournisseur d'accès pour récupérer mon courrier électronique,
          celui-ci<br>
          <input value="" name="BR" onclick=
          "alert('Mauvaise réponse! N\'as-tu pas oublié le rôle du serveur SMTP: c\'est lui qui tient lieu de boîte aux lettres d\'envoi.')"
          type="radio"> Reste stocké sur le disque dur du serveur SMTP.<br>
          <input value="" name="BR" onclick=
          "alert('Oui, bien sûr! Mon courrier m\'attendra sur le disque dur du serveur POP jusqu\'à ma prochaine connexion.')"
          type="radio"> Reste stocké sur le disque dur du serveur POP.<br>
          <input value="" name="BR" onclick=
          "alert('Non! Le message est déposé en attente sur le disque dur d\'un ordinateur.')" type="radio"> Fait des
          aller et retour entre mon fournisseur d'accès et le fournisseur d'accès de mon correspondant<br>
          <input value="" name="BR" onclick=
          "alert('Non, puisque mon ordinateur personnel peut être éteint à ce moment.')" type="radio"> Est stocké sur
          le disque dur de mon ordinateur personnel.
        </form>
        <p>
          Quand tu as répondu correctement et bien compris les réponses aux questions de cette page, passe à la page
          suivante.<?php include ("../../suivant.inc.php");
          ?>
        </p>
      </div><?php include ("../../pied.inc.php");
      ?>
    </div>
  </body>
</html>
