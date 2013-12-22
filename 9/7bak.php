<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
<style type="text/css">
.cache-cache {
  cursor: pointer;
  clear: both;
  }
.cache-cache + div {
  clear: both;
  display: none;
  }
</style>

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
    
    <h4 class="cache-cache">Je voudrais les instructions pour&nbsp;Windows XP</h4>
    <div class="travail">
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
	
	<h4 class="cache-cache">Je voudrais les instructions pour&nbsp;Windows Vista/Seven</h4>
    <div class="travail">
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
      
      <h4 class="cache-cache">Je voudrais les instructions pour&nbsp;Linux</h4>
      <div class="travail">
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
      <ul id="slider1">
		<li>Explications en audio: <?php dewplay("images/ip/1.mp3");?><img src="images/ip/ip0.png"></li>
		<li>Explications en audio: <?php dewplay("images/ip/2.mp3");?><img src="images/ip/ip1.png"></li>
		<li>Explications en audio: <?php dewplay("images/ip/3.mp3");?><img src="images/ip/ip2.png"></li>
		<li>Explications en audio (pour les deux diapos suivantes): <?php dewplay("images/ip/45.mp3");?><img src="images/ip/ip3.png"></li>
		<li><img src="images/ip/ip4.png"></li>
		<li>Explications en audio: <?php dewplay("images/ip/6.mp3");?><img src="images/ip/ip5.png"></li>
		<li>Explications en audio: <?php dewplay("images/ip/7.mp3");?><img src="images/ip/ip6.png"></li>
		<li>Explications en audio (pour les deux diapos suivantes):  <?php dewplay("images/ip/89.mp3");?><img src="images/ip/ip7.png"></li>
		<li><img src="images/ip/ip8.png"></li>
		<li>Explications en audio: <?php dewplay("images/ip/10.mp3");?><img src="images/ip/ip9.png"></li>
	</ul>
	
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
  <script type="text/javascript" src="../../js/anythingSlider/js/jquery.easing.1.2.js"></script>
  <script type="text/javascript" src="../../js/anythingSlider/js/jquery.anythingslider.js"></script>
  <link rel="stylesheet" type="text/css" href="../../js/anythingSlider/css/anythingslider.css"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#slider1').anythingSlider({
				startStopped    : true,
				// easing: "easeInQuad",
				infiniteSlides : true,
				buildArrows : true,
				buildNavigation : true,
				stopAtEnd : true,
				infiniteSlides: false,
				resizeContents : false
		});
		
		$(".cache-cache").click(function(){
		var contenu = $(this).next();
		contenu.toggle("slow");
		});
		});
	</script>
<script type="text/javascript">
	$(document).ready (function(){
	
	});
  </script>
</body>
</html>
