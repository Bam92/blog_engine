<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Post details</title>
  </head>
  <body>
    <h1>Mon super blog</h1>
    
    <p><a href="index.php">Retour à la liste des billets</a></p>
    <?php
    include 'db_connect.php';

     // Get the post
     $sql = 'SELECT *
             FROM t_post
             WHERE pst_id = ?';

     $stmt = $db_conct->prepare($sql);
     $stmt->execute(array($_GET['post']));
     $row = $stmt->fetch();
     ?>
     <!-- display target article -->
     <div class="post">
       <h3>
         <?php echo htmlspecialchars ($row['pst_title']); ?>
         <em>le <?php echo $row['pst_date']; ?></em>
       </h3>
       <p>
         <?php echo nl2br(htmlspecialchars ($row['pst_content'])); ?>
       </p>

     </div>

     <!-- show comments for the target article -->
     <h2>Commentaires</h2>
     <?php
    // query for comments
    $sql = 'SELECT *
            FROM t_comment
            WHERE pst_id = ?
            ORDER BY cmt_date';
    $stmt = $db_conct->prepare($sql);

    // perform query
    $stmt->execute(array($_GET['post']));

    while ($row = $stmt->fetch())
    {
    ?>

    <p><strong><?php echo htmlspecialchars($row['cmt_author']); ?> </strong> le
      <?php echo $row['cmt_date']; ?>
    </p>
    <p><?php echo nl2br(htmlspecialchars($row[cmt_content])); ?> </p>



    <?php
    }
    ?>
  </body>
</html>
