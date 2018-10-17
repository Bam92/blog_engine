<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/Font-Awesome-fa-4/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/style.css">
  </head>
  <body>
    <div class="container">
       <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">

               <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
                   <a class="navbar-brand" href="index.php?action=admin">Roman</a>
               </div>
               <div class="collapse navbar-collapse" id="navbar-collapse-target">
                   <ul class="nav navbar-nav navbar-right">

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

       </nav>
       <div id="content"> <?= $content ?> </div>

       <footer class="footer">
         <a class="text-center" href="index.php?action=logout">Déconnexion</a>
       </footer>

    </div><!-- /.container -->

    <!--script type="text/javascript" src="vendor/tinymce/js/tinymce/tinymce.min.js"> </script>
    <script type="text/javascript">
    tinyMCE.init({
      mode: "textareas",
      language: "fr",
      theme: "simple"
    });

    </script-->
    <!--script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script-->

    <!-- jquery -->
    <script type="text/javascript" src="vendor/jquery-3.3.1.min.js"></script>
    <!-- bootstrap -->
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
