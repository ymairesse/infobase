<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
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
<h2>Les périphériques informatiques: exercice de synthèse</h2>
<?php
foreach ($_POST as $key=>$value)
  $$key = $value;
?>
<table bgcolor="#ffffcc" border="1" cellpadding="3" width="100%">
  <tbody style="text-align: center;">
    <tr>
      <td width="40%">
      <h3> Périphérique </h3>
      </td>
      <td width="20%">
      <h3> Entrée </h3>
      </td>
      <td width="20%">
      <h3> Sortie </h3>
      </td>
      <td width="20%">
      <h3> Je passe </h3>
      </td>
    </tr>
    <tr>
      <td width="40%"> clavier </td>
      <td width="20%"><?php if (isset($c1)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c2)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c3)) echo "X"; ?> </td>
    </tr>
    <tr>
      <td width="40%"> écran </td>
      <td width="20%"><?php if (isset($c4)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c5)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c6)) echo "X"; ?> </td>
    </tr>
    <tr>
      <td width="40%"> souris </td>
      <td width="20%"><?php if (isset($c7)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c8)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c9)) echo "X"; ?> </td>
    </tr>
    <tr>
      <td width="40%"> imprimante </td>
      <td width="20%"><?php if (isset($c10)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c11))  echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c12)) echo "X"; ?> </td>
    </tr>
    <tr>
      <td width="40%"> lecteur de codes à barres </td>
      <td width="20%"><?php if (isset($c13)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c14)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c15)) echo "X"; ?> </td>
    </tr>
    <tr>
      <td width="40%"> modem </td>
      <td width="20%"><?php if (isset($c16)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c17)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c18)) echo "X"; ?> </td>
    </tr>
    <tr>
      <td width="40%"> caméra ou appareil photo digital </td>
      <td width="20%"><?php if (isset($c19)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c20)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c21)) echo "X"; ?> </td>
    </tr>
    <tr>
      <td width="40%">manette de jeu </td>
      <td width="20%"><?php if (isset($c22)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c23)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c24)) echo "X"; ?> </td>
    </tr>
    <tr>
      <td width="40%"> scanner </td>
      <td width="20%"><?php if (isset($c25)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c26)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c27)) echo "X"; ?> </td>
    </tr>
    <tr>
      <td width="40%"> lecteur de CD-ROM externe </td>
      <td width="20%"><?php if (isset($c28)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c29)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c30)) echo "X"; ?> </td>
    </tr>
    <tr>
      <td width="40%"> crayon optique (pour le vote électronique) </td>
      <td width="20%"><?php if (isset($c31)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c32)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c33)) echo "X"; ?> </td>
    </tr>
    <tr>
      <td width="40%"> graveur de CD-ROM </td>
      <td width="20%"><?php if (isset($c34)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c35)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c36)) echo "X"; ?> </td>
    </tr>
    <tr>
      <td width="40%"> sonde de température (station météo) </td>
      <td width="20%"><?php if (isset($c37)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c38)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c39)) echo "X"; ?> </td>
    </tr>
    <tr>
      <td width="40%"> lecteur de DVD </td>
      <td width="20%"><?php if (isset($c40)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c41)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c42)) echo "X"; ?> </td>
    </tr>
    <tr>
      <td width="40%">lecteur MP3</td>
      <td width="20%"><?php if (isset($c43)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c44)) echo "X"; ?> </td>
      <td width="20%"><?php if (isset($c45)) echo "X"; ?> </td>
    </tr>
  </tbody>
</table>
<p><span class="label">Nom:</span><strong><?php if (isset($nom)) echo $nom; ?></strong></p>
<p><span class="label">Prénom:</span><strong><?php if (isset($prenom)) echo $prenom; ?></strong></p>
<p><span class="label">Classe:</span><strong><?php if (isset($classe)) echo $classe; ?></strong></p>
<p class="invisible" style="text-align: center">
<img src="../../images/printr3c.gif" title="Cliquer pour imprimer" alt="print" class="pointer" onclick="WindowPrint()" height="32" width="32"></p>
</div>
</div>
</body>
</html>
