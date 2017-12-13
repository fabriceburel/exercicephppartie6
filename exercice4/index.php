<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice4</title>
  </head>
  <body>
    <p> Dans l'URL saisir les paramètre ainsi http://exercicephp6-4/?<strong>langage</strong>=PHP&<strong>serveur</strong>=LAMP</p>
    <?php
    if(isset($_GET['langage']) && isset($_GET['serveur'])){
        echo '<p>langage : ' . $_GET['langage'] . 'et le serveur est : ' . $_GET['serveur'] . '</p>';
    }else{
      echo '<p>saisir les paramètre php et serveur</p>';
    }

    ?>
  </body>
</html>
