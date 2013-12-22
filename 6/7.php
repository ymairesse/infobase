<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function (){
        $(".qcm").click(function(){
            $(this).next().next().show(300);
        })
    })
  </script>     
  <title>Les programmes d'ordinateur</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>Le syst�me d'exploitation</h2>
      <div class="info"><p><img class="imagedroite" style="width: 204px; height: 95px;" alt="Ubuntu" src="images/ubuntucds.jpg">Lorsque l'ordinateur d�marre, le <strong>BIOS</strong> contient tous les programmes n�cessaires pour lui faire r�aliser les principales actions de base&nbsp;: lire les disques, le clavier, la souris, ... �crire � l'�cran, sur les disques, ...</p>
      <p>Une deuxi�me s�rie de programmes intervient alors: c'est <strong>le syst�me d'exploitation</strong>. Celui-ci permet � l'ordinateur d'<strong>organiser son travai</strong>l. La fa�on dont on organise les informations enregistr�es sur les disques, la fa�on dont on organise les informations dans la m�moire, ...</p>
      <p>V�rifie quel syst�me d'exploitation est utilis� sur l'ordinateur avec lequel tu travailles.</p>
      <p>Il existe d'autres syst�mes d'exploitation&nbsp;:</p>
      <table style="margin: auto; width: 80%; text-align: left;" border="0" cellpadding="5" cellspacing="5">
        <tbody>
          <tr valign="top">
            <td width="50%">
              <img style="width: 154px; height: 152px; float: right;" alt="OS/2" src="images/android.png">
              <ul>
                <li>Android, un syst�me d'exploitation utilis� sur certaines tablettes et smartphones</li>
              </ul>
            </td>
            <td width="50%">
              <ul>
                <li><img style="width: 102px; height: 100px; float: right;" alt="Unix" src="images/unixware7.jpg">UNIX (souvent utilis� sur de plus gros ordinateurs),</li>
              </ul>
            </td>
          </tr>
          <tr valign="top">
            <td width="50%">
              <ul>
                <li><img style="width: 130px; height: 171px; float: right;" alt="MacOS" src="images/macos.png">Mac OS (pour les ordinateurs du type MacIntosh),</li>
              </ul>
            </td>
            <td width="50%">
              <ul>
                <li><img style="width: 130px; height: 154px; float: right;" alt="Linux" src="images/tux.png">LINUX (syst�me d'exploitation semblable � UNIX mais libre et souvent&nbsp; gratuit)<br>
                il en existe un grand nombre de variantes.</li>
              </ul>
            </td>
          </tr>
          <tr valign="top">
            <td width="50%">
              <ul>
                <li><img style="width: 128px; height: 128px; float: right;" alt="Windows" src="images/seven.png">Windows XP, Vista, Seven, Windows 8, ...</li>
              </ul>
            </td>
            <td width="50%">
              <ul>
                <li>.........</li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>
      <p>Il faut remarquer que, bien souvent, les syst�mes d'exploitation ne sont pas compatibles entre eux.</p>
      <p>Un logiciel �crit pour fonctionner sous Windows ne peut pas fonctionner directement sous Linux. Un logiciel �crit pour fonctionner sur un Mac ne pourra pas fonctionner sous Windows.</p>
      <p class="questions">M�me pas vrai! Mon petit cousin, il utilise Linux et le traitement de textes LibreOffice comme moi avec mon PC sous Windows.<br>
      Et m�me, mon grand fr�re, il a un Mac et utilise Word, comme sur un PC.</p>
      <p class="reponses">Vous avez partiellement raison. Le logiciel est bien le m�me, mais le code doit �tre totalement r�adapt�, d'un syst�me d'exploitation � l'autre. Si vous t�l�chargez la version pour Linux, elle ne fonctionnera pas sur un Mac. Si vous achetez une version Windows de Microsoft Office, elle ne fonctionnera pas sur un Mac.</p>
      </div>
      <form class="qcu" action="">
        Le r�le principal du syst�me d'exploitation est&nbsp;:<br />
		<input class="qcm" type="radio">d'organiser le traitement des informations dans l'ordinateur<br />
		<p class="vrai">C'est parfaitement exact.<br />Le syst�me d'exploitation d�termine comment les informations sont trait�es.</p>
		<input class="qcm" type="radio">d�tecter quelles touches sont frapp�es au clavier<br />
		<p class="faux">Non.<br />Ceci est le travail du BIOS</p>
		<input class="qcm" type="radio">de faire fonctionner l'�cran<br />
		<p class="faux">Non.<br />Il n'y a pas de rapport direct entre le syst�me d'exploitation et le fonctionnement de l'�cran.</p>		
      </form>
      <p>Quand tu as r�pondu � la question et bien compris la r�ponse, passe � la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
	<?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
