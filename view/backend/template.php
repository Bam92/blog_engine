<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
  </head>

  <body>
    <?= $content ?>

    <footer>
      <a class="text-center" href="index.php?action=logout">Déconnexion</a>
    </footer>

  </body>
  
</html>
