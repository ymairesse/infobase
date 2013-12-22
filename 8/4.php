<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta name="generator" content="HTML Tidy for Windows (vers 1st July 2004), see www.w3.org">
    <title>
      Les lignes de saisie
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript">
<!--
function Reponse (form){
var I=0
while (!form.BR[I].checked) { I++ }
alert (form.BR[I].value)}
// -->
</script>
    <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  </head>
  <body>
    <div id="conteneur">
      <?php include ("./top.inc.php"); ?>
      <div id="texte">
        <h2>
          Les lignes de saisie
        </h2>
        <p class="info">
          <img class="imagedroite" src="images/lignesaisie.jpg" align="left" height="145" width="265">Les lignes de
          saisie sont de petits cadres dans lesquels nous pouvons �crire des informations n�cessaires � l'ordinateur.
        </p>
        <form class="travail" action="">
          Dans l'illustration ci-dessus, quel est le bouton par d�faut?<br>
          <input name="BR" onclick=
          "alert('Correct. Le bouton par d�faut appara�t comme un peu plus en relief')" type="radio">Le bouton OK<br>
          <input name="BR" onclick=
          "alert('Non. Le bouton par d�faut appara�t comme un peu plus en relief')" type="radio">Le bouton Annuler
        </form>
        <form class="travail" action="">
          Le bouton par d�faut est actionn� quand on frappe la touche<br>
          <input  name="BR" onclick=
          "alert('Correct. Le bouton par d�faut appara�t comme un peu plus en relief')" type="radio">Enter<br>
          <input value=
          "" name="BR"
          onclick="alert('Non. La touche de tabulation permet de changer de bouton par d�faut, mais elle ne le pousse pas.')" type="radio">Tabulation<br>
          <input name="BR" 
		  onclick="alert('Non. La touche Retour Arri�re sert � effacer le caract�re qui pr�c�de le curseur. Elle n'est pas utile pour les boutons de commande.')" type="radio">Retour arri�re
        </form>
        <h3>
          Comment les utiliser?
        </h3>
        <p class="info">
          Un clic de souris dans la ligne de saisie la rend active. Le curseur de texte appara�t et toutes les touches
          du clavier peuvent �tre utilis�es pour fournir ou modifier les informations.
        </p>
        <h3>
          Exemple
        </h3>
          <p>
            Une ligne de saisie dans une bo�te de dialogue se comporte de la m�me fa�on que la ligne ci-dessous.
          </p>
          <form>
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="5"
            cellspacing="0" width="400">
              <tbody>
                <tr style="color: rgb(255, 255, 255);">
                  <td bgcolor="#000080">
                    <b>Exemples de ligne de saisie</b>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#C0C0C0">
                    Clique dans la zone blanche ci-dessous � et frappe un texte:
                    <p style="text-align: center;">
                      <input name="T1" size="20" type="text">
                    </p>
                    <p>
                      Passe ensuite � la ligne suivante en frappant la touche de tabulation
                    </p>
                    <p style="text-align: center;">
                      <input name="T12" size="20" type="text">
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        <h3>
          Remarques
        </h3>
        <ul>
          <li>Quand il faut passer d'une ligne de saisie � l'autre, on frappe la <strong>touche de tabulation</strong>.
          Le curseur saute alors automatiquement vers le contr�le suivant.
          </li>
          <li>Quand une ligne de saisie devient <strong>active</strong>, son contenu appara�t invers�. Si l'on �crit
          dedans, tout son contenu s'efface. Pour le conserver, il faut repositionner le curseur de texte dans la zone
          de saisie avant de frapper.
          </li>
        </ul>
        <form class="travail">
          Dans l'illustration du haut de la page, la ligne de saisie est-elle active ou inactive?<br>
          <input value="Effectivement, elle est active, puisque les couleurs sont invers�es." name="BR" onclick=
          "Reponse(this.form)" type="radio">Active<br>
          <input value="Non. N'as-tu pas observ� que la couleur du texte est invers�e?" name="BR" onclick=
          "Reponse(this.form)" type="radio">Inactive
        </form>
        <p>
          Quand tu as tout lu et test� les lignes de saisie, passe � la page
          suivante<?php include ("../../suivant.inc.php"); ?>
        </p>
      </div><?php include ("../../pied.inc.php"); ?>
    </div>
  </body>
</html>
