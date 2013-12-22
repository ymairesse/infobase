<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Introduction à l'Internet</title>
  <script type="text/javascript" src="../../js/jquery.js"></script>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>


</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Les adresses des ordinateurs</h2>
      <h3>Comment décoder l'adresse DNS&nbsp;?</h3>
      <p class="info">L'adresse DNS nous donne une série d'informations sur la nature de l'ordinateur qui lui correspond.</p>
      <p>Examinons les trois parties de l'adresse DNS.</p>
      <h3><img src="images/sherlock.gif" class="imagedroite" align="right" height="250" width="200">1ère partie</h3>
      <p>La première partie de l'adresse indique généralement <strong>le nom de l'ordinateur</strong>. Chaque personne qui souhaite donner une adresse DNS à un ordinateur peut choisir ce nom, comme elle le veut.</p>
      <p>Exemples:</p>
      <table bordercolordark="#FFFFFF" bordercolorlight="#3333FF" style="text-align: center;" border="1" cellpadding="5" cellspacing="5" width="60%">
        <tbody>
          <tr>
            <td style="text-align: center; background-color: rgb(255, 255, 153);">Adresse DNS</td>
            <td style="text-align: center; background-color: rgb(255, 255, 153);">Nom de l'ordinateur</td>
          </tr>
          <tr>
            <td>www.yahoo.fr</td>
            <td style="text-align: center;">www</td>
          </tr>
          <tr>
            <td>users.skynet.be</td>
            <td style="text-align: center;">users</td>
          </tr>
          <tr>
            <td>search.yahoo.com</td>
            <td style="text-align: center;">search</td>
          </tr>
          <tr>
            <td>....</td>
            <td style="text-align: center;">...</td>
          </tr>
        </tbody>
      </table>
      <p><strong>www</strong> est un nom générique, souvent donné, pour indiquer un serveur Web.</p>
      
<fieldset class="qcu"><form action="javascript:void(0)" >
En cherchant des informations concernant la Belgique, je trouve des pages web sur un serveur du Ministère des finances appelé "minfin.fgov.be" et d'autres informations sur un serveur qui publie des statistiques relatives au pays : "statbel.fgov.be".<br />
Ces deux sites web sont-ils hébergés sur le même serveur ?<br>
<input class="qcm" name="qcm1" type="radio">Oui<br><p class="faux">Réponse fausse.<br>A la date où ce cours a été écrit, les deux sites web se trouvaient sur des serveurs différents.<br>Vérifie les adresses IP des deux ordinateurs minfin.fgov.be et statbel.fgov.be</p>
<input class="qcm" name="qcm1" type="radio">Non<br><p class="vrai">Réponse correcte.<br>Pour en faire la preuve, il suffit effectivement de vérifier que minfin.fgov.be et statbel.fgov.be correspondent à des adresses IP différentes.</p>
<input class="qcm" name="qcm1" type="radio">Il est impossible de répondre à cette question.<br><p class="faux">Si, c'est possible.<br>Tu as reçu toutes les informations pour le déterminer.</p>
<input class="qcm" name="qcm1" type="radio">C'est possible, mais cela demandera plusieurs jours pour le déterminer.<br><p class="faux">Incorrect.<br>On obtient la réponse immédiatement si l'on utilise les informations données plus haut dans ce cours.</p>
</form>
</fieldset>
      
<fieldset class="qcu"><form action="javascript:void(0)" >
Pour vérifier que deux sites web sont bien sur des serveurs différents, on peut utiliser<br>
<input class="qcm" name="qcm1" type="radio">La commande "ping" suivie du nom du serveur<br><p class="vrai">Exact.<br>L'adresse IP des serveurs sera indiquée dans les informations retournées.<br>Il restera à les comparer.</p>
<input class="qcm" name="qcm1" type="radio">La commande "cmd.exe"<br><p class="faux">Non.<br>Cette commande de Windows permet seulement d'entrer dans une fenêtre de commande.</p>
<input class="qcm" name="qcm1" type="radio">La commande "transroute"<br><p class="faux">Réponse fausse.<br>Cette commande n'existe pas, ni sous Windows, ni sous Linux.</p>
<input class="qcm" name="qcm1" type="radio">Aucune commande. C'est impossible de le savoir.<br><p class="faux">Réponse fausse.<br>Il est possible de savoir si les serveurs sont bien différents.</p>
</form>
</fieldset>
      
      <p>Quand tu as compris le rôle de la première partie de l'adresse DNS, passe à la page suivante. <?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
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
