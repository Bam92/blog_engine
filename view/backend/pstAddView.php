<?php $title= 'Creer une nouvelle episode'; ?>
<?php ob_start(); ?>

<form action="" method="post">
  <div class="form-group row">
    <label for="title" class="form-control-label">Titre</label>
    <input type="text" name="title" value="">
  </div>
  <div class="form-group row">
    <label for="content" class="form-control-label">Contenu</label>
    <textarea name="content" rows="8" cols="80"></textarea>
  </div>
  <div class="form-group row">
    <input type="submit" name="submit" value="Ajouter">
  </div>
</form>

<p> <!--To be removed after things go well -->
  <a href="index.php?action=admin">Dashbord</a>
</p>

<?php $content= ob_get_clean(); ?>
<?php require('template.php'); ?>
