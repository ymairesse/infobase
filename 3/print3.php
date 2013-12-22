<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script language="JavaScript" type="text/javascript">
function WindowPrint () {
  window.print ();
  alert('Vérifie que ta page est imprimée avant de poursuivre.');
  history.go(-1);
  }
  </script>
  <title>Les périphériques: les disques</title>
</head>
<body>
    <?php
    foreach ($_POST as $key=>$value)
        $$key = stripslashes($value);
    ?>
  <div id="conteneur">
    <div id="texte">
      <h2>Capacité de stockage des disques</h2>
      <p>Une page de texte formée de 60 lignes de 50 caractères compte donc 3000 caractères. Le nombre de pages que l'on pourrait enregistrer sur les différents supports est repris dans le tableau ci-dessous.<br>
      <span class="micro">(Pour simplifier, un Ko contient 1000 octets).</span></p>
      <table bordercolorlight="#99CCFF" style="text-align: center;" border="1" bordercolor="#FFFFFF" width="100%">
        <tbody>
          <tr bgcolor="#FFFFCC">
            <td width="15%">Type de disque</td>
            <td width="45%">Capacité</td>
            <td width="45%">Calcul</td>
            <td width="38%">
              <div style="text-align: center;">
                Nombre de pages
              </div>
            </td>
          </tr>
          <tr>
            <td width="15%">3"1/2 2 HD</td>
            <td><?php echo $c1; ?>Mo</td>
            <td>
              <?php echo $o1; ?>octets<br>
              <hr>
              3000 octets/page
            </td>
            <td><?php echo $p1; ?>&nbsp;pages</td>
          </tr>
          <tr>
            <td width="15%">Disque dur</td>
            <td><?php echo $c2; ?>Go</td>
            <td>
              <?php echo $o2; ?>octets<br>
              <hr>
              3000 octets/page
            </td>
            <td><?php echo $p2; ?>&nbsp;pages</td>
          </tr>
          <tr>
            <td>Clef USB (moyenne)</td>
            <td><?php echo $c4; ?>&nbsp;Go</td>
            <td>
              <?php echo $o4;?>octets<br>
              <hr>
              3000 octets/page
            </td>
            <td><?php echo $p4; ?>&nbsp;pages</td>
          </tr>
          <tr>
            <td width="15%">CD-ROM</td>
            <td><?php echo $c5; ?>Mo</td>
            <td>
              <?php echo $o5; ?>octets
              <hr>
              3000 octets/page
            </td>
            <td><?php echo $p5; ?>&nbsp;pages</td>
          </tr>
          <tr>
            <td>DVD-ROM</td>
            <td>jusqu'&#224;<?php echo $c6; ?> Go</td>
            <td>
              <?php echo $o6; ?>octets
              <hr>
              3000 octets/page
            </td>
            <td><?php echo $p6; ?>&nbsp;pages</td>
          </tr>
        </tbody>
      </table>
      <p>Un volume d'une encyclopédie contient 2500 pages. Sur un seul CD-ROM, on pourrait enregistrer<?php echo "<b>$vol</b>"; ?> volumes.</p>
      <label>Nom:</label><?php echo $nom; ?><br>
      <label>Prénom:</label><?php echo $prenom; ?><br>
      <label>Classe:</label><?php echo $classe; ?><br>
      <p class="invisible" style="text-align: center;">Cliquer sur <img style="cursor: pointer;" src="../../images/printr3c.gif" alt="Cliquer pour imprimer" onclick="WindowPrint()" height="32" width="32"> pour imprimer</p>
    </div>
  </div>
</body>
</html>
