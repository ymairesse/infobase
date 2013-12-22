<?php // anti-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function (){
        $(".qcm").click(function(){
            $(this).next().next().show(300);
        });
		$(".qcm").attr("checked",false);
    })
  </script>     
  <title>Les programmes d'ordinateur</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");
                ?>
    <div id="texte">
      <h2>M�moire vive et m�moire morte</h2>
      <form action="" class="qcu">
        Quand on coupe le courant de l'ordinateur, la m�moire centrale<br />
		<input class="qcm" type="radio">conserve uniquement le contenu du BIOS<br />
		<p class="faux">Il y a un petit pi�ge dans cette r�ponse! Le contenu du BIOS ne figure pas dans la m�moire centrale.<br />Cette r�ponse est donc fausse.</p>
		<input class="qcm" type="radio">conserve toutes les informations qui y ont �t� stock�es<br />
		<p class="faux">Malheureusement non!<br />Toutes les informations d�pos�es dans la m�moire centrale disparaissent d�finitivement<br />et il n'existe aucun moyen de les retrouver.</p>
		<input class="qcm" type="radio">ne conserve strictement aucune information<br />
		<p class="vrai">Bien s�r! Sans alimentation �lectrique, la m�moire centrale perd tout son contenu.<br />C'est pr�cis�ment pour r�soudre ce probl�me que l'ordinateur est muni d'un BIOS.</p>
      </form>
      <form action="" class="qcu">
        Le BIOS est<br />
		<input class="qcm" type="radio">Une puce situ�e dans l'ordinateur<br />
		<p class="vrai">'Effectivement, il s'agit bien de la puce qui est pr�sent�e<br />sur l'image de la page pr�c�dente.<br />On dit parfois aussi que le BIOS est l'ensemble des instructions qui figurent dans cette puce.</p>
		<input class="qcm" type="radio">Une partie de la m�moire centrale<br />
		<p class="faux">Le BIOS ne fait certainement pas partie de la RAM: son contenu ne s'efface jamais.</p>
		<input class="qcm" type="radio">Une partie du microprocesseur<br />
		<p class="faux">Non, le BIOS est tout � fait ind�pendant du processeur.</p>
      </form>
      <form action="" class="qcu">
        La m�moire centrale de l'ordinateur contient des informations<br />
		<input class="qcm" type="radio">Qui sont toujours les m�mes, d'une fois � l'autre<br />
		<p class="faux">Faux!<br />Puisqu'on peut mettre diff�rents programmes dans la m�moire centrale.</p>
		<input class="qcm" type="radio">Qui peuvent varier, d'une fois � l'autre<br />
		<p class="vrai">Effectivement, les informations changent en fonction des programmes que l'on utilise.</p>
      </form>
      <form action="" class="qcu">
        Le BIOS est capable de retenir des informations qui permettent � l'ordinateur de<br />
		<input class="qcm" type="radio">D�marrer quand il est �teint<br />
		<p class="vrai">Exact. <br />Le BIOS contient les programmes qui indiquent � l'ordinateur comment �crire � l'�cran, lire le clavier, d�terminer la position de la souris,...</p>
		<input class="qcm" type="radio">�crire � l'�cran, uniquement<br />
		<p class="faux">Non.<br />Le BIOS contient beaucoup plus que cela.</p>
		<input class="qcm" type="radio">S'�teindre quand il est allum�<br />
		<p class="faux">Faux.<br />Ne confonds-tu pas avec l'interrupteur?</p>
      </form>
      <form action="" class="qcu">
        L'acronyme RAM signifie<br />
<input class="qcm" type="radio">Random Access Memory<br />
		<p class="vrai">Exact.</p>
		<input class="qcm" type="radio">Read Access Memory<br />
		<p class="faux">Non.</p>
		<input class="qcm" type="radio">Random Able Memory<br />
		<p class="faux">Non.</p>		
      </form>
      <form action="" class="qcu">
        L'acronyme ROM signifie<br />
		<input class="qcm" type="radio">Random Only Memory<br />
		<p class="faux">Faux.</p>
		<input class="qcm" type="radio">Read Only Memory<br />
		<p class="vrai">Exact.</p>
		<input class="qcm" type="radio">Read Able Memory<br />
		<p class="faux">Non.</p>		
      </form>
      <form action="" class="qcu">
        La m�moire RAM est<br />
		<input class="qcm" type="radio">De la m�moire vive<br />
		<p class="vrai">Exact.<br />Le contenu de la m�moire RAM peut �tre modifi�. Il s'agit donc bien de m�moire vive.</p>
		<input class="qcm" type="radio">De la m�moire morte<br />
		<p class="faux">Faux.<br />La m�moire RAM n'est pas fig�e une fois pour toutes.</p>
		<input class="qcm" type="radio">Aucune autre r�ponse n'est satisfaisante<br />
		<p class="faux">Et pourtant.<br />L'une des autres r�ponses est correcte.</p>		
      </form>
      <form class="qcu" action="">
        Le BIOS<br />
		<input class="qcm" type="radio">contient de la m�moire vive<br />
		<p class="faux">Non.<br />Le contenu du BIOS n'est pas modifi� durant l'ex�cution des programmes.</p>
		<input class="qcm" type="radio">contient de la m�moire morte<br />
		<p class="vrai">Exact.<br />Le contenu du BIOS ne change pas.</p>
		<input class="qcm" type="radio">ne contient aucune m�moire<br />
		<p class="faux">Faux.<br />Le BIOS est capable de retenir toutes les informations n�cessaires au fonctionnement de base de l'ordinateur.</p>
      </form>
      <p>Quand tu as r�pondu � toutes les questions et bien compris les r�ponses, passe � la page suivante.<?php include ("../../suivant.inc.php");
                        ?></p>
    </div><?php include ("../../pied.inc.php");
                ?>
  </div>
</body>
</html>
