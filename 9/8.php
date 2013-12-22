<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script language="javascript" type="text/javascript">
function trim(string)
  {
  return string.replace(/(^\s*)|(\s*$)/g,'');
  } 
  function verif (reponse, correct, qui)
  {
  reponse = trim(reponse);
  exact="<span style='font-size:x-large;color:green;font-weight:bold;' title='Correct'>V<\/span>";
  faux = "<span style='font-size:x-large;color:red;font-weight:bold;' title='Faux'>X<\/span>";
  if (reponse == correct)
        document.getElementById(qui).innerHTML = exact
        else
        document.getElementById(qui).innerHTML = faux;
  return true;
  }
  </script>
  <title>Introduction à l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>L'adresse DNS des ordinateurs</h2>
      <h3>L'adresse DNS</h3>
      <p class="questions">Ouais, pas très pratique quand même, ces adresses IP&nbsp;! Si je veux comuniquer avec l'ordinateur de mon voisin, je lui demande son adresse IP&nbsp;: j'ai compris. Mais si je veux communiquer avec un ordinateur du Pentagone, je fais comment&nbsp;? Il y a un annuaire, comme pour le téléphone&nbsp;?</p>
      <p class="reponses"><img src="images/angoisse.gif" alt="Les adresses IP, ça craint!" class="imagedroite" height="218" width="236">Ouh la la, ce serait un fameux annuaire&nbsp;! Il y a plus de 4 milliards d'adresses IP possibles. Ce ne serait pas très pratique.</p>
      <div class="info">
		<p>La solution réside dans l'utilisation de noms en toutes lettres, plus faciles à retenir. C'est l'adresse <strong>DNS</strong> (Domain Name System).</p>
		<p>Une adresse DNS est formée d'une série de mots pouvant contenir des lettres et des chiffres, mais pas de caractères accentués ou d'espaces.</p>
		<p>Exemple d'adresse DNS: <strong>www.sio2.be</strong>&nbsp;</p>
		<p>Pour déterminer quelle adresse DNS correspond à quelle adresse IP, il faut un répertoire de correspondance comme ci-dessous.</p>
      </div>
      <p class="questions">Mais vous venez d'affirmer qu'il ne serait pas possible de disposer d'un annuaire&nbsp;!</p>
      <p class="reponses">Effectivement, un annuaire "&nbsp;papier&nbsp;" ne serait vraiment pas pratique. D'autant que de nouvelles adresses apparaissent tous les jours, que d'autres disparaissent et certaines changent.</p>
      <div class="info">
      <p>Dans la réalité, ce sont des ordinateurs qui établissent cette correspondance entre adresses. Ces ordinateurs sont appelés DNS (<strong>Domain Name System</strong>). Il s'agit donc de sortes d'annuaires électroniques. L'avantage est qu'ils peuvent être constamment tenus à jour.</p>
      </div>
      <div class="travail">
        Dans le tableau ci-dessous, indique les adresses IP des serveurs dont on fournit les adresses DNS.
      <p>Pour chaque réponse, clique sur le bouton Vérifier. Une bonne réponse est notée <span style="font-size: x-large; color: green; font-weight: bold;" title="Correct">V</span>, une mauvaise réponse est marquée <span style="font-size: x-large; color: red; font-weight: bold;" title="Faux">X</span>.</p>
      <div class="encartdroit" style="width: 150px; height: 25px;">
        <form name="form1" method="post" action="" id="form1">
          <div style="text-align: center;">
            <input name="Submit" value="Recherche IP" onclick='javascript:window.open ("tracert.php","trace","toolbar=no, location=no, status=no, menubar=no, resizable=no, scrollbars=no, width=300, height=150"); trace.focus()' type="button">
          </div>
        </form>
      </div>
      <p>Pour trouver ces adresses IP, utilise le petit utilitaire de recherche disponible en cliquant sur le bouton ci-contre. Fournis une adresse DNS d'un serveur et l'utilitaire te renverra l'adresse IP de ce serveur.</p>
      <form name="form2" action="" id="form2">
        <table border="1" cellpadding="5" cellspacing="5" width="100%">
          <tbody>
            <tr bgcolor="#FFFF99">
              <td bgcolor="#FFFFCC">Adresse DNS</td>
              <td bgcolor="#FFFFCC">Adresse IP</td>
              <td bgcolor="#FFFFCC"></td>
              <td bgcolor="#FFFFCC" width="40">
                <div style="text-align: center;"></div>
              </td>
            </tr>
            <tr>
              <td><a href="http://www.musee-picasso.fr" target="_blank">www.musee-picasso.fr</a></td>
              <td><input name="IP1" id="IP1" type="text"> <input name="IPC1" id="IPC1" value="<?php echo gethostbyname('www.musee-picasso.fr') ?>" type="hidden"></td>
              <td>
                <div style="text-align: center;">
                  <input name="Submit" value="Vérifier" onclick="verif(IP1.value, IPC1.value, 'R1')" type="button">
                </div>
              </td>
              <td width="40">
                <div style="text-align: center;">
                  <span id="R1">?</span>
                </div>
              </td>
            </tr>
            <tr>
              <td><a href="http://internet.videotron.ca" target="_blank">internet.videotron.ca</a></td>
              <td><input name="IP2" id="IP2" type="text"> <input name="IPC2" id="IPC2" value="<?php echo gethostbyname('internet.videotron.ca') ?>" type="hidden"></td>
              <td>
                <div style="text-align: center;">
                  <input name="Submit" value="Vérifier" onclick="verif(IP2.value, IPC2.value, 'R2')" type="button">
                </div>
              </td>
              <td width="40">
                <div style="text-align: center;">
                  <span id="R2">?</span>
                </div>
              </td>
            </tr>
            <tr>
              <td><a href="http://belgium.fgov.be" target="_blank">belgium.fgov.be</a></td>
              <td><input name="IP3" id="IP3" type="text"> <input name="IPC3" id="IPC3" value="<?php echo gethostbyname('belgium.fgov.be') ?>" type="hidden"></td>
              <td>
                <div style="text-align: center;">
                  <input name="Submit" value="Vérifier" onclick="verif(IP3.value, IPC3.value, 'R3')" type="button">
                </div>
              </td>
              <td width="40">
                <div style="text-align: center;">
                  <span id="R3">?</span>
                </div>
              </td>
            </tr>
            <tr>
              <td><a href="http://un2sg1.unige.ch" target="_blank">un2sg1.unige.ch</a></td>
              <td><input name="IP4" id="IP4" type="text"> <input name="IPC4" id="IPC4" value="<?php echo gethostbyname('un2sg1.unige.ch') ?>" type="hidden"></td>
              <td>
                <div style="text-align: center;">
                  <input name="Submit" value="Vérifier" onclick="verif(IP4.value, IPC4.value, 'R4')" type="button">
                </div>
              </td>
              <td width="40">
                <div style="text-align: center;">
                  <span id="R4">?</span>
                </div>
              </td>
            </tr>
            <tr>
              <td><a href="http://www.framasoft.net" target="_blank">www.framasoft.net</a></td>
              <td><input name="IP5" id="IP5" type="text"> <input name="IPC5" id="IPC5" value="<?php echo gethostbyname('www.framasoft.net') ?>" type="hidden"></td>
              <td>
                <div style="text-align: center;">
                  <input name="Submit" value="Vérifier" onclick="verif(IP5.value, IPC5.value, 'R5')" type="button">
                </div>
              </td>
              <td width="40">
                <div style="text-align: center;">
                  <span id="R5">?</span>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
      </div>
      <p class="questions"><img src="images/gogole.png" class="imagedroite" style="clear: both;" height="148" width="439"> Ouah&nbsp;! C'est magique&nbsp;? Ou bien dans cette minuscule petite fenêtre de l'utilitaire on a casé toutes les adresses IP de tous les serveurs de l'Internet&nbsp;?</p>
      <p class="reponses">Ni l'un, ni l'autre. A chaque demande d'adresse IP, l'utilitaire a interrogé un serveur DNS qui lui a renvoyé l'adresse IP correspondante. Il n'avait alors plus qu'à annoncer cette adresse IP.</p>
      <p class="questions">Bon, d'accord, mais il me semble que je flaire l'embrouille, derrière tous ces chiffres. Je ne suis qu'à moitié sûr que ces adresses IP correspondent bien aux sites web cités.</p>
      <p class="reponses">Il est très simple de vérifier&nbsp;: indique l'une des adresses IP ci-dessus dans la barre d'adresse de ton navigateur. La vérité éclatera.</p>
      <p>Quand tu as trouvé les adresses IP correspondant aux adresses DNS, passe à la page suivante. <?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
