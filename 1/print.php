<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head>  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <style type="text/css">
  #tableau td {text-align: center}
  </style>
  <script type="text/javascript">
function WindowPrint () {
  window.print ();
  alert('Vérifie que ta page est imprimée avant de poursuivre.');
  history.go(-1);
  }
  </script>
  <title>L'unité centrale et les périphériques</title>
</head>
<body>
  <div id="conteneur">
    <div id="texte">
      <h2>Synthèse: les périphériques</h2>
    <?php
    foreach ($_POST as $key=>$value)
        $$key = stripslashes($value);
    ?>      <div style="width: 40%; float: left;">
        <table border="1" cellspacing="0" width="100%" id="tableau">
          <tbody>
            <tr>
              <td>Ecouteurs</td>
              <td><?php if (isset($c11)) echo $c11; else echo "&nbsp"; ?></td>
              <td><?php if (isset($c12)) echo $c12; else echo "&nbsp"; ?></td>
            </tr>
            <tr>
              <td>Baffle gauche</td>
              <td><?php if (isset($c21)) echo $c21; else echo "&nbsp"; ?></td>
              <td><?php if (isset($c22)) echo $c22; else echo "&nbsp"; ?></td>
            </tr>            <tr>
              <td>Baffle droit</td>              <td><?php if (isset($c31)) echo $c31; else echo "&nbsp"; ?></td>              <td><?php if (isset($c32)) echo $c32; else echo "&nbsp"; ?></td>
            </tr>            <tr>
              <td>Micro</td>              <td><?php if (isset($c41)) echo $c41; else echo "&nbsp"; ?></td>              <td><?php if (isset($c42)) echo $c42; else echo "&nbsp"; ?></td>
            </tr>            <tr>
              <td>Amplificateur</td>              <td><?php if (isset($c51)) echo $c51; else echo "&nbsp"; ?></td>
              <td><?php if (isset($c52)) echo $c52; else echo "&nbsp"; ?></td>
            </tr>            <tr>
              <td>Lecteur CD</td>              <td><?php if (isset($c61)) echo $c61; else echo "&nbsp"; ?></td>
              <td><?php if (isset($c62)) echo $c62; else echo "&nbsp"; ?></td>
            </tr>            <tr>
              <td>Tuner radio</td>              <td><?php if (isset($c71)) echo $c71; else echo "&nbsp"; ?></td>
              <td><?php if (isset($c72)) echo $c72; else echo "&nbsp"; ?></td>
            </tr>
            <tr>
              <td>Cassette</td>
              <td><?php if (isset($c81)) echo $c81; else echo "&nbsp"; ?></td>
              <td><?php if (isset($c82)) echo $c82; else echo "&nbsp"; ?></td>
            </tr>
          </tbody>
        </table>
      </div><img src="images/hifi.gif" height="333" width="496"><br>
      <p style="clear: both;">
      <?php echo htmlspecialchars("<b>$reponse</b>");?></p>
      <p><label>Nom&nbsp;:</label><strong><?php if (isset($nom)) echo htmlspecialchars("$nom"); ?></strong></p>
      <p><label>Prénom:</label><strong><?php if (isset($prenom)) echo htmlspecialchars("$prenom"); ?></strong></p>
      <p><label>Classe:</label><strong><?php if (isset($classe)) echo htmlspecialchars("$classe"); ?></strong></p>
      <p class="invisible" style="text-align: center">
        <img src="../../images/printr3c.gif" title="Cliquer pour imprimer" alt="print" class="pointer" onclick="WindowPrint()" height="32" width="32"></p>
    </div>
  </div>
</body>
</html>
