<?php
$lastname = 'Nemare';
$firstname = 'Jean';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <p>

    <?php
    if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['age'])) // si on a le nom et le prénom, test les variable lastname, firstname et age
    {
echo 'Hey ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ', tu as ' . $age . '!';
} else //manque de paramêtre
{
  echo 'il manque ou plusieurs renseignement';
}
     ?>
   </p>
  </body>
</html>
