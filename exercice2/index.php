<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice1</title>
  </head>
  <body>
    <p> Dans l'URL saisir les paramètre ainsi http://exercicephp6-1/?<strong>nom</strong>=burel&<strong>prenom</strong>=fabrice&<strong>age</strong>=20</p>
    <?php
    if (isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['age'])){ // On a le nom et le prénom
      $_GET['age']= (int) $_GET['age'];
      if($_GET['age'] > 0 && $_GET['age'] < 140){
        echo '<p>' .$_GET['prenom'] . ' ' . $_GET['nom'] . ' ' . $_GET['age'] . '</p>';
      }else{
        echo 'veuillez saisir un age';
      }
    }else {
      echo '<p> Il faut renseigner les paramètres </p>';
    }
    ?>
  </body>
</html>
