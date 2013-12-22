<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link href="../../info.css" rel="stylesheet" type="text/css">
  <title>Introduction à l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>Ton avis m'intéresse</h2>
      <p class="info">Afin d'améliorer ce cours, il me serait utile de disposer de quelques informations sur la façon dont tu l'as perçu. Cela m'aiderait beaucoup que tu répondes rapidement aux quelques questions suivantes. Tu n'es pas obligé(e) de répondre à toutes les questions.</p>
      <form name="form1" method="post" action="../../envavis.php" id="form1">
        <input name="chapitre" type="hidden" value="9"> <input name="matiere" type="hidden" value="infobase">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="14%">Nom</td>
            <td width="86%"><input name="nom" type="text" id="nom"></td>
          </tr>
          <tr>
            <td>Ecole</td>
            <td><input name="ecole" type="text" id="ecole"></td>
          </tr>
          <tr>
            <td>Pays</td>
            <td><input name="pays" type="text" id="pays"></td>
          </tr>
          <tr>
            <td>Age</td>
            <td><input name="age" type="text" id="age" size="3" maxlength="3"></td>
          </tr>
          <tr>
            <td>e-mail</td>
            <td><input name="email" type="text" id="email" maxlength="30"> (si tu souhaites une réaction)</td>
          </tr>
        </table>
        <p>J'ai aimé <span class="micro">(indique une chose que tu as appréciée)</span></p>
        <p>
        <textarea name="aime" cols="60" rows="5" id="aime">
</textarea></p>
        <p>Je n'ai pas aimé <span class="micro">(indique une chose que tu n'as pas appréciée et qu'il faudrait supprimer ou complètement changer)</span></p>
        <p>
        <textarea name="aimepas" cols="60" rows="5" id="aimepas">
</textarea></p>
        <p>Autre remarque <span class="micro">(éventuellement adresse e-mail pour obtenir une réaction)</span>:</p>
        <p>
        <textarea name="rem" cols="60" rows="3" id="rem">
</textarea></p>
        <p style="text-align:center"><input type="submit" name="Submit" value="Envoyer"></p>
      </form>
    </div>
    <?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
