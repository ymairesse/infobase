<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta name="generator" content="HTML Tidy for Windows (vers 1st July 2004), see www.w3.org">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
    <title>
      Organisation des fichiers sur les disques
    </title>
  </head>
  <body>
    <div id="conteneur">
      <?php include ("./top.inc.php");
            ?>
      <div id="texte">
        <h2>Il ne faut pas se perdre en chemin</h2>
        <div class="info">
          <p>Chaque fichier pr�sent sur le disque dur de l'ordinateur que tu utilises peut �tre pr�cis�ment d�sign� par son nom et le chemin � suivre pour atteindre ce fichier.</p>
          <p>Voyons comment faire pour d�signer le chemins vers un fichier.</p>
        </div>
        <div style="text-align: center;" class="info">
          Dans le haut de l'�cran, la barre d'adresses t'indique continuellement ta position dans l'arborescence.
        </div>
        <p style="text-align: center;">
          <img src="images/adresse.gif" height="25" width="269">
        </p>
        <div class="travail">
          <p>Si la barre d'adresses n'�tait pas visible, active-la en cliquant sur le menu <strong>Affichage</strong>, la commande <strong>Barre d'outils</strong> et l'option <strong>Barre d'adresses</strong>.</p>
        </div>
        <p style="text-align: center;"><img src="images/baradres.png" height="96" width="340"></p>
        <p>Observe attentivement la ligne d'adresse telle qu'elle est pr�sent�e ici�:</p>
        <p style="text-align: center;"><img src="images/adresse.gif" height="25" width="269"></p>
        
        <div class="info">
          <p>La racine de l'arbre du disque C: est repr�sent�e par le symbole "�\�" (<strong>back slash</strong>).</p>
          <p>De cette racine d�marre une <strong>branche</strong> appel�e "�Program Files�". A l'extr�mit� de cette branche, nous trouvons un premier <strong>noeud</strong>. Celui-ci est �galement repr�sent� par le symbole</p>
          <p>De ce noeud d�marre une <strong>branche</strong> nomm�e "�IZarc�". Elle se termine par un <strong>noeud</strong> repr�sent� par "�\�".</p>
          <p>A ce dernier noeud est attach� une <strong>branche</strong> terminale nomm�e "�Languages�".</p>
          <p>Si l'on regarde le volet de d�tails des fichiers, on y trouvera les <strong>feuilles</strong>�: un certain nombre de fichiers.</p>
        </div>
        
        <form action="" class="travail">
          Au-del� de la racine, combien trouve-t-on de noeuds dans l'illustration pr�sent�e ci-dessus�?<br>
          <input name="bt" onclick=
          "alert('R�ponse fausse.\nRelis l\'explication et approfondis la signification du terme \&quot;noeud\&quot;.')"
          type="radio">0<br>
          <input name="bt" onclick="alert('Non.\nIl y a plus d\'un noeud dans le sch�ma.')" type="radio">1<br>
          <input name="bt" onclick=
          "alert('R�ponse correcte.\nIl ne fallait �videmment pas compter la racine comme un noeud.')" type=
          "radio">2<br>
          <input name="bt" onclick="alert('R�ponse fausse.\nN\'aurais-tu pas compt� la racine pour un noeud?')" type=
          "radio">3
        </form>
        <div class="travail">
        <p>Sur le disque dur C: de ton ordinateur, parcours l'arborescence depuis la racine et indique ci-dessous le chemin qui m�ne vers un fichier situ� �, au moins 4 noeuds de la racine.</p>
        <form>
          <input style="text-align: center;" name="textfield" size="70" type="text">
        </form>
        <p>M�me question pour un fichier de ton choix qui se trouve �, au moins, 5 noeuds de la racine du disque dur.</p>
        <form>
          <input name="textfield2" size="70" type="text">
        </form>
      </div>
          <p>Quand tu as fini, montre ton travail au professeur puis passe � la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
      
      <?php include ("../../pied.inc.php");?>
    </div>
  </body>
</html>
