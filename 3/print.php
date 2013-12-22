<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org" />
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print" />
  <script language="JavaScript" type="text/javascript">
//<![CDATA[
  function WindowPrint () {
  window.print ();
  alert('Vérifie que la page est correctement imprimée avant de poursuivre la leçon.');
  history.go(-1);
  }
  //]]>
  </script>
  <title>Les périphériques de stockage</title>
</head>
<body>
<?php
foreach ($_POST as $key=>$value)
	$$key = nl2br(stripslashes(htmlentities($value)));
?>
  <div id="conteneur">
    <div id="texte">
      <h2>Les disques et les cassettes: synthèse</h2>
      <form method="post" action="print.php">
        <table style="text-align: center;" border="1" width="100%">
          <tbody>
            <tr>
              <td>Critère de comparaison</td>
              <td width="100">Disque informatique</td>
              <td width="100">Cassette audio ou vidéo</td>
            </tr>
            <tr>
              <td><?php echo $r1; ?>&nbsp;</td>
              <td width="100"><?php echo ($c1a)?"OUI":"NON"; ?></td>
              <td width="100"><?php echo ($c1b)?"OUI":"NON"; ?></td>
            </tr>
            <tr>
              <td><?php echo $r2; ?>&nbsp;</td>
              <td width="100"><?php echo ($c2a)?"OUI":"NON"; ?></td>
              <td width="100"><?php echo ($c2b)?"OUI":"NON"; ?></td>
            </tr>
            <tr>
              <td><?php echo $r3; ?>&nbsp;</td>
              <td width="100"><?php echo ($c3a)?"OUI":"NON"; ?></td>
              <td width="100"><?php echo ($c3b)?"OUI":"NON"; ?></td>
            </tr>
            <tr>
              <td><?php echo $r4; ?>&nbsp;</td>
              <td width="100"><?php echo ($c4a)?"OUI":"NON"; ?></td>
              <td width="100"><?php echo ($c4b)?"OUI":"NON"; ?></td>
            </tr>
          </tbody>
        </table>
        <p><label>Nom:</label><?php echo $nom; ?>&nbsp;</p>
        <p><label>Prénom:</label><?php echo $prenom; ?>&nbsp;</p>
        <p><label>Classe:</label><?php echo $classe; ?>&nbsp;</p>
        <p class="invisible" style="text-align: center;">Cliquer sur <img src="../../images/printr3c.gif" onclick="WindowPrint()" style="cursor: pointer;" title="Cliquer pour imprimer" height="32" width="32" /> pour imprimer</p>
      </form>
    </div>
  </div>
</body>
</html>
