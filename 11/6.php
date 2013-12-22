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
          Configuration du compte de courrier électronique (2)
        </h2>
        <div class="info">
          <p>
            Il nous faut maintenant indiquer les noms des serveurs de courrier utilisés. Il s'agit:
          </p>
          <ul>
            <li>du serveur SMTP et
            </li>
            <li>du serveur POP.
            </li>
          </ul>
          <h3>
            Les serveurs
          </h3>
        </div>
        <div class="travail">
          <ul>
            <li>
              <img class="imagedroite" style="width: 381px; height: 375px;" alt="Serveurs" src="images/3.png">Vérifie
              que la case correspondant au serveur <strong>POP</strong> est sélectionnée.
            </li>
            <li>Dans la zone <span class="menu">Nom du serveur</span>, indique <strong>pop3.sio2.be</strong> ou le nom
            du serveur indiqué par le professeur.
            </li>
            <li>Vérifie que la case <span class="menu">Utiliser la boîte globale</span> est cochée.
            </li>
            <li>Indique le nom du serveur de courrier sortant <strong>smtp.sio2.be</strong>.
            </li>
          </ul>
          <p class="supplement">
            Si tu ne disposes pas d'un compte @sio2.be, tu ne pourras pas utiliser les serveurs indiqués ci-contre. Tu
            dois absolument utiliser les paramètres fournis par le professeur.
          </p>
          <p class="supplement">
            Vérifie que les noms des serveurs sont correctement orthographiés. Si ce n'était pas le cas, il te serait
            impossible d'envoyer ou de recevoir du courrier.
          </p>
          <ul>
            <li>Clique sur le bouton <span class="menu">Suivant</span>.
            </li>
          </ul>
        </div>
        <form action="" class="travail">
          Un serveur POP sert à<br>
          <input name="bt" onclick="alert('Réponse fausse.\nCe n\'est pas le rôle du serveur POP.')" type=
          "radio">Envoyer le courrier<br>
          <input name="bt" onclick=
          "alert('Réponse correcte.\nLe serveur POP sert à recevoir le courrier et à le stocker en attendant que tu consultes ta boîte aux lettres.')"
          type="radio">Recevoir le courrier<br>
          <input name="bt" onclick="alert('Réponse fausse.\nLe serveur POP a un rôle plus spécifique. Lequel?')" type=
          "radio">Envoyer et recevoir le courrier<br>
          <input name="bt" onclick="alert('Réponse fausse.\nUn serveur POP a bien un rôle dans ce cadre.')" type=
          "radio">Rien du tout dans le cadre du courrier électronique
        </form>
        <p>
          Quand les serveurs sont correctement indiqué, passe à la page
          suivante.<?php include ("../../suivant.inc.php");
                              ?>
        </p>
      </div><?php include ("../../pied.inc.php");
                  ?>
    </div>
  </body>
</html>
