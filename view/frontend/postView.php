<?php $title = 'Billet simple pour l\'Alaska. Episode '.$post['pst_id']. ' - ' .$post['pst_title'] ?>

<?php ob_start();  ?>

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

        <footer class="entry-footer">
          <span class="posted-on"><?php echo $post['pst_date_fr']; ?></span>
          <span class="by">Abel</span>
          <span class="">
            <?php
              while ($tag = $tags->fetch()) {
                  echo $tag['tag_name']. ', ';
              }
            ?>
          </span>
        </footer>
        <!--,entry-footer -->

      </article>

    <h2>Commentaires( <?php echo $cmt_number['nb']; ?> )</h2>
<?php
    while ($comment = $comments->fetch())
    {
?>
      <p> Commentaire de <?php if ($comment['cmt_web'] != NULL) { ?>
        <a href="<?php echo htmlentities($comment['cmt_web']); ?>"><strong> <?php echo htmlentities($comment['cmt_author']); ?></strong></a>
      <?php
    } else {  ?>
      <strong> <?php echo htmlentities($comment['cmt_author']); ?></strong>
    <?php } ?><br><small>
        <?php echo $comment['cmt_date_fr']; ?>
      </small></p>
      <p>
        <?php echo $comment['cmt_content']; ?>
      </p>
<?php
  }
?>

<h3>Vos commentaires</h3>
<!--form to add comment-->
<form class="form-horizontal" action="index.php?action=addComment&amp;id=<?php echo $post['pst_id']; ?>" role="form" method="post">
  <div class="form-group">
    <label for="comment">Commentaire</label><br>
    <textarea name="comment" id="mytextarea"></textarea>
  </div>
  <div class="form-group">
    <label for="author">Nom*</label><br>
    <input type="text" name="author" id="author" required>
  </div>
  <div class="form-group">
    <label for="email">Adresse de messagerie</label><br>
    <input type="email" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="web">Site web</label><br>
    <input type="url" name="web" id="web">
  </div>
  <div class="form-group">
    <input type="submit" value="Commentez">
  </div>
</form>

<?php $content= ob_get_clean(); ?>

<?php require('template.php'); ?>
