<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org" />
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print" />
  <title>Introduction � l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>M�canisme de transport de l'information sur Internet</h2>
      <h3>Le chemin suivi par les informations</h3>
      <p class="info">L'Internet est constitu� d'un ensemble d'ordinateurs interconnect�s. Lorsqu'une information est transport�e, elle transite g�n�ralement par un certain nombre d'ordinateurs avant d'arriver � destination.</p>
      <p>Il est tr�s facile de d�terminer la route suivie par une information. Lis le paragraphe qui correspond � ton syst�me d'exploitation.</p>
      <h4>Windows 95/98</h4>
      <p class="info">Il existe, dans le syst�me d'exploitation Windows, une commande qui permet d'obtenir les d�tails des noms et des adresses des ordinateurs de passage: TRACERT (abr�viation de "Trace Route").</p>
      <p>Cette commande ne peut se donner que dans une fen�tre de commande.</p>
      <div class="travail">
        <p>Pour obtenir cette fen�tre, clique sur</p>
        <p>&gt; <strong>D�marrer</strong> &gt; <strong>Programmes</strong> &gt; <strong>Commandes MS-DOS</strong></p>
        <p>comme sur l'illustration si tu travailles sous Windows 98 ou</p>
        <p class="supplement" style="text-align: center;"><img src="images/msdos.jpg" height="236" width="394" /></p>
        <p>La fen�tre d'invite de commande appara�t aussit�t. Dans cette fen�tre, tu vas frapper la commande " <strong>TRACERT www.isnd.be</strong> " afin de d�terminer la route entre ton ordinateur et l'ordinateur dont l'adresse DNS est " www.isnd.be ".</p>
        <p>Quand c'est fait, frappe " <strong>Enter</strong> ".</p>
      </div>
      <h4>Windows 2000/XP</h4>
      <div class="travail">
        <p>&gt; <strong>D�marrer</strong> &gt; <strong>Programmes</strong> &gt; <strong>Accessoires</strong> &gt; <strong>Invite de commande</strong></p>
        <p style="text-align: center;"><img src="images/invite.png" height="224" width="408" /></p>
        <p><img src="images/tracert1.png" align="right" height="56" hspace="10" vspace="10" width="235" />La fen�tre de commande appara�t aussit�t. Dans cette fen�tre, tu vas frapper la commande " <strong>TRACERT www.isnd.be</strong> " afin de d�terminer la route entre ton ordinateur et l'ordinateur dont l'adresse DNS est "www.isnd.be".</p>
        <p>Quand c'est fait, frappe <span class="clavier">Enter</span>.</p>
      </div>
      <h4>Linux</h4>
      <div class="travail">
        <p>Dans une console de commande, frappe la commande " <strong>traceroute www.isnd.be</strong> " afin de d�terminer la route entre ton ordinateur et l'ordinateur dont l'adresse DNS est " www.isnd.be ".</p>
        <p>Quand c'est fait, frappe&nbsp;<span class="clavier">Enter&nbsp;</span>.</p>
      </div>
      <div class="info">
        <p>La recherche du chemin s'indique sur l'�cran: on y voit:</p>
        <ol>
          <li>le num�ro de l'ordinateur relais ;</li>
          <li>le nombre de millisecondes qui ont �t� n�cessaires pour obtenir une r�ponse de cet ordinateur (trois essais sont r�alis�s) ;</li>
          <li>�ventuellement le nom de l'ordinateur relais ;</li>
          <li>son adresse IP.</li>
        </ol>
        <p style="text-align: center;"><img src="images/tracert2.png" height="367" width="668" /></p>
        <p>Il est fort probable que tu obtiendras un chemin diff�rent de celui qui est indiqu� sur l'illustration.</p>
      </div>
      <p>Quand le chemin est d�termin�, tu peux frapper une nouvelle commande <strong>TRACERT</strong> (<strong>traceroute</strong> sous Linux) vers une autre destination. Essaie:</p>
      <ul>
        <li>www.yahoo.com</li>
        <li>www.yahoo.fr</li>
        <li>www.isnd.be</li>
        <li>www.google.be</li>
      </ul>
      <p>Quand tu as fini tes essais, ferme la fen�tre de commande.</p>
      <p>Quand tu as bien compris ce qui appara�t � l'�cran suite � la commande TRACERT (traceroute), passe � la page suivante. <?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
