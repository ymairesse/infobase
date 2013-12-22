<?php //anti-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta name="generator" content="HTML Tidy for Windows (vers 1st July 2004), see www.w3.org">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
<script language="JavaScript" type="text/javascript">
function WindowPrint () {
window.print ();
alert('V�rifie que te page est correctement imprim�e avant de poursuivre.');
history.go(-1);
}
</script>
    <title>Les outils du syst�me d'exploitation</title>
  </head>
  <body>
    �
    <div id="conteneur">
      <?php include ("./top.inc.php"); ?>
      <div id="texte">
        <h2>Les menus</h2>
        <p class="info">
          La plupart des applications�disposent dune s�rie de menus.
        </p>
        <p>
          Dans un logiciel, un menu est�:<br>
          <?php 
          $menu= $_POST['menu'];
          echo stripslashes(htmlentities($menu));
          ?>
        </p>
        <p>
          Voici quatre raccourcis-clavier appartenant au logiciel d'exploration du web que j'utilise actuellement:
        </p>
        <table border="0" cellpadding="5" cellspacing="5" width="100%">
          <tbody>
            <tr>
              <td valign="top" width="22%">
                Raccourci
              </td>
              <td width="78%">
                Explication
              </td>
            </tr>
            <tr>
              <td valign="top" width="22%">
                1.<?php 
                $r1 = $_POST['r1'];
                echo "&nbsp;".stripslashes(htmlentities($r1));
                ?>
              </td>
              <td width="78%">
                <?php 
                $expl1 = $_POST['expl1'];
                echo "&nbsp;".stripslashes(htmlentities($expl1));               
                ?>
              </td>
            </tr>
            <tr>
              <td valign="top" width="22%">
                2.<?php $r2 = $_POST['r2'];
                                                                                  echo "&nbsp;".stripslashes(htmlentities($r2));
                                                                                        ?>
              </td>
              <td width="78%">
                <?php $expl2 = $_POST['expl2'];
                                                                                  echo "&nbsp;".stripslashes(htmlentities($expl2));
                                                                                        ?>
              </td>
            </tr>
            <tr>
              <td valign="top" width="22%">
                3.<?php $r3 = $_POST['r3'];
                                                                                  echo "&nbsp;".stripslashes(htmlentities($r3));
                                                                                        ?>
              </td>
              <td width="78%">
                <?php $expl3 = $_POST['expl3'];
                                                                                  echo "&nbsp;".stripslashes(htmlentities ($expl3));
                                                                                        ?>
              </td>
            </tr>
            <tr>
              <td valign="top" width="22%">
                4.<?php $r4 = $_POST['r4'];
                                                                                  echo "&nbsp;".stripslashes(htmlentities($r4));
                                                                                        ?>
              </td>
              <td width="78%">
                <?php $expl4 = $_POST['expl4'];
                                                                                  echo "&nbsp;".stripslashes(htmlentities($expl4));
                                                                                        ?>
              </td>
            </tr>
          </tbody>
        </table>
        <p>
          <span class="label">Nom�:</span><?php $nom = $_POST['nom'];
                                              echo "&nbsp;".stripslashes(htmlentities($nom));
                                                            ?>
        </p>
        <p>
          <span class="label">Pr�nom�:</span><?php $prenom = $_POST['prenom'];
                                              echo "&nbsp;".stripslashes(htmlentities($prenom));
                                                            ?>
        </p>
        <p>
          <span class="label">Pr�nom�:</span><?php $classe = $_POST['classe'];
                                              echo "&nbsp;".stripslashes(htmlentities($classe));
                                                            ?>
        </p>
        <p style="text-align: center;" class="invisible">Cliquer 
          <img src="../../images/printr3c.gif" class="pointer" onclick="WindowPrint()" height="32" width="32"  title="Cliquer pour imprimer"> 
          pour imprimer.</p>
      </div><?php include ("../../pied.inc.php");?>
    </div>
  </body>
</html>