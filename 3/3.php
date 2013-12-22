<?php //anit-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Les périphériques de stockage</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
        <h2>Un exemple de comparaison</h2>
        <div class="info">
        <p>Tu trouveras ci-dessous un tableau de comparaison entre le vélo et l'automobile. On a indiqué trois critères de comparaison.<br />
        Pour chacun des critères, on a indiqué s'il est rencontré pour le véhicule correspondant.</p>
        <p>Vérifie que tu comprends bien ce tableau. On va te demander d'établir un autre tableau du même type.</p>
        <table border="1px" width="100%" style="text-align:center">
            <tr>
                <td><strong>Critères de comparaison</strong></td>
                <td><strong>Pour le vélo</strong></td>
                <td><strong>Pour l'automobile</strong></td>
            </tr>
            <tr>
                <td>Le véhicule possède des freins</td>
                <td><input name="checkboxa" checked="checked" type="checkbox" disabled="disabled"></td>
                <td><input name="checkboxb" checked="checked" type="checkbox" disabled="disabled"></td>
            </tr>
            <tr>
                <td>Le véhicule possède un moteur</td>
                <td><input name="checkboxc" type="checkbox" disabled="disabled"></td>
                <td><input name="checkboxd" checked="checked" type="checkbox" disabled="disabled"></td>
            </tr>
            <tr>
                <td>Le véhicule possède un pédalier</td>
                <td><input name="checkboxe" checked="checked" type="checkbox" disabled="disabled"></td>
                <td><input name="checkboxf" type="checkbox" disabled="disabled"></td>
            </tr>
        </table>
        <p>Pourrais-tu trouver d'autres critères de comparaison entre le vélo et l'automobile?</p>
        </div>
	  <p class="questions">Oh là! Vous allez bien, maître? Ne confondez-vous pas le cours d'informatique avec le cours de mécanique? Quel est le rapport avec les ordinateurs?</p>
	  <p class="reponses">Aucun rapport. C'est juste un petit rappel de ce qu'est une comparaison.<br />
	  Voyons maintenant une comparaison dans le domaine de l'informatique, puisque vous y tenez tant.</p>
      <h2>Les disques et les cassettes&nbsp;: synthèse</h2>
      <div class="travail">
        <p>Trouve quatre critères de comparaison entre un disque d'ordinateur et une cassette audio ou vidéo.<br />Indique ensuite, en cochant la case, si le critère est rencontré pour le disque informatique et pour la cassette.<br /> La première ligne du tableau est déjà complétée pour montrer un exemple.</p>
        <form method="post" action="print.php">
          <table style="text-align: center;" border="1" width="100%">
            <tbody>
              <tr>
                <td width="400px">Critère de comparaison</td>
                <td>Disque informatique</td>
                <td>Cassette audio ou vidéo</td>
              </tr>
              <tr>
                <td width="400px">On peut y écrire autant de fois que l'on veut</td>
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
          <label>Prénom:</label> <input name="prenom" size="40" type="text"><br />
          <label>Classe:</label><input name="classe" size="5" maxlength="5" type="text">
          <p align="left">Quand tu as rempli toutes les rubriques, envoie ton texte à l'impression.</p>
          <p style="text-align: center"><input name="Submit" value="Préparer l'impression" type="submit"></p>
        </form>
      </div>
      <p>Quand ta feuille est imprimée, remets-la au professeur puis passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div><?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
