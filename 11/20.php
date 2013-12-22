<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../../styleisnd.css">
<link rel="stylesheet" type="text/css" href="../../stylebton.css">
<title>titre</title>
<script language="javascript" type="text/javascript" src="titre.js"></script>
</head>
<body><div id="conteneur">
<p>
  <?php
include ("./top.inc.php");
?>
</p>
<form name="form1" method="post" action="../envavis.php">
<input name="chapitre" type="hidden" value="11">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="750"> <h2>Ton avis m'int&eacute;resse</h2>
      <table width="100%">
        <tr> 
          <td width="32" align="center" valign="top"><img src="../../images/interro.gif" width="32" height="32"></td>
          <td width="720"> <p>Afin d'am&eacute;liorer ce cours, il me serait utile 
              de disposer de quelques informations sur la fa&ccedil;on dont tu l'as 
              per&ccedil;u. Cela m'aiderait beaucoup que tu r&eacute;pondes rapidement 
              aux quelques questions suivantes. Tu n'es pas oblig&eacute;(e) de 
              r&eacute;pondre &agrave; toutes les questions. </p>
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
              </table>
              <p>J'ai aim&eacute; <span class="micro">(indique une chose que tu 
                as appr&eacute;ci&eacute;e)</span></p>
              <p> 
                <textarea name="aime" cols="60" rows="5" id="aime"></textarea>
              </p>
              <p>Je n'ai pas aim&eacute; <span class="micro">(indique une chose 
                que tu n'as pas appr&eacute;ci&eacute;e et qu'il faudrait supprimer 
                ou compl&egrave;tement changer)</span></p>
              <p> 
                <textarea name="aimepas" cols="60" rows="5" id="aimepas"></textarea>
              </p>
              <p>Autre remarque:</p>
              <p> 
                <textarea name="rem" cols="60" rows="3" id="rem"></textarea>
              </p>
              <p align="center"> 
                <input type="submit" name="Submit" value="Envoyer">
              </p>
              
            
          </td>
        </tr>
      </table></td>
  </tr>
</table>
</form>
<?php
include ("../../pied.inc.php");
?>
</div></body>
</html>
