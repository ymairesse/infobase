<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta name="generator" content="HTML Tidy for Windows (vers 1st July 2004), see www.w3.org">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
    <title>Les outils du système d'exploitation</title>
  </head>
  <body>
    <div id="conteneur">
      <?php include ("./top.inc.php");
                  ?>
      <div id="texte">
        <h2>
          Que peut faire le BIOS?
        </h2>
        <p class="info">
          Le <a href="../6/5.php" target="_blank">BIOS de l'ordinateur</a> est une puce électronique qui est capable de
          retenir des informations, même quand l'ordinateur est éteint.
        </p>
        <p>
          Son rôle est de permettre à l'ordinateur de démarrer alors que plus aucun programme ne se trouve dans sa
          mémoire vive. Le BIOS, qui est une mémoire morte, contient les instructions nécessaires au microprocesseur
          pour piloter les principaux périphériques de l'ordinateur (lecteur de disques, clavier, écran, souris).
        </p>
        <p>
          Le BIOS est cependant capable de bien peu de choses. Voici quelques exemples.
        </p>
        <table style="width: 80%; margin-left: 10%;" border="1" cellpadding="5" cellspacing="5">
          <tbody>
            <tr bgcolor="#FFFF99">
              <td>
                Périphériques
              </td>
              <td>
                Il peut
              </td>
            </tr>
            <tr>
              <td width="100">
                Clavier
              </td>
              <td>
                <p>
                  Déterminer quel caractère on vient de frapper au clavier<br>
                  Déterminer s'il s'agit d'une majuscule ou d'une minuscule<br>
                  Contrôler si l'utilisateur frappe une touche spéciale (Ctrl, Alt, ...)<br>
                  ...
                </p>
              </td>
            </tr>
            <tr>
              <td width="100">
                Ecran
              </td>
              <td>
                Allumer un point de couleur (un pixel) à l'écran<br>
                Ecrire un caractère à l'écran<br>
                ...
              </td>
            </tr>
            <tr>
              <td width="100">
                Disque
              </td>
              <td>
                Ecrire des octets sur le secteur Z de la piste W sur un disque<br>
                Lire le contenu du secteur X de la piste Y sur un disque et le mettre dans la mémoire centrale (mémoire
                vive)<br>
                ...
              </td>
            </tr>
          </tbody>
        </table>
        <p>
          Mais le BIOS est incapable d'imprimer un texte à l'imprimante, d'entrer en connexion avec un ordinateur
          voisin, de lire les codes barres d'une étiquette dans un magasin, ...<br>
          <strong>Le BIOS n'est capable que de réaliser quelques opérations de base.</strong>
        </p>
        <p>
          Quand tu es capable de citer de mémoire quelques opérations que peut faire le BIOS, passe à la page
          suivante<?php include ("../../suivant.inc.php");
                              ?>
        </p>
      </div><?php include ("../../pied.inc.php");
                  ?>
    </div>
  </body>
</html>
