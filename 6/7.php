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
      <h2>Le système d'exploitation</h2>
      <div class="info"><p><img class="imagedroite" style="width: 204px; height: 95px;" alt="Ubuntu" src="images/ubuntucds.jpg">Lorsque l'ordinateur démarre, le <strong>BIOS</strong> contient tous les programmes nécessaires pour lui faire réaliser les principales actions de base&nbsp;: lire les disques, le clavier, la souris, ... écrire à l'écran, sur les disques, ...</p>
      <p>Une deuxième série de programmes intervient alors: c'est <strong>le système d'exploitation</strong>. Celui-ci permet à l'ordinateur d'<strong>organiser son travai</strong>l. La façon dont on organise les informations enregistrées sur les disques, la façon dont on organise les informations dans la mémoire, ...</p>
      <p>Vérifie quel système d'exploitation est utilisé sur l'ordinateur avec lequel tu travailles.</p>
      <p>Il existe d'autres systèmes d'exploitation&nbsp;:</p>
      <table style="margin: auto; width: 80%; text-align: left;" border="0" cellpadding="5" cellspacing="5">
        <tbody>
          <tr valign="top">
            <td width="50%">
              <img style="width: 154px; height: 152px; float: right;" alt="OS/2" src="images/android.png">
              <ul>
                <li>Android, un système d'exploitation utilisé sur certaines tablettes et smartphones</li>
              </ul>
            </td>
            <td width="50%">
              <ul>
                <li><img style="width: 102px; height: 100px; float: right;" alt="Unix" src="images/unixware7.jpg">UNIX (souvent utilisé sur de plus gros ordinateurs),</li>
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
                <li><img style="width: 130px; height: 154px; float: right;" alt="Linux" src="images/tux.png">LINUX (système d'exploitation semblable à UNIX mais libre et souvent&nbsp; gratuit)<br>
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
      <p>Il faut remarquer que, bien souvent, les systèmes d'exploitation ne sont pas compatibles entre eux.</p>
      <p>Un logiciel écrit pour fonctionner sous Windows ne peut pas fonctionner directement sous Linux. Un logiciel écrit pour fonctionner sur un Mac ne pourra pas fonctionner sous Windows.</p>
      <p class="questions">Même pas vrai! Mon petit cousin, il utilise Linux et le traitement de textes LibreOffice comme moi avec mon PC sous Windows.<br>
      Et même, mon grand frère, il a un Mac et utilise Word, comme sur un PC.</p>
      <p class="reponses">Vous avez partiellement raison. Le logiciel est bien le même, mais le code doit être totalement réadapté, d'un système d'exploitation à l'autre. Si vous téléchargez la version pour Linux, elle ne fonctionnera pas sur un Mac. Si vous achetez une version Windows de Microsoft Office, elle ne fonctionnera pas sur un Mac.</p>
      </div>
      <form class="qcu" action="">
        Le rôle principal du système d'exploitation est&nbsp;:<br />
		<input class="qcm" type="radio">d'organiser le traitement des informations dans l'ordinateur<br />
		<p class="vrai">C'est parfaitement exact.<br />Le système d'exploitation détermine comment les informations sont traitées.</p>
		<input class="qcm" type="radio">détecter quelles touches sont frappées au clavier<br />
		<p class="faux">Non.<br />Ceci est le travail du BIOS</p>
		<input class="qcm" type="radio">de faire fonctionner l'écran<br />
		<p class="faux">Non.<br />Il n'y a pas de rapport direct entre le système d'exploitation et le fonctionnement de l'écran.</p>		
      </form>
      <p>Quand tu as répondu à la question et bien compris la réponse, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
	<?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
