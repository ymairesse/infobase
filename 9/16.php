<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Introduction à l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Synthèse du chapitre</h2>
      <form name="form1" method="post" action="print2.php" class="travail" id="form1">
        Quelle est la commande du système d'exploitation qui permet de connaître le chemin suivi par les paquets d'information entre les ordinateurs&nbsp;? Choisis entre les propositions suivantes&nbsp;:
        <ol>
          <li>MSDOS</li>
          <li>transroute</li>
          <li>tracert</li>
          <li>ping</li>
        </ol>
        <p>Réponse: <input name="chemin" size="20" maxlength="20" type="text"></p>Sous Windows, quelle est la commande du système d'exploitation qui permet de connaître l'adresse IP de son propre ordinateur&nbsp;? Choisis entre les propositions suivantes&nbsp;:
        <ol>
          <li>ipconfig</li>
          <li>transroute</li>
          <li>tracert</li>
          <li>ping</li>
        </ol>
        <p>Réponse: <input name="ip" size="20" maxlength="20" type="text"></p>
        <p>Quelle différence fais-tu entre les concepts suivants: adresse URL et adresse DNS.</p>
        <p>
        <textarea name="urldns" cols="50" rows="5">
</textarea></p>
        <p>Quelle différence fais-tu entre les concepts suivants: adresse IP et adresse DNS.</p>
        <p>
        <textarea name="ipdns" cols="50" rows="5">
</textarea></p>
        <p>Décris, en quelques lignes, le mécanisme du protocole TCP/IP pour le transfert des informations sur l'Internet.</p>
        <p>
        <textarea name="tcpip" cols="65" rows="5">
</textarea></p>
        <p>Quelles sont les principales informations que donne la commande TRACERT&nbsp;?</p>
        <p>
        <textarea name="tracert" cols="65" rows="5">
</textarea></p>
        <p>Quand tu as terminé, indique tes références ci-dessous et envoie la page à l'impression.</p>
        <label for="nom">Nom&nbsp;:</label> <input name="nom" size="40" maxlength="40" type="text" id="nom"><br />
        <label for="prenom">Prénom&nbsp;:</label> <input name="prenom" size="40" maxlength="40" type="text" id="prenom"> <br />
        <label for="classe">Classe&nbsp;:</label> <input name="classe" size="5" maxlength="5" type="text" id="classe"><br />
        <p><input name="Submit" value="Envoyer à l'impression" type="submit"></p>
      </form>
      <p>Quand tu as imprimé tes réponses et que tu as remis ce document au professeur, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
