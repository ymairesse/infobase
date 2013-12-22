<?php
$mail="ymairesse@sio2.be";
// Recherche du numéro de la page actuelle
ereg("[0-9az]*\.php$",$PHP_SELF, $regs);
$resultat=$regs[0];
if (ereg("^[0-9]{1,2}",$resultat,$regs))
	$nopage=$regs[0];
	else
	$nopage=0;
if ($nopage < $nbpages)
	$suiv = $nopage+1;
	else
	$suiv = 0;
if ($nopage > 1)
	$prec = $nopage-1;
	else
	$prec=0;	
echo "<link href=\"../stylebtn.css\" rel=\"stylesheet\" type=\"text/css\">";
echo "<title>$titre</title>";
if ($nopage > 0)
	echo "<body background=\"../images/$nopage.gif\">";
echo "<table width=\"750\" border=\"0\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\">";
echo "<tr><td><h1>$titre</h1></td></tr>";
echo "<table>";
echo "<table width=\"750\" border=\"0\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\">";
echo "<td width=\"55\"><img src=\"../images/test.jpg\" width=\"106\" height=\"28\"></td>";
echo "<td>";
echo "<div align=\"center\">";
if ($prec > 0)
	echo "<a href=".$prec.".php class=\"btn\"> < </a>";
for ($i = 1; $i <= $nbpages; $i++) {
   echo "<a href=".$i.".php class=\"btn\" Title=\"Page $i\">";
   if ($i <> $nopage)
   		echo "$i";
		else
		echo "[ $i ]";
	echo "</a>";
   if (($i % 12)==0) {
   	echo "<br>";
    }
}
if ($suiv <> 0)
	echo "<a href=".$suiv.".php class=\"btn\" Title=\"Page suivante\"> > </a>";
echo "<br>";
echo "<a href=\".\..\index.php\" class=\"bigbtn\" Title=\"Index général du cours\">Index du cours</a>";
echo "<a href=\"index.php\" class=\"bigbtn\" Title=\"Plan de la leçon\">Plan de la leçon</a>";
echo "<a href=\"obj.php\" class=\"bigbtn\" Title=\"Objectifs de la leçon\">Objectifs</a>";
echo "<a href=\"..\erreur.php\" target=\"_blank\" class=\"bigbtn\" Title=\"J'ai trouvé une erreur\">@#~!%£!!</a>";
echo "</div>";
echo "</td>";
echo "<td width=\"55\"><img src=\"../images/test2.jpg\" width=\"106\" height=\"28\"></td>";
echo "</table>";
// include ("/home/sio/www/cours/info/infobase/stat.inc.php");
include ("../../stat.inc.php");


?>