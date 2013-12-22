<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <style type="text/css">
#tableau td {text-align: center}
  </style>
  <title>L'unité centrale et les périphériques</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      
      <fieldset class="interro">Le schéma ci-dessous représente une chaîne hi-fi constituée de différents appareils.</p>
      <legend>Exercice d'application</legend>
      <ol>
        <li>Réponds mentalement aux questions suivantes:
          <ul>
            <li>Peut-on dire qu'il s'agit d'une représentation symbolique?&nbsp;</li>
            <li>Pourquoi?</li>
          </ul>
        </li>
        <li>Dans les différents éléments qui constituent cette chaîne, détermine mentalement ceux qui pourraient être appelés "&nbsp;périphériques&nbsp;".</li>
        <li>Pour chacun d'eux, détermine s'il s'agit d'un périphérique d'entrée (E) ou de sortie (S) en cochant la case correspondante. Pour les périphériques d'entrée/sortie, coche les deux cases (E et S).<br>
        Laisse un blanc s'il ne s'agit pas d'un périphérique.</li>
      </ol>
      </fieldset>
      <p class="questions">Représentation symbolique? Ca me dit bien quelque chose...</p>
      <p class="reponses">Effectivement, la notion a été abordée dans <a href="http://info.sio2.be/infobase/1/2.php">une page précédente</a>.</p>
      <form class="travail" name="form1" method="post" action="print.php" id="form1">
        <table style="float: left;" border="0" cellspacing="0" width="200" id="tableau">
          <tbody>
            <tr>
              <td>&nbsp;</td>
              <td>
                <div>
                  E
                </div>
              </td>
              <td>
                <div>
                  S
                </div>
              </td>
            </tr>
            <tr>
              <td>Ecouteurs</td>
              <td>
                <div>
                  <input name="c11" value="E" type="checkbox">
                </div>
              </td>
              <td>
                <div>
                  <input name="c12" value="S" type="checkbox">
                </div>
              </td>
            </tr>
            <tr>
              <td>Baffle gauche</td>
              <td>
                <div>
                  <input name="c21" value="E" type="checkbox">
                </div>
              </td>
              <td>
                <div>
                  <input name="c22" value="S" type="checkbox">
                </div>
              </td>
            </tr>
            <tr>
              <td>Baffle droit</td>
              <td>
                <div>
                  <input name="c31" value="E" type="checkbox">
                </div>
              </td>
              <td>
                <div>
                  <input name="c32" value="S" type="checkbox">
                </div>
              </td>
            </tr>
            <tr>
              <td>Micro</td>
              <td>
                <div>
                  <input name="c41" value="E" type="checkbox">
                </div>
              </td>
              <td>
                <div>
                  <input name="c42" value="S" type="checkbox">
                </div>
              </td>
            </tr>
            <tr>
              <td>Amplificateur</td>
              <td>
                <div>
                  <input name="c51" value="E" type="checkbox">
                </div>
              </td>
              <td>
                <div>
                  <input name="c52" value="S" type="checkbox">
                </div>
              </td>
            </tr>
            <tr>
              <td>Lecteur CD</td>
              <td>
                <div>
                  <input name="c61" value="E" type="checkbox">
                </div>
              </td>
              <td>
                <div>
                  <input name="c62" value="S" type="checkbox">
                </div>
              </td>
            </tr>
            <tr>
              <td>Tuner radio</td>
              <td>
                <div>
                  <input name="c71" value="E" type="checkbox">
                </div>
              </td>
              <td>
                <div>
                  <input name="c72" value="S" type="checkbox">
                </div>
              </td>
            </tr>
            <tr>
              <td>Cassette</td>
              <td>
                <div>
                  <input name="c81" value="E" type="checkbox">
                </div>
              </td>

              <td>
                <div>
                  <input name="c82" value="S" type="checkbox">
                </div>
              </td>
            </tr>
          </tbody>
        </table><img style="width: 496px; height: 333px;" class="imagedroite" src="images/hifi.gif" alt="Chaîne Hi-fi">
        <ol style="clear: both;">
          <li>Dans le cadre suivant, supprime la mention "&nbsp;est&nbsp;" ou "&nbsp;n'est pas&nbsp;" entre des crochets, afin d'en faire une phrase correcte</li>
          <li>Complète ensuite la phrase en quelques mots. Veille à utiliser une orthographe parfaite.</li>
        </ol>
        <p class="supplement">Si nécessaire, n'hésite pas à aller revoir la signification de l'expression "représentation symbolique", dans les pages précédentes.</p>
        <p>
        <textarea name="reponse" rows="5" cols="60">Ce schéma [ est/n'est pas ] une représentation symbolique parce que </textarea></p>
        <p>Envoie ensuite ce document à l'impression.</p><label>Nom&nbsp;:</label> <input name="nom" size="40" value="" type="text"><br>
        <label>Prénom:</label> <input name="prenom" size="40" value="" type="text"> <input name="Submit" value="Envoyer à l'impression" type="submit"><br>
        <label>Classe&nbsp;:</label> <input name="classe" size="5" maxlength="5" type="text">
      </form>
      <p>Quand c'est fait, remets ton travail au professeur. <?php include ("../../suivant.inc.php"); ?></p>
    </div><?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
