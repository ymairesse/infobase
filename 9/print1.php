<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>

  
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

  
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">

  
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">

  
  <script language="JavaScript" type="text/javascript">
function WindowPrint () {
  window.print ();
  alert('V�rifie que ta page est imprim�e avant de poursuivre.');
  history.go(-1);
  }
  </script><title>Introduction � l'Internet</title></head><body>
<?php foreach ($_POST as $key=>$value) {
  $$key = $value;
}

?>
<div id="conteneur">
<div id="texte">
<h2>Les origines militaires de l'Internet&nbsp;: questions</h2>
<p>1. Pourquoi l'arm�e am�ricaine �tait-elle motiv�e � r�ussir la mise en r�seau de ses ordinateurs ?</p>
<p><?php echo "<b>".stripslashes(nl2br($R1))."</b>"; ?></p>
<p>2. Quelle a �t� la premi�re exp�rience de chat sur un r�seau d'ordinateurs?</p>
<p><?php echo "<b>".stripslashes(nl2br($R2))."</b>"; ?><br>
</p>
<p>3. Pourquoi un r�seau centralis� serait-il fragile, au d�part?</p>

<p><?php echo "<b>".stripslashes(nl2br($R3))."</b>"; ?></p>
<p>3. Quel est le syst�me imagin� par l'ARPA pour r�soudre le probl�me
de fragilit� du r�seau&nbsp;? L'explication est bas�e sur
l'illustration ci-dessous.</p>
<p style="text-align: center;"><img style="width: 400px; height: 300px;" src="images/arpanet.gif" alt="ARPANET"></p>
<p><?php echo "<b>".stripslashes(nl2br($R4))."</b>";
        ?> </p>
<hr>
<p><span style="width: 80px; float: left;">Nom&nbsp;:</span><?php echo "<b>".stripslashes($nom)."</b>"; ?>
</p>
<p><span style="width: 80px; float: left;">Pr�nom&nbsp;:</span><?php echo "<b>".stripslashes($prenom)."</b>"; ?>
</p>
<p><span style="width: 80px; float: left;">Classe&nbsp;:</span><?php echo "<b>".stripslashes($classe)."</b>"; ?>
</p>
<form><?php $texte =$R1."\n".$R2."\n".$R3;
        $texte .= "\n\n".$nom."\n".$prenom."\n".$classe;
        ?>
  <div style="text-align: center;"> <input name="submit" value="Imprimer" onclick="WindowPrint()" type="button"> </div>
</form>
</div>
</div>

</body></html>