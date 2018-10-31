<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lte IE 7]>
    <script src="js/IE8.js" type="text/javascript"></script><![endif]-->
    <!--[if lt IE 7]>

    <link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->


  </head>
  <body>

    <main class="container-fluid wrapper" role="main">
      <!--div class="wrapper"-->
        <nav class="navbar-expand-xl" role="navigation" id="sidebar">

          <div class="sidebar-header" role="banner">
            <h3 class="site-title">
              <a href="index.php" rel="home">Billet simple pour l'Alaska</a>
            </h3>
            <p class="site-description">Le nouveau roman de Jean Forteroche</p>
          </div>

          <div class="sidebar-content">
            <section class="m-border-b">
              <a class="nav-link" href="index.php?action=login">Connexion</a>
            </section>
            <section class="m-border-b">
              Episode

              <!--?php
                while ($row = $posts->fetch())
                {
                  echo htmlspecialchars ($row['pst_id']);
                }
                ?-->
            </section>
            <section class="m-border-b">
              <a class="nav-link active" href="#">A propos</a>
              <a class="nav-link" href="#">Contact</a>
            </section>
          </div>

        </nav>
      <!--/div-->
      <div id="content">
        <?= $content ?>
      </div>

      <footer> </footer>
    </main>

    <script type="text/javascript" src="vendor/tinymce/tinymce.min.js"> </script>
    <script type="text/javascript">
    tinyMCE.init({
      mode: "textareas",
      theme: "modern",
      width: 600,
      height: 100
    });

    </script>

  </body>
</html>
