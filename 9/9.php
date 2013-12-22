<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Introduction � l'Internet</title>
  <script type="text/javascript" src="../../js/jquery.js"></script>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>


</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Les adresses des ordinateurs</h2>
      <h3>Comment d�coder l'adresse DNS&nbsp;?</h3>
      <p class="info">L'adresse DNS nous donne une s�rie d'informations sur la nature de l'ordinateur qui lui correspond.</p>
      <p>Examinons les trois parties de l'adresse DNS.</p>
      <h3><img src="images/sherlock.gif" class="imagedroite" align="right" height="250" width="200">1�re partie</h3>
      <p>La premi�re partie de l'adresse indique g�n�ralement <strong>le nom de l'ordinateur</strong>. Chaque personne qui souhaite donner une adresse DNS � un ordinateur peut choisir ce nom, comme elle le veut.</p>
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
      <p><strong>www</strong> est un nom g�n�rique, souvent donn�, pour indiquer un serveur Web.</p>
      
<fieldset class="qcu"><form action="javascript:void(0)" >
En cherchant des informations concernant la Belgique, je trouve des pages web sur un serveur du Minist�re des finances appel� "minfin.fgov.be" et d'autres informations sur un serveur qui publie des statistiques relatives au pays : "statbel.fgov.be".<br />
Ces deux sites web sont-ils h�berg�s sur le m�me serveur ?<br>
<input class="qcm" name="qcm1" type="radio">Oui<br><p class="faux">R�ponse fausse.<br>A la date o� ce cours a �t� �crit, les deux sites web se trouvaient sur des serveurs diff�rents.<br>V�rifie les adresses IP des deux ordinateurs minfin.fgov.be et statbel.fgov.be</p>
<input class="qcm" name="qcm1" type="radio">Non<br><p class="vrai">R�ponse correcte.<br>Pour en faire la preuve, il suffit effectivement de v�rifier que minfin.fgov.be et statbel.fgov.be correspondent � des adresses IP diff�rentes.</p>
<input class="qcm" name="qcm1" type="radio">Il est impossible de r�pondre � cette question.<br><p class="faux">Si, c'est possible.<br>Tu as re�u toutes les informations pour le d�terminer.</p>
<input class="qcm" name="qcm1" type="radio">C'est possible, mais cela demandera plusieurs jours pour le d�terminer.<br><p class="faux">Incorrect.<br>On obtient la r�ponse imm�diatement si l'on utilise les informations donn�es plus haut dans ce cours.</p>
</form>
</fieldset>
      
<fieldset class="qcu"><form action="javascript:void(0)" >
Pour v�rifier que deux sites web sont bien sur des serveurs diff�rents, on peut utiliser<br>
<input class="qcm" name="qcm1" type="radio">La commande "ping" suivie du nom du serveur<br><p class="vrai">Exact.<br>L'adresse IP des serveurs sera indiqu�e dans les informations retourn�es.<br>Il restera � les comparer.</p>
<input class="qcm" name="qcm1" type="radio">La commande "cmd.exe"<br><p class="faux">Non.<br>Cette commande de Windows permet seulement d'entrer dans une fen�tre de commande.</p>
<input class="qcm" name="qcm1" type="radio">La commande "transroute"<br><p class="faux">R�ponse fausse.<br>Cette commande n'existe pas, ni sous Windows, ni sous Linux.</p>
<input class="qcm" name="qcm1" type="radio">Aucune commande. C'est impossible de le savoir.<br><p class="faux">R�ponse fausse.<br>Il est possible de savoir si les serveurs sont bien diff�rents.</p>
</form>
</fieldset>
      
      <p>Quand tu as compris le r�le de la premi�re partie de l'adresse DNS, passe � la page suivante. <?php include ("../../suivant.inc.php");?></p>
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
