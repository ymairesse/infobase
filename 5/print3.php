<?php // anti-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script language="JavaScript" type="text/javascript">
function WindowPrint () {
  window.print ();
  alert('Vérifie que ta page est imprimée avant de poursuivre.');
  history.go(-1);
  }
  </script>
  <title>Le clavier de l'ordinateur</title>
</head>
<body>
    <?php
    foreach ($_POST as $key=>$value)
        $$key = stripslashes($value);
    ?>
  <div id="conteneur">
    <div id="texte">
    <h2>Le pavé numérique</h2>
  <ol>
    <li><strong>Quand le pavé numérique est DESACTIVE,</strong> le rôle de la touche qui porte le chiffre 7 est <?php echo nl2br($r1); ?>
      </li>
      <li>Le rôle de la touche qui porte le chiffre 9 est <?php echo nl2br($r2); ?>
      </li>
      <li>Le rôle de la touche qui porte le chiffre 3 est <?php echo nl2br($r3); ?>
      </li>
      <li>Le rôle de la touche qui porte le chiffre 1 est <?php echo nl2br($r4); ?>
      </li>
      <li>Le rôle des touches qui portent des flèches est <?php echo nl2br($r5); ?>
      </li>
    </ol>
      <span class="label">Nom&nbsp;:</span> <?php echo $nom; ?><br>
      <span class="label">Prénom&nbsp;:</span> <?php echo $prenom; ?><br>
      <span class="label">Classe&nbsp;:</span> <?php echo $classe ?><br>
      <form action="" class="invisible">
        <div style="text-align:center">
          <input type="reset" name="Submit" value="Imprimer" onclick="WindowPrint()"> <input type="button" name="Submit2" value="Annuler" onclick="javascript:history.go(-1)">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
