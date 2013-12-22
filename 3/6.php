<?php //anti-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Les p�riph�riques de stockage</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>Capacit�s des unit�s de stockage: synth�se.</h2>
      <form class="travail" name="form1" method="post" action="print2.php">
        <p>Compl�te le tableau suivant.</p>
        <table style="width: 80%;  margin-left: auto; margin-right: auto;" border="1" width="100%">
          <tbody>
            <tr bgcolor="#FFFFCC">
              <td style="width: 158px;">Type de disque</td>
              <td style="width: 330px; text-align: center">
                  Capacit�
              </td>
              <td style="width: 92px;">Unit�s</td>
            </tr>
            <tr>
              <td style="width: 158px;">clef USB</td>
              <td style="width: 330px;">entre <input name="c1a" size="10" type="text"> et <input name="c1b" size="10" type="text"</td>
              <td style="width: 92px;"><input maxlength="2" name="u1" value="" size="2"></td>
            </tr>
            <tr>
              <td style="width: 158px;">disque dur interne</td>
              <td style="width: 330px;">entre <input maxlength="10" name="c2a" size="10" type="text"> et <input maxlength="11" name="c2b" size="10" type="text"></td>
              <td style="width: 92px;"><input maxlength="2" name="u2" size="2"></td>
            </tr>
            <tr>
              <td style="width: 158px;">disque dur externe</td>
              <td style="width: 330px;">entre <input maxlength="10" name="c3a" size="10" type="text"> et <input maxlength="11" name="c3b" size="10" type="text"></td>
              <td style="width: 92px;"><input maxlength="2" name="u3" size="2"></td>
            </tr>
          </tbody>
        </table>
        <p>Quand tu as fini, indique tes r�f�rences ci-dessous, imprime la page et remets-la au professeur.</p>
        <label for="nom">Nom:</label> <input name="nom" size="40" type="text" id="nom"><br>
        <label for="prenom">Pr�nom:&nbsp;</label> <input name="prenom" size="40" type="text" id="prenom"><br>
        <label for="class">Classe:</label><input name="classe" size="5" maxlength="5" type="text" id="classe">
        <div style="text-align:center">
          <input name="Submit" value="Pr�parer l'impression" type="submit">
        </div>
      </form>
      <p>Quand ta feuille est imprim�e, passe � la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
