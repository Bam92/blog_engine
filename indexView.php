<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Personal Blog</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Mon super blog</h1>
    <p>Articles recemment publies: </p>
    <?php

    while ($row = $posts->fetch())
    {
    ?>
    <div class="post">
      <h3>
        <?php echo htmlspecialchars ($row['pst_title']); ?>
        <em>le <?php echo $row['pst_date']; ?></em>
      </h3>
      <p>
        <?php echo nl2br(htmlspecialchars ($row['pst_content'])); ?><br>
        <em>
          <a href="post.php?id=<?php echo $row['pst_id']; ?>">Commentaires</a>
        </em>
      </p>

    </div>
    <?php
    }
  //$row->closeCursor();
    ?>
<!--
    //  echo 'article num' .$row['pst_id']. 'titre' .$row['pst_title'] .$row['pst_content']. '\n';
    }
    ?>
-->
  </body>
</html>
