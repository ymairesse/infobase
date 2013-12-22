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
          Configuration du compte de courrier �lectronique (2)
        </h2>
        <div class="info">
          <p>
            Il nous faut maintenant indiquer les noms des serveurs de courrier utilis�s. Il s'agit:
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
              <img class="imagedroite" style="width: 381px; height: 375px;" alt="Serveurs" src="images/3.png">V�rifie
              que la case correspondant au serveur <strong>POP</strong> est s�lectionn�e.
            </li>
            <li>Dans la zone <span class="menu">Nom du serveur</span>, indique <strong>pop3.sio2.be</strong> ou le nom
            du serveur indiqu� par le professeur.
            </li>
            <li>V�rifie que la case <span class="menu">Utiliser la bo�te globale</span> est coch�e.
            </li>
            <li>Indique le nom du serveur de courrier sortant <strong>smtp.sio2.be</strong>.
            </li>
          </ul>
          <p class="supplement">
            Si tu ne disposes pas d'un compte @sio2.be, tu ne pourras pas utiliser les serveurs indiqu�s ci-contre. Tu
            dois absolument utiliser les param�tres fournis par le professeur.
          </p>
          <p class="supplement">
            V�rifie que les noms des serveurs sont correctement orthographi�s. Si ce n'�tait pas le cas, il te serait
            impossible d'envoyer ou de recevoir du courrier.
          </p>
          <ul>
            <li>Clique sur le bouton <span class="menu">Suivant</span>.
            </li>
          </ul>
        </div>
        <form action="" class="travail">
          Un serveur POP sert �<br>
          <input name="bt" onclick="alert('R�ponse fausse.\nCe n\'est pas le r�le du serveur POP.')" type=
          "radio">Envoyer le courrier<br>
          <input name="bt" onclick=
          "alert('R�ponse correcte.\nLe serveur POP sert � recevoir le courrier et � le stocker en attendant que tu consultes ta bo�te aux lettres.')"
          type="radio">Recevoir le courrier<br>
          <input name="bt" onclick="alert('R�ponse fausse.\nLe serveur POP a un r�le plus sp�cifique. Lequel?')" type=
          "radio">Envoyer et recevoir le courrier<br>
          <input name="bt" onclick="alert('R�ponse fausse.\nUn serveur POP a bien un r�le dans ce cadre.')" type=
          "radio">Rien du tout dans le cadre du courrier �lectronique
        </form>
        <p>
          Quand les serveurs sont correctement indiqu�, passe � la page
          suivante.<?php include ("../../suivant.inc.php");
                              ?>
        </p>
      </div><?php include ("../../pied.inc.php");
                  ?>
    </div>
  </body>
</html>
