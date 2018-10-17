<?php $title= 'Modifier une episode'; ?>
<?php ob_start(); ?>

<form action="" method="post">
  <!--index.php?action=edit&amp;id=<?php echo $edit['pst_id'];?>-->
<p><label for="title">Titre</label><input type="text" name="title" value="<?php echo $edit['pst_title'];?>"></p>
<p><label for="content">Contenu</label>
  <textarea name="content" rows="8" cols="80">
    <?php echo $edit['pst_content'];?>
  </textarea>
</p>
<p><input type="submit" name="submit" value="Modifier"></p>
</form>

<p> <!--To be removed after things go well -->
  <a href="index.php?action=admin">Dashbord</a>
</p>

<?php $content= ob_get_clean(); ?>
<?php require('template.php'); ?>
