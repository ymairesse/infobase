<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function (){
        $(".qcm").click(function(){
            $(this).next().next().show(300);
        })
    })
  </script>
    <title>Les périphériques de stockage</title>
<script type="text/javascript">
        
        function formater ()
        {
        var image = document.getElementById('disque');
        image.src = 'images/sectpiste.gif';
        return (true);
        }
        function NonFormate ()
        {
        var image = document.getElementById('disque');
        image.src = 'images/nonformate.gif';
        return (true);
        }
</script>
  </head>
  <body>
    <div id="conteneur">
      <?php include ("./top.inc.php"); ?>
      <div id="texte">
        <h2>
          Un disque d'ordinateur doit être formaté
        </h2>
        <div class="info">
        <p>
          <img class="imagedroite" id="disque" style="width: 297px; height: 273px;" alt="Disque non formaté" src=
          "images/nonformate.gif" name="disque"> Contrairement à une cassette audio ou vidéo, avant de pouvoir écrire
          sur un disque, il faut avoir dessiné magnétiquement la structure sur laquelle vont s'écrire les informations.
        </p><img style="width: 297px; height: 273px; display: none;" alt="image cache" src="images/sectpiste.gif">
        <p>
          Il faut mettre en place un <strong>ensemble de bornes</strong> entre lesquelles l'ordinateur va pouvoir
          écrire des informations : on formate le disque en y écrivant magnétiquement ces informations "repères"
          disposées
        </p>
        <ul>
          <li>en "<strong>pistes</strong>" et
          </li>
          <li>en "<strong>secteurs</strong>".
          </li>
        </ul>
        <p>
          Cette opération s'appelle <strong>le formatage</strong>.
        </p>
        <p>
          Clique sur <span style="text-decoration: underline; cursor: pointer;" onclick=
          "javascript:formater()">Formater le disque</span> pour comparer un disque formaté et un disque non formaté.
          Pour revoir la situation initiale, clique sur <span style="cursor: pointer; text-decoration: underline;"
          onclick="NonFormate()">Disque non formaté</span>
        </p>
        <p>
          Le nombre de pistes et de secteurs varie d'un type de disque à l'autre selon sa capacité.
        </p>
        <p>
          Il est impossible de voir le film enregistrée sur une cassette vidéo. De même, il est impossible de voir
          les pistes magnétiques sur un disque informatique.
        </p>
    </div>
        <form action="" class="travail">
          Une piste sur un disque informatique ressemble plus à<br />
          <input class="qcm" type="radio">un couloir sur un stade d'athlétisme<br />
          <p class="vrai">Exact.<br />On peut faire tout un tour de la disquette en parcourant une piste.</p>
          <input class="qcm" type="radio">un quartier de tarte<br />
          <p class="faux">Non!<br />Tu confonds certainement avec le secteur.</p>
        </form>
        
        <form action="" class="travail">Dans l'illustration du disque formaté ci-dessus, en combien de secteurs est divisée une piste?<br />
          <input class="qcm" type="radio">1 secteur<br />
          <p class="faux">Réponse fausse.<br />Un seul secteur est mis en évidence sur le schéma, mais il y a plus de secteurs pour une piste.</p>
          <input class="qcm" type="radio">8 secteurs<br />
          <p class="vrai">Tout à fait exact.</p>
          <input class="qcm" type="radio">24 secteurs<br />
          <p class="faux">Non!<br />N'aurais-tu pas compté le nombre de pistes dans un secteur?</p>
        </form>
        <form action="" class="travail">
          Quand on compare la dimension des secteurs d'un disque, on voit que<br />
          <input class="qcm" type="radio">Tous les secteurs ont la même dimension<br />
          <p class="vrai">Bien sûr.<br />Chaque secteur à la même forme en quartier de tarte.</p>
          <input class="qcm" type="radio">Tous les secteurs n'ont pas la même dimension<br />
          <p class="faux">Non.<br />Ne confonds-tu pas encore &quot;piste&quot; et &quot;secteur&quot;?</p>
        </form>
        <form action="" class="travail">
          Quand on compare la dimension des pistes d'un disque, on voit que:<br />
          <input class="qcm" type="radio">Toutes les pistes ont la même dimension<br />
          <p class="faux">Non! Retourne à l'illustration pour voir que les pistes centrales sont plus courtes.</p>
          <input class="qcm" type="radio">Toutes les pistes n'ont pas la même dimension<br />
          <p class="vrai">Effectivement, les pistes centrales sont plus courtes.</p>
        </form>
        <p>
          Quand tu as répondu aux questions précédentes et compris les réponses, passe à la page suivante de la
          leçon.<?php include ("../../suivant.inc.php"); ?>
        </p>
      </div><?php include ("../../pied.inc.php"); ?>
    </div>
  </body>
</html>
