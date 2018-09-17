<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Personal Blog</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Mon super blog</h1>
    <p><a href="index.php">Retour à la liste des billets</a></p>

    <div class="post">
      <h3>
        <? echo htmlspecialchars ($post['pst_title']); ?>
        <em>le <?php echo $post['pst_date']; ?></em>
      </h3>
      <p>
        <?php echo nl2br(htmlspecialchars ($post['pst_content'])); ?><br>
      </p>

    </div>

    <h2>Commentaires</h2>
    <?php
    while ($comment = $comments->fetch())
    {
      echo "<p> <strong>" .htmlentities($comment['cmt_author']). "</strong> le ".
      $comment['cmt_date']. "</p>";
    echo "<p>" .nl2br(htmlspecialchars($comment['cmt_content'])) ."</p>";


  }
    ?>
  </body>
</html>
