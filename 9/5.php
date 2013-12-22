<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Introduction � l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php 
	require ("./top.inc.php"); 
	require ("../../dewplayer.inc.php");
	?>
	
    <div id="texte">
      <h2>M�canisme de transport de l'information sur Internet</h2>
      <h3>Le protocole de communication entre ordinateurs sur l'Internet</h3>
      
      <div class="info">
      <p>Lorsque deux ordinateurs communiquent pour s'�changer des informations, il faut qu'ils utilisent une m�thode commune de conversation. On parle alors d'un protocole informatique.</p>
      <p>En informatique, un protocole est un ensemble de r�gles suivies par deux ordinateurs lors de l'�change d'informations.<br>
      Il existe de nombreux protocoles diff�rents. Nous n'�voquerons que TCP/IP.</p>
      <p>Sur l'Internet, le protocole utilis� est appel� TCP/IP&nbsp;:</p>
      <ul>
        <li><strong>TCP</strong>&nbsp;: Transmission Control Protocol (protocole de contr�le des transmissions)</li>
        <li><strong>IP</strong>&nbsp;: Internet Protocol (protocole de l'Internet)</li>
      </ul>
      <p>Nous n'entrerons pas dans le d�tail du fonctionnement de ce protocole. Voyons simplement son principe.</p>
      </div>
      
      <h3>L'ordinateur qui fournit l'information (le serveur)</h3>
      <div class="info">
      <p>Lorsque des informations (un texte, une image, un courrier,...) doivent �tre envoy�es sur Internet, l'ordinateur qui fournit l'information&nbsp;:</p>
      <ol>
        <li>d�coupe le document � transmettre en petits paquets � l'aide d'un programme sp�cialis�&nbsp;;</li>
        <li>chaque paquet est muni de l'adresse de l'exp�diteur et de l'ordinateur de destination&nbsp;;</li>
        <li>chaque paquet est envoy� ind�pendamment des autres: il passe peut-�tre par un autre chemin.</li>
      </ol>
      <p>Ce m�canisme est illustr� dans l'animation ci-dessous.</p>
      <ul id="slider1">
		<li><img src="images/tcp/tcp0.png" style="height:600px"></li>
		<li><img src="images/tcp/tcp1.png" style="height:600px"></li>
		<li><img src="images/tcp/tcp2.png" style="height:600px"></li>
		<li><img src="images/tcp/tcp3.png" style="height:600px"></li>
		<li><img src="images/tcp/tcp4.png" style="height:600px"></li>
		<li><img src="images/tcp/tcp5.png" style="height:600px"></li>
		<li><img src="images/tcp/tcp6.png" style="height:600px"></li>
	</ul>
	</div>
	
	<h3>L'ordinateur qui re�oit les informations (le client)</h3>
	<div class="info">
	<p>Les informations parviennent � l'ordinateur de destination</p>
      <ol>
        <li>sous la forme de petits paquets</li>
        <li>qui peuvent arriver dans le d�sordre (selon le chemin suivi)&nbsp;;</li>
        <li>ces informations sont recombin�es et remises en ordre par un programme sp�cialis� dans l'ordinateur d'arriv�e.</li>
      </ol>
      <p>Revois l'animation ci-dessus pour confirmer que tu as bien compris ce qui se passe au niveau de l'ordinateur qui envoie les donn�es (le serveur) et au niveau de l'ordinateur qui re�oit les donn�es (le client).</p>
	</div>
	<p>Quand tu te sens pr�t(e) � r�pondre � des questions sur le protocole TCP/IP, passe � la page suivante. <?php include ("../../suivant.inc.php");?></p>
    
    </div>
    <?php include ("../../pied.inc.php");?></div>
    </div>
    </div>
  <script type="text/javascript" src="../../js/anythingSlider/js/jquery.easing.1.2.js"></script>
  <script type="text/javascript" src="../../js/anythingSlider/js/jquery.anythingslider.js"></script>
  <link rel="stylesheet" type="text/css" href="../../js/anythingSlider/css/anythingslider.css"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#slider1').anythingSlider({
				startStopped    : true,
				width: 600,
				theme: 'minimalist-round',
				easing: 'swing',
				infiniteSlides : true,
				buildArrows : true,
				buildNavigation : true,
				stopAtEnd : true,
				infiniteSlides: false,
				resizeContents : false
		});
		});
	</script>
</body>
</html>
