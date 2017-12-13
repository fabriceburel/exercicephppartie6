<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice6</title>
  </head>
  <body>
    <p> Dans l'URL saisir les paramètre ainsi http://exercicephp6-6/?<strong>batiment</strong>=12&<strong>salle</strong>=101</p>
    <?php
    if (isset($_GET['batiment']) && isset($_GET['salle'])){ // On a le nom et le prénom
      $_GET['batiment']= (int) $_GET['batiment'];
      $_GET['salle']= (int) $_GET['salle'];
      if($_GET['batiment'] > 0 && $_GET['batiment'] < 20 && $_GET['salle'] > 0 && $_GET['salle'] < 320){
        echo 'nous sommes dans la salle ' . $_GET['salle'] . ' du batiment ' . $_GET['batiment'];
      }else{
        echo 'veuillez saisir un numéro de batiment et/ou un numéro de salle';
      }
    }else {
      echo 'Il faut renseigner des paramètres';
    }
    ?>
  </body>
</html>
