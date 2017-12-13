<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice5</title>
  </head>
  <body>
    <p> Dans l'URL saisir les paramètre ainsi http://exercicephp6-5/?<strong>semaine</strong>=12</p>
    <?php
    if (isset($_GET['semaine'])){ // On a le nom et le prénom
      $_GET['semaine']= (int) $_GET['semaine'];
      if($_GET['semaine'] > 0 && $_GET['semaine'] < 32){
        echo 'nous sommes la semaine ' . $_GET['semaine'];
      }else{
        echo 'veuillez saisir un nombre de semaine';
      }
    }else {
      echo '<p> Il faut renseigner des paramètres </p>';
    }
    ?>
  </body>
</html>
