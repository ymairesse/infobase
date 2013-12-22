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
  <title>Introduction � l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>M�canisme de transport de l'information sur Internet</h2>
      <h3>Notion de protocole</h3>
      <div class="encadre attention"><p>Un protocole est un ensemble de r�gles qui sont fix�es dans un cadre particulier.</p></div>
      <h4>Exemples de protocoles</h4>
      <ul>
		<li><img src="images/handshaking.gif" class="imagedroite" height="86" width="159">Quand on rencontre un ami dans la rue, une r�gle habituelle est de lui serrer la main et de lui demander "Comment vas-tu?"</li>
		<li>Quand on rencontre un personnage important, le protocole est souvent tr�s diff�rent.</li>
      </ul>
      <div class="encadre attention"><p>Un protocole peut aussi �tre un ensemble de proc�dures � appliquer dans un cadre particulier.</p></div>
      <ul>
      <li>Lorsque <strong>le pilote d'un avion</strong> s'appr�te � d�coller, il doit v�rifier point par point le fonctionnement de ses instruments de vol. Il applique un protocole bien pr�cis dans lequel tout est v�rifi� dans un ordre pr�cis.</li>
      <li>Lorsqu'ils r�alisent des exp�riences, <strong>les scientifiques</strong> �tablissent des protocoles pr�cis pour que l'on puisse reproduire les manipulations effectu�es.</li>
      </ul>
<h4>Les protocoles en informatique</h4>
<p>En informatique, un protocole est un ensemble de proc�dures qui sont respect�es tr�s fid�lement.</p>
<div class="travail">
<p><a href="javascript:void(0)"><img src="images/usb.png" width="100" height="172" alt="usb" id="usb" class="imagedroite"></a>Peux-tu d�crire le protocole pour copier un fichier d'un ordinateur vers un autre � l'aide d'une clef USB?</p>
<p>R�sume tes id�es en quelques lignes ci-dessous. Attention, il faut donner beaucoup de d�tails.</p>
<form name="formulaire">
<textarea name="idees" rows="7" cols="80"></textarea>
<p>Quand tu penses avoir d�crit toutes les �tapes de la proc�dure (le protocole), clique sur l'image de la clef USB ci-contre pour v�rifier ta r�ponse.</p>
</form>
<ol id="protocoleUSB" style="display:none">
	<li>Enficher la clef USB dans un connecteur du premier ordinateur</li>
	<li>Copier le fichier sur la clef USB</li>
	<li>Clic droit sur l'ic�ne de la clef USB et utilisation de la proc�dure d'�jection</li>
	<li>Enlever la clef USB du premier ordinateur</li>
	<li>Enficher la clef USB dans un connecteur du deuxi�me ordinateur</li>
	<li>Copier le ficiher de la clef USB vers l'ordinateur</li>
	<li>Clic droit sur l'ic�ne de la clef USB et utilisation de la proc�dure d'�jection</li>
	<li>Enlever la clef USB du deuxi�me ordinateur</li>
</ol>
</div>

      <p>Quand tu es d'accord avec la r�ponse concernant le protocole de recopie de fichier, passe � la page suivante. <?php include ("../../suivant.inc.php");
                            ?></p>
    </div><?php include ("../../pied.inc.php");
                  ?>
  </div>
</body>
</html>
