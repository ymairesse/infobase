<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Introduction � l'Internet</title>
  	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <style type="text/css">
  .click {cursor:pointer;}
  #faux {background-color: red; display: none;}
  #vrai {background-color: green: display: none;}
  </style>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>Les adresses DNS des ordinateurs</h2>
      <h3>2�me partie</h3>
      <p><img src="images/sherlock.gif" class="imagedroite" align="right" height="250" width="200">La partie m�diane du nom d�signe <strong>l'organisme ou la soci�t�</strong> � qui appartient l'ordinateur.</p>
      <table style="width: 60%; text-align: left; margin-left: auto; margin-right: auto;" bordercolorlight="#3333FF" bordercolordark="#FFFFFF" border="1" cellpadding="5" cellspacing="5">
        <tbody>
          <tr bgcolor="#FFFFCC">
            <td style="text-align: center;">Adresse DNS</td>
            <td style="text-align: center;">Soci�t� ou organisme</td>
          </tr>
          <tr>
            <td>www.ibm.com</td>
            <td style="text-align: center;">IBM</td>
          </tr>
          <tr>
            <td>users.skynet.be</td>
            <td style="text-align: center;">Skynet</td>
          </tr>
          <tr>
            <td>search.yahoo.com</td>
            <td style="text-align: center;">Yahoo</td>
          </tr>
          <tr>
            <td>....</td>
            <td style="text-align: center;">.....</td>
          </tr>
        </tbody>
      </table>
<fieldset class="qcu"><form action="javascript:void(0)" >
En cherchant des informations sur les virus informatiques, j'ai rep�r� les sites web securinet.free.fr, fgouget.free.fr et abcdelasecurite.free.fr.<br />
Il n'est pas n�cessaire de visiter ces sites.<br />
Ces trois sites web sont h�berg�s par :<br>
<input class="qcm" name="qcm1" type="radio">La soci�t� "free" qui est fran�aise<br><p class="vrai">Exact.<br>Cette soci�t� h�berge les 3 sites web cit�s sur ses serveurs.</p>
<input class="qcm" name="qcm1" type="radio">La soci�t� Securinet<br><p class="faux">Non.<br>Quelle partie de l'adresse DNS indique la soci�t� ou l'organisme auquel appartient le serveur?</p>
<input class="qcm" name="qcm1" type="radio">Trois soci�t�s diff�rentes: Securinet, fgouget et abcdelasecurite <br><p class="faux">R�ponse fausse.<br>Quelle partie de l'adresse DNS indique la soci�t� ou l'organisme auquel appartient le serveur?</p>
<input class="qcm" name="qcm1" type="radio">C'est impossible de le dire<br><p class="faux">R�ponse incorrecte. C'est possible...</p>
</form>
</fieldset>
      <p>Quand tu as compris le sens de la deuxi�me partie de l'adresse DNS, passe � la page suivante<?php include ("../../suivant.inc.php"); ?></p>
    </div><?php include ("../../pied.inc.php"); ?>
  </div>
  
<script type="text/javascript">
	$(document).ready(function(){

	$(".qcm").click(function(){
	$(this).next().next().fadeIn(1000);
	})
	$(".qcm").attr("checked",false);
	
  })
</script>
  
</body>
</html>
