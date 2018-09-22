<?php $title = 'Billet simple pour l\'Alaska. Episode '.$post['pst_id']. ' - ' .$post['pst_title'] ?>

<?php ob_start();  ?>
<!--h1>Mon super blog</h1-->
<p><a href="index.php">Retour à la liste des billets</a></p>
    <div class="post">

      <article class="">
        <header class="entry-header">
          <h1>
            <a href="index.php?action=post&amp;id=<?php echo $post['pst_id']; ?>"><?php echo htmlspecialchars ($post['pst_title']); ?></a>
          </h1>
        </header>
        <!--,entry-header -->

        <div class="entry-content">
          <?php echo nl2br(htmlspecialchars ($post['pst_content'])); ?>
        </div>
        <!--,entry-content -->
<br>
        <footer class="entry-footer">
          <span class="posted-on"><?php echo $post['pst_date_fr']; ?></span>
          <span class="by">Abel</span>
          <span class=""> category or tag?</span>
        </footer>
        <!--,entry-footer -->

      </article>

    </div>

    <h2>Commentaires</h2>
<?php
    while ($comment = $comments->fetch())
    {
      echo "<p> Commentaire de <strong>" .htmlentities($comment['cmt_author']). "</strong><br> ".
      $comment['cmt_date_fr']. "</p>";
      echo "<p>" .nl2br(htmlspecialchars($comment['cmt_content'])) ."</p>";
  }
?>

<!--form to add comment-->
<form class="" action="index.php?action=addComment&amp;id=<?php echo $post['pst_id']; ?>" method="post">
  <div class="">
    <label for="author">Auteur</label><br>
    <input type="text" name="author" id="author">
  </div>
  <div>
    <label for="comment">Commentaires</label><br>
    <textarea name="comment" id="comment"></textarea>
  </div>
  <div class="">
    <input type="submit">
  </div>
</form>

<?php $content= ob_get_clean(); ?>

<?php require('template.php'); ?>
