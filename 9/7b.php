<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="timesheet" type="application/smil+xml" href="1/timesheet.smil">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen,print">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">

  <link rel="stylesheet" type="text/css" href="../../js/timeSheet/style/timecontroller/style.css">
  <link rel="stylesheet" type="text/css" href="../../js/timeSheet/style/layout.css">
  <link rel="stylesheet" type="text/css" href="../../js/timeSheet/style/transitions.css">
  <!--
  <link rel="alternate stylesheet" type="text/css" title="handheld" href="style/handheld.css">
  -->
  <!--[if lt IE 9]>
    <script type="text/javascript" src="../3rd-part/html5.js"></script>
    <script type="text/javascript" src="../3rd-part/mediaelement.js"></script>
    <style type="text/css">
      p#transitionSelector { display: none; }
    </style>
  <![endif]-->
  <script type="text/javascript" src="../../js/timeSheet/timesheets.js"></script>
  <script type="text/javascript" src="../../js/timeSheet/timesheets-controls.js"></script>
  <script type="text/javascript" src="../../js/timeSheet/timesheets-navigation.js"></script>
  
  <script type="text/javascript" src="../../js/jquery.js"></script>
  
<title>Introduction à l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php 
	require ("./top.inc.php"); 
	require ("../../dewplayer.inc.php");
	?>
    <div id="texte">
      <h2>L'adresse IP des ordinateurs</h2>
      <h3>L'adresse numérique&nbsp;: adresse IP</h3>
      <p class="questions">Bon, j'ai bien compris que les ordinateurs connectés à l'Internet sont capables de s'envoyer des messages. Mais, ce sont des messages à tête chercheuse&nbsp;? Ou alors, il y a un truc pour que chaque paquet trouve sa destination&nbsp;?</p>
      <p class="reponses">Effectivement&nbsp;: il y a un truc. Chaque paquet échangé contient l'adresse de l'ordinateur de destination ainsi que l'adresse d'origine.</p>
      <p class="questions">Adresse&nbsp;? Mon adresse postale&nbsp;? C'est le facteur qui distribue les paquets sur l'Internet&nbsp;?</p>
      <p class="reponses">Voilà qui rendrait l'Internet plutôt lent. L'adresse dont il est question est plutôt du même genre que les "&nbsp;numéros de téléphone&nbsp;".</p>
      
      <div class="info">      
        <p>Pour pouvoir appeler une personne précise au téléphone, il faut que je dispose du numéro d'appel du poste de cette personne. Il s'agit, en quelques sortes, de son "&nbsp;adresse téléphonique&nbsp;".</p>
        <p>Pour pouvoir communiquer avec un ordinateur précis sur l'Internet, il faut également que cet ordinateur soit caractérisé par une adresse.</p>
        <p>Exemple : 195.31.26.98</p>
      <div class="attention">
        <p>L'adresse IP d'un ordinateur est formée d'un ensemble de&nbsp;<strong>quatre nombres</strong> entiers compris <strong>entre 0 et 255</strong>.</p>
        <p>Les nombres sont séparés par des ".".</p>
        <p><strong>Une</strong> adresse IP correspond à <strong>un et un seul</strong> ordinateur dans le monde.</p>
      </div>
      <p>L'adresse IP est un peu semblable à un numéro de téléphone.</p>
	</div>
	
    <p class="questions">Donc, si je veux entrer en contact avec mon ordinateur personnel chez moi, il me suffit de former mon numéro de téléphone&nbsp;?</p>
    <p class="reponses">Vous n'y êtes pas, cher élève. L'adresse numérique des ordinateurs est similaire à un numéro de téléphone, mais ce n'est pas un numéro de téléphone.</p>
    
    <h3>Quelle est l'adresse IP de l'ordinateur sur lequel tu travailles actuellement ?</h3>
    <div class="info">
        <p>Cette information est relativement simple à déterminer. Mais la méthode à utiliser varie en fonction du système d'exploitation de ton ordinateur.</p>
        <p>Quel est le système d'exploitation de ton ordinateur? Si tu l'ignores, demande l'information au professeur.</p>
    </div>
    
    <div class="travail">
        <ul>
          <li>Quand tu as déterminé le système d'exploitation de ton ordinateur, clique sur le titre correspondant (ou le plus approchant) ci-dessous.</li>
          <li>Exécute ensuite les instructions qui seront apparues.</li>
        </ul>
    </div>
    
    <h4 class="cache-cache">Clique ici pour obtenir les instructions pour Windows XP</h4>
    <div class="travail" style="display:none">
        <div><img src="images/exec2000.png" alt="Exécuter" class="imagedroite" style="clear: both; width: 247px; height: 104px;"></div>
        <ul>
          <li>Clique sur le bouton <strong>Démarrer</strong>&nbsp;;</li>
          <li>Sélectionne la commande <strong>Exécuter</strong>&nbsp;;</li>
        </ul>
        <ul style="clear: both;">
          <li><img src="images/cmd.png" alt="cmd.exe" class="imagedroite" style="clear: both; width: 363px; height: 179px;">Dans la boîte de dialogue qui apparaît, frappe l'instruction <strong>CMD.EXE</strong></li>
          <li>Une fenêtre de commande au fond noir s'ouvre.</li>
          <li>Dans cette fenêtre de commande, entre la commande <strong>ipconfig</strong> et frappe la touche <span class="clavier">Enter</span>.</li>
        </ul>
        <p class="info">Différentes informations apparaîssent, parmi lesquelles l'adresse IP de ton ordinateur.</p>
        <p style="text-align: center;"><img src="images/ipconfig.png" style="width: 491px; height: 161px;" alt="ipconfig"></p>
    </div>
	
	<h4 class="cache-cache">Clique ici pour obtenir les instructions pour Windows Vista/Seven</h4>
    <div class="travail" style="display:none">
        <div><img src="images/cmdWin7.png" alt="Exécuter" class="imagedroite" style="clear: both; width: 444px; height: 168px;"></div>
        <ul>
          <li>Clique sur le bouton <strong>Démarrer</strong> en bas à gauche de l'écran;</li>
          <li>Dans la zone où est indiqué "Rechercher les programmes et fichiers", écris la commande "<strong>cmd.exe</strong>"</li>
          <li>Frappe la touche <span class="clavier">Enter</span>;</li>
        </ul>
        <ul style="clear: both;">
          <li>Dans le fenêtre de commande qui apparaît, entre la commande <strong>ipconfig</strong> et </li>
          <li>Frappe la touche <span class="clavier">Enter</span>.</li>
        </ul>
        <img src="images/ipconfigwin7.png" alt="ipconfig" class="imagedroite" style="clear: both; width: 630px; height: 199px;">
        <p class="supplement" style="clear:both">Différentes informations apparaîssent, parmi lesquelles l'adresse IP de ton ordinateur.</p>
      </div>
      
      <h4 class="cache-cache">Clique ici pou obtenir les instructions pour&nbsp;Linux</h4>
      <div class="travail" style="display:none">
        <ul>
          <li>Ouvre un terminal (probablement &gt; Applications &gt; Accessoires &gt; Terminal).</li>
          <li>Frappe la commande <strong>ifconfig</strong></li>
          <li>Observe quelques instants les informations reçues puis lis l'explication ci-dessous.</li>
        </ul>
        <p style="text-align: center;"><img src="images/ifconfig.png" style="width: 541px; height: 201px;" alt="/sbin/ifconfig"></p>
        <p class="info">Parmi les informations retournées, l'adresse IP : inet addr: 192.168.1.15 sur l'illustration ci-dessus. C'est ton adresse IP.</p>
      <p>Vérifie que ton adresse IP est différente de celle de l'ordinateur de ton plus proche voisin.</p>
      <p class="attention">Si tu utilises un système Linux LTSP, l'adresse IP que tu découvres est celle du serveur LSTP. Tout se passe, dans ce système, comme si tous les élèves utilisaient le même ordinateur en même temps.</p>
      </div>
      
      <p>Si tu utilises un autre système d'exploitation, demande à ton professeur de t'expliquer la procédure.</p>
      
      <h3>Adresse IP publique et adresse IP privée</h3>
      <div class="info">
		<p>Si tu travailles dans le réseau informatique d'une école, l'adresse IP de ton ordinateur n'est peut-être pas unique dans le monde.</p>
      </div>
      <div class="travail">
        <p>Exécute l'animation ci-dessous pour comprendre comment les adresses IP sont utilisées à l'intérieur d'un réseau privé.</p>
      </div>

			<!-- id="slideshow" -->
			<div id="slideshow" style="position: relative; height:600px">
				<header id="slide01">	<img src="7/img0.jpg" alt="img">	</header>
				<div id="slide02">		<img src="7/img1.jpg" alt="img">	</div>
				<div id="slide03">		<img src="7/img2.jpg" alt="img">	</div>
				<div id="slide04">		<img src="7/img3.jpg" alt="img">	</div>
				<div id="slide05">		<img src="7/img4.jpg" alt="img">	</div>
				<div id="slide06">		<img src="7/img5.jpg" alt="img">	</div>
				<div id="slide07">		<img src="7/img6.jpg" alt="img">	</div>
				<div id="slide08">		<img src="7/img7.jpg" alt="img">	</div>
				<div id="slide09">		<img src="7/img8.jpg" alt="img">	</div>
				<footer id="slide10">		<img src="7/img9.jpg" alt="img">	</footer>

			</div>
			<!-- id="slideshow" -->
			
			<audio id="talk" preload>
				<source type="audio/mp3" src="7/01.mp3" />
				<source type="audio/ogg" src="7/01.ogg" />
			</audio>
			
			<!-- id="timeController" -->
			<nav id="timeController" class="smil-timeController">
				  
				<!-- Table of Contents -->
				<div class="smil-toc" style="display: none;">
					<ul class="smil-tocList">
						<li><a href="#slide01"> La création du premier réseau informatique militaire </a></li>
						<li><a href="#slide02"> Le premier satellite artificiel: Spoutnik </a></li>
						<li><a href="#slide03"> La guerre froide et ses enjeux </a></li>
						<li><a href="#slide04"> Le problème soumis à la DARPA </a></li>
						<li><a href="#slide05"> Comment fonctionne le réseau </a></li>
						<li><a href="#slide06"> Communication entre ordinateurs non-voisins </a></li>
						<li><a href="#slide07"> Utilisation d'un relais </a></li>
						<li><a href="#slide08"> Le relais transmet les informations </a></li>
						<li><a href="#slide09"> L'ordinateur de destination a reçu les informations </a></li>
						<li><a href="#slide10"> L'ordinateur relais est détruit </a></li>
					</ul>
				</div>
				<!-- Table of Contentes -->
				
				<!-- timeline + control buttons -->
				<div class="smil-controlBar">
					<div class="smil-left">
						<button class="smil-first"><span>|«</span></button>
						<button class="smil-prev"><span>«</span></button>
						<button class="smil-play"><span>▶||</span></button>
						<button class="smil-next"><span>»</span></button>
						<button class="smil-last"><span>»|</span></button>
					</div>
				  
					<div class="smil-timeline">
						<div class="smil-timeSlider"></div>
						<div class="smil-timeSegments"></div>
						<div class="smil-timeCursor"></div>
					</div>
				  
					<div class="smil-right smil-currentTime">00:00</div>
				  
				</div>  
				<!-- smil-controlBar -->
			</nav>
			<!-- id="timeController" -->

	  
	  
      <div class="info">
        <p>Dans un réseau privé, un dispositif appelé <strong>PASSERELLE</strong> (un ordinateur central -appelé <strong>serveur</strong>- ou un appareil -appelé <strong>routeur</strong>) dispose d'une adresse IP unique dans le monde. Cette <strong>passerelle</strong> est alors chargée de redistribuer les paquets d'informations qui lui parviennent vers les différents ordinateurs du réseau (dont le tien).</p>
        <p>Les ordinateurs du réseau sont alors munis d'adresses qui ne sont pas connues de l'Internet. Ce sont les adresses IP privées.</p>
        <p>Ton adresse IP publique (en fait, celle de la passerelle) est&nbsp;<strong><?php echo $_SERVER['REMOTE_ADDR']?></strong> (cette adresse vient d'être déterminée à l'instant où tu as ouvert cette page).</p>
        <p>Si tu travailles dans une école, remarque que cette adresse est la même que celle de ton voisin et pour toutes les personnes qui utilisent l'Internet dans l'Établissement.</p>
        <p>Si tu es directement connecté à l'Internet par un modem sans routeur, sans passerelle, tu n'as pas d'adresse IP privée; seulement une adresse IP publique.</p>
      </div>
      
      <p>Quand tu en as pris connaissance et que tu as noté ton adresse IP, passe à la page suivante. <?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
    </div>

	
	<script type="text/javascript" src="../../js/jplayer/jquery.jplayer.js"></script>
	<script type="text/javascript" src="../../js/jplayer/jquery.audioslideshow.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.1.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('#audio-slideshow').audioSlideshow();
		})
	</script>

</body>
</html>
