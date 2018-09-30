<?php $title= 'Mon Blog Erreur';?>

    <div class="row" id="errorPanel">
        <div class="col-xs-5">
            <img class="img-responsive pull-right" src="public/img/404-ghost.png" alt="Error ghost">
        </div>
    <div class="col-xs-6">
        <?php echo "<h1>Whoops...<br><small>" .$errorMessage ."</small></h1>";?>
    </div>
    </div>
<?php
 require('template.php');
?>
