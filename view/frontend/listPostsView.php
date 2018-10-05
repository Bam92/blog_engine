<?php $title= 'Billet simple pour l\'Alaska - le roman de Jean Forteroche'; ?>

<?php ob_start(); ?>
    <!--h1>Mon super blog</h1-->
<?php
  while ($row = $posts->fetch())
  {
  ?>
  <div class="post">
    <article class="">
      <header class="entry-header">
        <h1>
          <a href="index.php?action=post&amp;id=<?php echo $row['pst_id']; ?>"><?php echo htmlspecialchars ($row['pst_title']); ?></a>
        </h1>
      </header>
      <!--,entry-header -->

      <div class="entry-content">
        <?php echo nl2br(htmlspecialchars(substr($row['pst_content'], 0, 300))); ?><br>
        <a href="index.php?action=post&amp;id=<?php echo $row['pst_id']; ?>" class="btn button-primary read-more">Lire la suite</a>
      </div>
      <!--,entry-content -->

      <br>

      <footer class="entry-footer">
        <span class="posted-on"><?php echo $row['pst_date_fr']; ?></span>
        <span class="by">Abel</span>
        <span class=""> <?php
          //while ($tag = $tags->fetch()) {
            print($tags['tag_name']);
        //  }
        ?>
        </span>
      </footer>
      <!--,entry-footer -->

    </article>
  </div>
  <?php
  }
//$row->closeCursor();
  ?>
  <?php $content= ob_get_clean(); ?>

<?php require('template.php'); ?>
