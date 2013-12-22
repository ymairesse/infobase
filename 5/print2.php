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
  <div id="conteneur">
    <div id="texte">
        <?php
        foreach ($_POST as $key=>$value)
            $$key = stripslashes($value);
        ?>
      <h2>Delete et Retour arrière: synthèse</h2>1. Le rôle de la touche <span class="clavier">Delete</span> et son mode d'emploi sont:<br>
      <?php echo nl2br($r1); ?>
      <hr>
      2. Le rôle de la touche <span class="clavier">Retour Arrière</span> et son mode d'emploi sont:<br>
      <?php echo nl2br($r2); ?>
      <hr>
      <label>Nom</label> <?php echo $nom ?><br>
      <label>Prénom</label> <?php echo $prenom ?><br>
      <label>Classe</label> <?php echo $classe ?><br>
      <form action="" class="invisible">
        <div style="text-align:center">
          <input type="button" name="Submit" value="Imprimer" onclick="WindowPrint()"> <input type="button" name="Submit2" value="Annuler" onclick="javascript:history.go(-1)">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
