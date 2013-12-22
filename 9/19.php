<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link href="../../info.css" rel="stylesheet" type="text/css">
  <title>Introduction � l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>Ton avis m'int�resse</h2>
      <p class="info">Afin d'am�liorer ce cours, il me serait utile de disposer de quelques informations sur la fa�on dont tu l'as per�u. Cela m'aiderait beaucoup que tu r�pondes rapidement aux quelques questions suivantes. Tu n'es pas oblig�(e) de r�pondre � toutes les questions.</p>
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
            <td><input name="email" type="text" id="email" maxlength="30"> (si tu souhaites une r�action)</td>
          </tr>
        </table>
        <p>J'ai aim� <span class="micro">(indique une chose que tu as appr�ci�e)</span></p>
        <p>
        <textarea name="aime" cols="60" rows="5" id="aime">
</textarea></p>
        <p>Je n'ai pas aim� <span class="micro">(indique une chose que tu n'as pas appr�ci�e et qu'il faudrait supprimer ou compl�tement changer)</span></p>
        <p>
        <textarea name="aimepas" cols="60" rows="5" id="aimepas">
</textarea></p>
        <p>Autre remarque <span class="micro">(�ventuellement adresse e-mail pour obtenir une r�action)</span>:</p>
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
