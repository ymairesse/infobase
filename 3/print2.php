<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta name="generator" content="HTML Tidy for Windows (vers 1st July 2004), see www.w3.org">
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
  <title>Les périphériques de stockage</title>
</head>
<body>
  <div id="conteneur">
    <div id="texte">
      <h2>Capacités des unités de stockage: synthèse</h2>
    <?php 
    foreach ($_POST as $key=>$value)
            $$key = stripslashes($value);
    ?>
      <table style="text-align: center;" border="1" width="100%">
        <tbody>
          <tr style="background-color: rgb(255, 255, 204);">
            <td width="33%">Type de disque</td>
            <td>Capacité</td>
            <td>Unités</td>
          </tr>
          <tr>
            <td width="33%">clef USB</td>
            <td width="49%">entre <strong><?php echo "$c1a et $c1b"; ?></strong></td>
            <td width="18%"><strong><?php echo $u1; ?></strong></td>
          </tr>
          <tr>
            <td width="33%">disque dur interne</td>
            <td width="49%">entre <strong><?php echo "$c2a et $c2b"; ?></strong></td>
            <td width="18%"><strong><?php echo $u2; ?></strong></td>
          </tr>
          <tr>
            <td>disque dur externe</td>
            <td>entre <strong><?php echo "$c3a et $c3b"; ?></strong></td>
            <td><strong><?php echo $u3; ?></strong></td>
          </tr>
        </tbody>
      </table><label>Nom:</label><strong><?php echo $nom; ?></strong><br>
      <label>Prénom:</label><strong><?php echo $prenom; ?></strong><br>
      <label>Classe:</label><strong><?php echo $classe; ?></strong><br>
      <p class="invisible" style="text-align: center;">Cliquer sur <img src="../../images/printr3c.gif" onclick="WindowPrint();" style="cursor: pointer;" title="Cliquer pour imprimer" height="32" width="32"> pour imprimer</p>
    </div>
  </div>
</body>
</html>
