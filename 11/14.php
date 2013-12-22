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
          Leçons de l'envoi précédent
        </h2>
        <div class="travail">
          Relève le courrier. Tu devrais y trouver ton message. Si ce n'était pas le cas, réessaie après quelques
          instants (peut-être le message n'est-il pas encore arrivé sur le serveur POP).
        </div>
        <div class="info">
          <p>
            Tu trouveras le courriel que tu t'es envoyé. Chaque destinataire reçoit le même message et peut lire les
            noms des autres destinataires. 
          </p>
          <p style="text-align: center;">
            <img src="images/copie.png" style="width: 638px; height: 462px;" alt="Réception">
          </p>
        </div>
        <p class="questions">
          Bah, il n'y a vraiment aucune surprise là. Par contre, un truc qui m'inquiète plus, c'est ce deuxième message
          venant de MAILER-DAEMON.
        </p>
        <p class="reponses">
          Vous avez un peu raison de vous tracasser. Ce deuxième message est plus problématique. Voyons cela.
        </p>
        <div class="info">
          <p>
            Parmi les messages trouvés sur le serveur POP, l'un d'entre eux est expédié par
            " <b>MAILER-DAEMON@mx1.ovh.net</b> ". Si tu consultes ce message, tu peux y lire une mention du genre.
          </p>
        </div>
        <p style="text-align: center;">
          <img src="images/failure.png" style="width: 638px; height: 462px;" alt="Erreur">
        </p>
        <p>
          Ce message provient du serveur de mails SMTP. Il indique qu'il a été incapable de trouver l'adresse
          maman@sio2.be . En effet, le serveur cette adresse n'existe pas.
        </p>
        <div class="encadre attention">
          Quand un courrier électronique ne peut parvenir à son destinataire, il est renvoyé à l'expéditeur.
        </div>
        <p class="questions">
          J'avais déjà vu ça chez mon petit cousin qui n'utilise pas une adresse @sio2.be. Mais le message du serveur
          était différent. C'est normal?
        </p>
        <p class="reponses">
          Tout à fait normal. Le message renvoyé dépend du logiciel installé sur le serveur SMTP. Mais, en général, il
          est rédigé en anglais.
        </p>
        <p class="info">
          Attention. Il est possible que le message fautif ne revienne pas immédiatement. Il faut parfois attendre de
          plusieurs minutes à plusieurs heures, le temps que la recherche du destinataire soit achevée.
        </p>
        <p>
          Quand tu as relevé le courrier et observé les messages, passe à la page
          suivante.<?php include ("../../suivant.inc.php");
                                                                                                                                                                                          ?>
        </p>
      </div><?php include ("../../pied.inc.php");
                                                                                                                  ?>
    </div>
  </body>
</html>
