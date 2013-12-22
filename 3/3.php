<?php //anit-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Les p�riph�riques de stockage</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
        <h2>Un exemple de comparaison</h2>
        <div class="info">
        <p>Tu trouveras ci-dessous un tableau de comparaison entre le v�lo et l'automobile. On a indiqu� trois crit�res de comparaison.<br />
        Pour chacun des crit�res, on a indiqu� s'il est rencontr� pour le v�hicule correspondant.</p>
        <p>V�rifie que tu comprends bien ce tableau. On va te demander d'�tablir un autre tableau du m�me type.</p>
        <table border="1px" width="100%" style="text-align:center">
            <tr>
                <td><strong>Crit�res de comparaison</strong></td>
                <td><strong>Pour le v�lo</strong></td>
                <td><strong>Pour l'automobile</strong></td>
            </tr>
            <tr>
                <td>Le v�hicule poss�de des freins</td>
                <td><input name="checkboxa" checked="checked" type="checkbox" disabled="disabled"></td>
                <td><input name="checkboxb" checked="checked" type="checkbox" disabled="disabled"></td>
            </tr>
            <tr>
                <td>Le v�hicule poss�de un moteur</td>
                <td><input name="checkboxc" type="checkbox" disabled="disabled"></td>
                <td><input name="checkboxd" checked="checked" type="checkbox" disabled="disabled"></td>
            </tr>
            <tr>
                <td>Le v�hicule poss�de un p�dalier</td>
                <td><input name="checkboxe" checked="checked" type="checkbox" disabled="disabled"></td>
                <td><input name="checkboxf" type="checkbox" disabled="disabled"></td>
            </tr>
        </table>
        <p>Pourrais-tu trouver d'autres crit�res de comparaison entre le v�lo et l'automobile?</p>
        </div>
	  <p class="questions">Oh l�! Vous allez bien, ma�tre? Ne confondez-vous pas le cours d'informatique avec le cours de m�canique? Quel est le rapport avec les ordinateurs?</p>
	  <p class="reponses">Aucun rapport. C'est juste un petit rappel de ce qu'est une comparaison.<br />
	  Voyons maintenant une comparaison dans le domaine de l'informatique, puisque vous y tenez tant.</p>
      <h2>Les disques et les cassettes&nbsp;: synth�se</h2>
      <div class="travail">
        <p>Trouve quatre crit�res de comparaison entre un disque d'ordinateur et une cassette audio ou vid�o.<br />Indique ensuite, en cochant la case, si le crit�re est rencontr� pour le disque informatique et pour la cassette.<br /> La premi�re ligne du tableau est d�j� compl�t�e pour montrer un exemple.</p>
        <form method="post" action="print.php">
          <table style="text-align: center;" border="1" width="100%">
            <tbody>
              <tr>
                <td width="400px">Crit�re de comparaison</td>
                <td>Disque informatique</td>
                <td>Cassette audio ou vid�o</td>
              </tr>
              <tr>
                <td width="400px">On peut y �crire autant de fois que l'on veut</td>
                <td><input name="checkbox" value="checkbox" checked="checked" type="checkbox" disabled="disabled"></td>
                <td><input name="checkbox2" value="checkbox" checked="checked" type="checkbox" disabled="disabled"></td>
              </tr>
              <tr>
                <td width="400px">
                <textarea name="r1" cols="45" rows="3">
</textarea></td>
                <td><input name="c1a" value="checkbox" type="checkbox"></td>
                <td><input name="c1b" value="checkbox" type="checkbox"></td>
              </tr>
              <tr>
                <td width="400px">
                <textarea name="r2" cols="45" rows="3">
</textarea></td>
                <td><input name="c2a" value="checkbox" type="checkbox"></td>
                <td><input name="c2b" value="checkbox" type="checkbox"></td>
              </tr>
              <tr>
                <td width="400px">
                <textarea name="r3" cols="45" rows="3">
</textarea></td>
                <td><input name="c3a" value="checkbox" type="checkbox"></td>
                <td><input name="c3b" value="checkbox" type="checkbox"></td>
              </tr>
              <tr>
                <td width="400px">
                <textarea name="r4" cols="45" rows="3">
</textarea></td>
                <td><input name="c4a" value="checkbox" type="checkbox"></td>
                <td><input name="c4b" value="checkbox" type="checkbox"></td>
              </tr>
            </tbody>
          </table><label>Nom:</label> <input name="nom" id="nom" size="40" type="text"><br />
          <label>Pr�nom:</label> <input name="prenom" size="40" type="text"><br />
          <label>Classe:</label><input name="classe" size="5" maxlength="5" type="text">
          <p align="left">Quand tu as rempli toutes les rubriques, envoie ton texte � l'impression.</p>
          <p style="text-align: center"><input name="Submit" value="Pr�parer l'impression" type="submit"></p>
        </form>
      </div>
      <p>Quand ta feuille est imprim�e, remets-la au professeur puis passe � la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div><?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
