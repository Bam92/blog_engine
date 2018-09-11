<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Personal Blog</title>
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>
    <h1>Mon super blog</h1>
    <p>Articles recemment publies</p>
    <?php
    include 'db_connect.php';

    // perform query for 5 latest post
    $stmt = $db_conct->query('SELECT pst_id, pst_title, pst_content, pst_date FROM t_post ORDER BY pst_date DESC LIMIT 0, 5');

    // display result
    while ($row = $stmt->fetch())
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
          <a href="comment.php?post=<?php echo $row['pst_id']; ?>">Commentaires</a>
        </em>
      </p>

    </div>
    <?php
    }
  //  $row->closeCursor();
    ?>
<!--
    //  echo 'article num' .$row['pst_id']. 'titre' .$row['pst_title'] .$row['pst_content']. '\n';
    }
    ?>
-->
  </body>
</html>
