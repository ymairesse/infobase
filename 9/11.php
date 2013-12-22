<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script language="JavaScript" type="text/javascript">
function popup() {
  window.open('domaines.php','domaines','scrollbars=yes,width=350,height=250')}
  </script>
  <title>Introduction à l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>Les adresses DNS des ordinateurs</h2>
      <h3>3ème partie</h3>
      <div class="info">
      <p><img src="images/sherlock.gif" width="200" height="250" class="imagedroite">La dernière partie de l'adresse DNS désigne <strong>le domaine</strong> général dont fait partie l'ordinateur:</p>
      <ul>
        <li><strong>.com</strong>, pour les entreprises commerciales,</li>
        <li><strong>.edu</strong>, pour les organismes d'enseignement<br>
        Exemple: le site web de l'Institut Supérieur Parnasse Deux Alice (be): <a href="http://www.parnasse-deuxalice.edu/" target="_blank">http://www.parnasse-deuxalice.edu/</a>,</li>
        <li><strong>.gov</strong>, pour les organisations gouvernementales des Etats-Unis<br>
        Exemple: le site web de la CIA: <a href="http://www.cia.gov" target="_blank">http://www.cia.gov</a>,</li>
        <li><strong>.mil</strong>, pour l'armée américaine<br>
        Exemple: le site web de la US Navy: <a href="http://www.navy.mil" target="_blank">http://www.navy.mil</a>,</li>
        <li><strong>.org</strong>, pour les autres organisations<br>
        Exemple: le site web de l'Organisation Internationale de la Francophonie: <a href="http://www.francophonie.org" target="_blank">http://www.francophonie.org</a>,</li>
        <li><strong>.net</strong>, pour les sites proposant des ressources sur l'Internet (information, logiciels,...)<br>
        Exemple: le site "Comment ça marche": <a href="http://www.commentcamarche.net" target="_blank">http://www.commentcamarche.net</a>,</li>
        <li><strong>.int</strong>, pour les organismes internationaux<br>
        Exemple: le site web de l'ESA (Agence Spatiale Européenne): <a href="http://www.esa.int/esaCP/Belgium_fr.html" target="_blank">http://www.esa.int</a>.</li>
      </ul>

      <p>D'autre part, la dernière partie de l'adresse DNS peut désigner le nom du pays du propriétaire de l'ordinateur ou du site web.</p>
      <ul>
        <li><strong>.fr</strong>, pour la France,</li>
        <li><strong>.be</strong>, pour la Belgique</li>
        <li><strong>.uk</strong>, pour l'Angleterre,</li>
        <li><strong>.de</strong>, pour l'Allemagne,</li>
        <li><strong>.au</strong>, pour l'Australie,</li>
        <li><strong>.ca</strong>, pour le Canada,</li>
        <li><strong>.eu</strong>, pour les sites à développement européen</li>
        <li>etc.</li>
      </ul>
      <p>Une liste complète des noms de domaines par pays peut être vue <span style="cursor:pointer; color:blue; text-decoration:underline" onclick="popup()">en cliquant ici</span>.</p>
      <p>Exemple: <strong>users.skynet.be</strong> désigne un ordinateur d'une société située en Belgique.</p>
      <p class="info">D'autres domaines un peu moins courants existent aussi: <a href="http://www.google.com/search?q=site%3A.biz&hl=en&lr=lang_fr" target="_blank">biz</a>, 
      <a href="http://www.google.com/search?q=site%3A.info&lr=lang_fr" target="_blank">info</a>, 
      <a href="http://www.google.com/search?q=site%3A.name&lr=lang_fr" target="_blank">name</a>, 
      <a href="http://www.google.com/search?q=site%3A.museum&lr=lang_fr" target="_blank">museum</a>,...</p>
      </div>
      <p>Quand tu as compris le sens de la troisième partie de l'adresse DNS, passe à la page suivante <?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
