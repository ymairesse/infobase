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
          Configuration du compte de courrier �lectronique (optionnel)
        </h2>
        <div class="info">
          <p>
            Les r�glages effectu�s jusqu'ici sont suffisants pour faire fonctionner le logiciel de courrier
            �lectronique.�
          </p>
          <p>
            Il y a cependant un petit probl�me. Lorsque le courrier est relev� sur le serveur SMTP, il est t�l�charg�
            sur l'ordinateur utilis� et il dispara�t du serveur.
          </p>
        </div>
        <p class="questions">
          Voil� qui est plut�t ennuyeux. J'aimerais bien recevoir le courrier � l'�cole ET � la maison...
        </p>
        <p class="reponses">
          C'est le probl�me que nous allons r�soudre � l'instant m�me.
        </p>
        <h3>
          Laisser le courrier sur le serveur
        </h3>
        <p class="questions">
          Et bien voil�. Je vois que vous avez d�j� la solution: on va laisser le courrier sur le serveur, plut�t que
          de l'effacer.
        </p>
        <p class="reponses">
          Malheureusement, ce n'est pas possible. Si nous laissons�tous les messages sur le serveur POP, la place
          occup�e va grandir, grandir, grandir... Et notre fournisseur de services ne voudra peut-�tre pas ajouter des
          disques � ses serveurs pour nous faire plaisir.
        </p>
        <p class="questions">
          C'�tait trop beau...
        </p>
        <p class="reponses">
          Il y a une solution: ne pas laisser les messages trop longtemps; ainsi nous n'occuperons jamais trop de
          place.
        </p>
        <div class="info">
          <p>
            Nous nous trouvons maintenant devant l'interface de Thunderbird.�
          </p>
          <p style="text-align: center;">
            <img style="width: 526px; height: 423px;" alt="Interface de Thunderbird" src="images/8.png">
          </p>
        </div>
        <div class="travail">
          <ul>
            <li>Dans la zone <span class="menu">Dossiers</span>, clique sur <strong>Dossiers locaux</strong>.
            </li>
            <li>Dans la partie droite de la fen�tre, clique sur <span class="menu">Voir les param�tres pour ce
            compte</span>.
            </li>
            <li>
              <img class="imagedroite" style="width: 248px; height: 103px;" alt="Param�tres serveur" src=
              "images/9.png">Dans la nouvelle fen�tre qui appara�t, s�lectionne les <strong>param�tres
              serveur</strong>.
            </li>
            <li>Dans la liste des param�tres serveur disponibles, d�cide de laisser le courrier sur le serveur pendant
            un maximum de 8 jours.
            </li>
          </ul>
          <div style="text-align: center;">
            <img style="width: 306px; height: 149px;" alt="Param�tres serveur" src="images/11.png"><br>
          </div>
          <ul>
            <li>Clique sur le bouton <span class="menu">OK</span>.
            </li>
          </ul>
        </div>
        <p>
          Quand tout est correct, passe � la page suivante.<?php include ("../../suivant.inc.php");
                                                                                          ?>
        </p>
      </div><?php include ("../../pied.inc.php");
                                                      ?>
    </div>
  </body>
</html>
