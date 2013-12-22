<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
  <title>Internet est comme une biblioth�que publique</title>

  
  
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

  
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">

  
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">

  
  <script language="JavaScript" type="text/javascript">
	function WindowPrint () {
	  window.print ();
	  alert('V�rifie que ta page est imprim�e avant de poursuivre.');
	  history.go(-1);
	}
  </script>

</head><body>

<div id="texte">
<h2> Comparer Internet et une biblioth�que ordinaire </h2>

<?php if (isset($_POST)) {
	foreach ($_POST as $key => $value)
		$$key = $value;
}
?>
<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="vertical-align: top; width: 240px; text-align: center;">Crit�re de comparaison</td>
        <td style="vertical-align: top; width: 240px; text-align: center;">Biblioth�que ordinaire</td>
        <td style="vertical-align: top; width: 240px; text-align: center;">Internet</td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 240px;">Il existe un biblioth�caire</td>
        <td style="vertical-align: top; width: 240px; text-align: center;">
			<?php if (isset($bibBliothecaire)) echo "X"; ?>
		<br>
</td>
        <td style="vertical-align: top; width: 240px; text-align: center;">
			<?php if (isset($netBibliothecaire)) echo "X"; ?>
		<br>
</td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 240px;">Il existe un catalogue pr�cis</td>
        <td style="vertical-align: top; width: 240px; text-align: center;">
			<?php if (isset($bibCatalogue)) echo "X"; ?>
		<br>
</td>
        <td style="vertical-align: top; width: 240px; text-align: center;">
			<?php if (isset($netCatalogue)) echo "X"; ?>
		<br>
</td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 240px;">Les documents sont rang�s de mani�re syst�matique</td>
        <td style="vertical-align: top; width: 240px; text-align: center;">
			<?php if (isset($bibRangement)) echo "X"; ?>
		<br>
</td>
        <td style="vertical-align: top; width: 240px; text-align: center;">
			<?php if (isset($netRangement)) echo "X"; ?>
		<br>
</td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 240px;">Tous les documents propos�s sont accept�s</td>
        <td style="vertical-align: top; width: 240px; text-align: center;">
			<?php if (isset($bibAcceptation)) echo "X"; ?><br>
		</td>
        <td style="vertical-align: top; width: 240px; text-align: center;">
			<?php if (isset($netAcceptation)) echo "X"; ?><br>
		</td>
      </tr>
    </tbody>
  </table>
    <p><label for="nom">Nom: </label>
<?php if (isset($nom)) echo htmlentities($nom); ?> <br>
  <label for="prenom">Pr�nom: </label>
<?php if (isset($prenom)) echo htmlentities($prenom); ?> <br>
  <label for="classe">Classe: </label>
<?php if (isset($classe)) echo htmlentities($classe); ?></p>
<p class="invisible" style="text-align: center;">Cliquer sur <img style="cursor: pointer;" src="../../images/printr3c.gif" alt="Cliquer pour imprimer" onclick="WindowPrint()" height="32" width="32"> pour imprimer</p>
</div>


</body></html>