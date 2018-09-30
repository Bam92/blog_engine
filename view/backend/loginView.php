<?php $title= 'Se connecter';?>
<?php ob_start();  ?>
<div class="well">
  <h1>Connectez-vous</h1>
    <form class="form-signin form-horizontal" role="form" action="index.php?action=loginChk" method="post">
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <input type="text" name="username" class="form-control" placeholder="Enter your username" required autofocus>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Connexion</button>
            </div>
        </div>
    </form>
</div>

<?php $content= ob_get_clean(); ?>

<?php
 require('template.php');
?>
