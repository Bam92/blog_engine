<?php $title= 'Billet simple pour l\'Alaska - le roman de Jean Forteroche'; ?>

<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid">
    <?php while ($row = $unique->fetch()) { ?>
    
  <div class="container">
      <header class="entry-header">
          <h1>
            <a href="index.php?action=post&amp;id=<?php echo $row ['pst_id']; ?>"><?php echo $row ['pst_title']; ?></a>
          </h1>
      </header>
        <!--,entry-header -->

    <div class="entry-content">
      <?php echo nl2br(substr($row['pst_content'], 0, 300)); ?>...
    </div>
    </div>
    <?php } ?>
</div>

<?php while ($row = $posts->fetch()) { ?>

<article class="container">
  <header class="entry-header">
    <h1>
      <a href="index.php?action=post&amp;id=<?php echo $row['pst_id']; ?>">
        <?php echo ($row['pst_title']); ?>
      </a>
    </h1>
  </header>
  <!--,entry-header -->

  <div class="entry-content">
    <?php echo nl2br(substr($row['pst_content'], 0, 300)); ?>...
  </div>
  <!--,entry-content -->

  <footer class="entry-footer">
    <span class="posted-on"><?php echo $row['pst_date_fr']; ?></span>
    <span class="by">Abel</span>
    <span class=""> <?php
      //while ($tag = $tags->fetch()) {
        print($tags['tag_name']);
    //  }
    ?>
    <?php echo $cmt_number['nb']; ?>
    </span>
  </footer>
  <!--,entry-footer -->

</article>

<?php } ?>

<?php $content= ob_get_clean(); ?>

<?php require('template.php'); ?>
