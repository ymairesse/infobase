<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org" />
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print" />
  <title>Introduction à l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Mécanisme de transport de l'information sur Internet</h2>
      <h3>Le chemin suivi par les informations</h3>
      <p class="info">L'Internet est constitué d'un ensemble d'ordinateurs interconnectés. Lorsqu'une information est transportée, elle transite généralement par un certain nombre d'ordinateurs avant d'arriver à destination.</p>
      <p>Il est très facile de déterminer la route suivie par une information. Lis le paragraphe qui correspond à ton système d'exploitation.</p>
      <h4>Windows 95/98</h4>
      <p class="info">Il existe, dans le système d'exploitation Windows, une commande qui permet d'obtenir les détails des noms et des adresses des ordinateurs de passage: TRACERT (abréviation de "Trace Route").</p>
      <p>Cette commande ne peut se donner que dans une fenêtre de commande.</p>
      <div class="travail">
        <p>Pour obtenir cette fenêtre, clique sur</p>
        <p>&gt; <strong>Démarrer</strong> &gt; <strong>Programmes</strong> &gt; <strong>Commandes MS-DOS</strong></p>
        <p>comme sur l'illustration si tu travailles sous Windows 98 ou</p>
        <p class="supplement" style="text-align: center;"><img src="images/msdos.jpg" height="236" width="394" /></p>
        <p>La fenêtre d'invite de commande apparaît aussitôt. Dans cette fenêtre, tu vas frapper la commande " <strong>TRACERT www.isnd.be</strong> " afin de déterminer la route entre ton ordinateur et l'ordinateur dont l'adresse DNS est " www.isnd.be ".</p>
        <p>Quand c'est fait, frappe " <strong>Enter</strong> ".</p>
      </div>
      <h4>Windows 2000/XP</h4>
      <div class="travail">
        <p>&gt; <strong>Démarrer</strong> &gt; <strong>Programmes</strong> &gt; <strong>Accessoires</strong> &gt; <strong>Invite de commande</strong></p>
        <p style="text-align: center;"><img src="images/invite.png" height="224" width="408" /></p>
        <p><img src="images/tracert1.png" align="right" height="56" hspace="10" vspace="10" width="235" />La fenêtre de commande apparaît aussitôt. Dans cette fenêtre, tu vas frapper la commande " <strong>TRACERT www.isnd.be</strong> " afin de déterminer la route entre ton ordinateur et l'ordinateur dont l'adresse DNS est "www.isnd.be".</p>
        <p>Quand c'est fait, frappe <span class="clavier">Enter</span>.</p>
      </div>
      <h4>Linux</h4>
      <div class="travail">
        <p>Dans une console de commande, frappe la commande " <strong>traceroute www.isnd.be</strong> " afin de déterminer la route entre ton ordinateur et l'ordinateur dont l'adresse DNS est " www.isnd.be ".</p>
        <p>Quand c'est fait, frappe&nbsp;<span class="clavier">Enter&nbsp;</span>.</p>
      </div>
      <div class="info">
        <p>La recherche du chemin s'indique sur l'écran: on y voit:</p>
        <ol>
          <li>le numéro de l'ordinateur relais ;</li>
          <li>le nombre de millisecondes qui ont été nécessaires pour obtenir une réponse de cet ordinateur (trois essais sont réalisés) ;</li>
          <li>éventuellement le nom de l'ordinateur relais ;</li>
          <li>son adresse IP.</li>
        </ol>
        <p style="text-align: center;"><img src="images/tracert2.png" height="367" width="668" /></p>
        <p>Il est fort probable que tu obtiendras un chemin différent de celui qui est indiqué sur l'illustration.</p>
      </div>
      <p>Quand le chemin est déterminé, tu peux frapper une nouvelle commande <strong>TRACERT</strong> (<strong>traceroute</strong> sous Linux) vers une autre destination. Essaie:</p>
      <ul>
        <li>www.yahoo.com</li>
        <li>www.yahoo.fr</li>
        <li>www.isnd.be</li>
        <li>www.google.be</li>
      </ul>
      <p>Quand tu as fini tes essais, ferme la fenêtre de commande.</p>
      <p>Quand tu as bien compris ce qui apparaît à l'écran suite à la commande TRACERT (traceroute), passe à la page suivante. <?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
