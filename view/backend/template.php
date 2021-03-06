<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS and Font awesome -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/Font-Awesome-fa-4/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/style.css">

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lte IE 7]>
    <script src="js/IE8.js" type="text/javascript"></script><![endif]-->
    <!--[if lt IE 7]>

    <link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->

    <title><?= $title ?></title>
  </head>

  <body>
     <nav class="navbar navbar-inverse navbar-toggleable-sm fixed-top" role="navigation">
       <div class="container">
         <a class="navbar-brand" href="index.php?action=admin">Roman</a>
         <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav">
                <li class=""><a href=""><span class="glyphicon glyphicon-cog"></span> Administration</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user"></span> Welcome, {{ app.user.username }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Deconnexion</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user"></span> Not connected <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Log in</a></li>
                    </ul>
                </li>

            </ul>
         </div>

       </div>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
          <span class="navbar-toggler-icon"></span>
       </button>
     </nav>

       <div class="container">
       <div id="contentAdmin"> <?= $content ?> </div>

       <footer class="footer">
         <a class="text-center" href="index.php?action=logout">Déconnexion</a>
       </footer>

    </div><!-- /.container -->

    <script type="text/javascript" src="vendor/tinymce/tinymce.min.js"> </script>
    <script type="text/javascript">
    tinyMCE.init({
      mode: "textareas",
      theme: "modern",
      width: 600,
      height: 100
    });

    </script>
    <!-- jquery -->
    <script type="text/javascript" src="vendor/jquery-3.3.1.min.js"></script>
    <!-- bootstrap -->
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
