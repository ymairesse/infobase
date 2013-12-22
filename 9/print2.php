<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
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
  <title>Introduction à l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <div id="texte">
      <h2>Introduction à l'Internet&nbsp;: synthèse du chapitre</h2>
      <p>La commande du système d'exploitation qui permet de connaître le chemin suivi par les paquets d'information entre les ordinateurs est&nbsp;:</p><?php echo "<b>".$_POST['chemin']."</b>\n"; ?>
      <hr>
      <p>Sous Windows 2000/XP, la commande du système d'exploitation qui permet de connaître l'adresse IP de son propre ordinateur est&nbsp;:</p><?php echo "<b>".$_POST['ip']."</b>\n"; ?>
      <hr>
      <p>Différence entre les concepts suivants:</p>
      <ul>
        <li>Adresse URL et adresse DNS</li>
      </ul><?php echo "<b>".stripslashes($_POST['urldns'])."</b>\n"; ?>
      <ul>
        <li>Adresse IP et adresse DNS</li>
      </ul><?php echo "<b>".stripslashes($_POST['ipdns'])."</b>\n"; ?>
      <hr>
      <p>Mécanisme du protocole TCP/IP pour le transfert des informations sur l'Internet.</p><?php echo "<b>".stripslashes($_POST['tcpip'])."</b>\n"; ?>
      <hr>
      <p>Principales informations que donne la commande TRACERT&nbsp;:</p><?php echo "<b>".stripslashes($_POST['tracert'])."</b>\n"; ?>
      <hr>
      <p><span style="float:left; width: 10em;">Nom&nbsp;:</span> <?php echo "<b>".stripslashes($_POST['nom'])."</b>\n"; ?></p>
      <p><span style="float:left; width: 10em;">Prénom&nbsp;:</span><?php echo "<b>".stripslashes($_POST['prenom'])."</b>"; ?></p>
      <p><span style="float:left; width: 10em;">Classe&nbsp;:</span><?php echo "<b>".$_POST['classe']."</b>\n"; ?></p>
      <form action="">
        <div style="text-align:center" class="bouton">
          <input type="button" name="submit" value="Imprimer" onclick="WindowPrint()">
        </div>
      </form>
      <hr>
    </div><?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
