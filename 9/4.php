<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
	  $("#usb").click(function(){
		  $("#protocoleUSB").toggle("slow");
		  })
	  })
  
  </script>
  <title>Introduction à l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Mécanisme de transport de l'information sur Internet</h2>
      <h3>Notion de protocole</h3>
      <div class="encadre attention"><p>Un protocole est un ensemble de règles qui sont fixées dans un cadre particulier.</p></div>
      <h4>Exemples de protocoles</h4>
      <ul>
		<li><img src="images/handshaking.gif" class="imagedroite" height="86" width="159">Quand on rencontre un ami dans la rue, une règle habituelle est de lui serrer la main et de lui demander "Comment vas-tu?"</li>
		<li>Quand on rencontre un personnage important, le protocole est souvent très différent.</li>
      </ul>
      <div class="encadre attention"><p>Un protocole peut aussi être un ensemble de procédures à appliquer dans un cadre particulier.</p></div>
      <ul>
      <li>Lorsque <strong>le pilote d'un avion</strong> s'apprête à décoller, il doit vérifier point par point le fonctionnement de ses instruments de vol. Il applique un protocole bien précis dans lequel tout est vérifié dans un ordre précis.</li>
      <li>Lorsqu'ils réalisent des expériences, <strong>les scientifiques</strong> établissent des protocoles précis pour que l'on puisse reproduire les manipulations effectuées.</li>
      </ul>
<h4>Les protocoles en informatique</h4>
<p>En informatique, un protocole est un ensemble de procédures qui sont respectées très fidèlement.</p>
<div class="travail">
<p><a href="javascript:void(0)"><img src="images/usb.png" width="100" height="172" alt="usb" id="usb" class="imagedroite"></a>Peux-tu décrire le protocole pour copier un fichier d'un ordinateur vers un autre à l'aide d'une clef USB?</p>
<p>Résume tes idées en quelques lignes ci-dessous. Attention, il faut donner beaucoup de détails.</p>
<form name="formulaire">
<textarea name="idees" rows="7" cols="80"></textarea>
<p>Quand tu penses avoir décrit toutes les étapes de la procédure (le protocole), clique sur l'image de la clef USB ci-contre pour vérifier ta réponse.</p>
</form>
<ol id="protocoleUSB" style="display:none">
	<li>Enficher la clef USB dans un connecteur du premier ordinateur</li>
	<li>Copier le fichier sur la clef USB</li>
	<li>Clic droit sur l'icône de la clef USB et utilisation de la procédure d'éjection</li>
	<li>Enlever la clef USB du premier ordinateur</li>
	<li>Enficher la clef USB dans un connecteur du deuxième ordinateur</li>
	<li>Copier le ficiher de la clef USB vers l'ordinateur</li>
	<li>Clic droit sur l'icône de la clef USB et utilisation de la procédure d'éjection</li>
	<li>Enlever la clef USB du deuxième ordinateur</li>
</ol>
</div>

      <p>Quand tu es d'accord avec la réponse concernant le protocole de recopie de fichier, passe à la page suivante. <?php include ("../../suivant.inc.php");
                            ?></p>
    </div><?php include ("../../pied.inc.php");
                  ?>
  </div>
</body>
</html>
