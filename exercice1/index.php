<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice1</title>
  </head>
  <body>
    <p> Dans l'URL saisir les paramètre ainsi http://exercicephp6-1/?<strong>nom</strong>=burel&<strong>prenom</strong>=fabrice </p>
    <?php
    if (isset($_GET['prenom']) && isset($_GET['nom'])){ // On a le nom et le prénom
      echo '<p>' .$_GET['prenom'] . ' ' . $_GET['nom'] . '</p>';
    }else {
      echo '<p> Il faut renseigner les paramètres </p>';
    }

    ?>
  </body>
</html>
