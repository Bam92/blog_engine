<?php $title = 'Mon super blog: ' .$post['pst_title'] ?>

<?php ob_start();  ?>
<h1>Mon super blog</h1>
<p><a href="index.php">Retour à la liste des billets</a></p>
    <div class="post">
      <h3>
        <? echo htmlspecialchars ($post['pst_title']); ?>
        <br> <?php echo $post['pst_date_fr']; ?>
      </h3>
      <p>
        <?php echo nl2br(htmlspecialchars ($post['pst_content'])); ?><br>
      </p>

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
