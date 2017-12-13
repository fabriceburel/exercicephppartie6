<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice3</title>
  </head>
  <body>
    <p> Dans l'URL saisir les paramètre ainsi http://exercicephp6-3/?<strong>dateDebut</strong>=2/05/2016&<strong>dateFin</strong>=27/11/2016</p>
    <?php
    if(isset($_GET['dateDebut']) && isset($_GET['dateFin'])){
        echo '<p>La date de début est : ' . $_GET['dateDebut'] . 'et la date de fin est : ' . $_GET['dateFin'] . '</p>';
    }else{
      echo '<p>saisir des dates</p>';
    }

    ?>
  </body>
</html>
