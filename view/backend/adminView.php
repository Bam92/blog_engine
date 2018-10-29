<?php $title = 'Billet simple pour l\'Alaska. Episode '.$post['pst_id']. ' - ' .$post['pst_title'] ?>

<?php ob_start(); ?>

<h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
<h2>Articles recents</h2>

<table class="table table-hover table-sm table-responsive">
    <thead class="thead-default">
      <tr>
        <th>Titre</th>
        <th>Contenu</th>
        <th></th><!-- Actions column -->
      </tr>
    </thead>

    <?php
    while ($row = $posts->fetch())
    {
    ?>
        <tr>
          <td><?php echo $row['pst_title']; ?></td>
          <td><?php echo substr($row['pst_content'], 0, 100). "..."; ?></td>
          <td>
            <a href="index.php?action=edit&amp;id=<?php echo $row['pst_id']; ?>" class="btn btn-info btn-xs" title="Modifier">
              <i class="fa fa-pencil-square-o"></i>
            </a>
            <button type="button" class="btn btn-danger btn-xs" title="Supprimer" data-toggle="modal"
            data-target="#articleDialog<?php echo $row['pst_id']; ?>"><i class="fa fa-window-close"></i></button>

            <div class="modal fade" id="articleDialog<?php echo $row['pst_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                        </div>
                        <div class="modal-body">
                            Etes-vous sur de vouloir supprimer cet article ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <a href="index.php?action=delete&amp;id=<?php echo $row['pst_id']; ?>" class="btn btn-danger">Confirm</a>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </td>
        </tr>
    <?php
    }
    ?>
</table>

<a href="index.php?action=add"><button type="button" name="button" class="btn btn-primary"><i class="fa fa-plus fa-lg"></i> Ajouter</button></a>

<?php $content= ob_get_clean(); ?>

<?php require('template.php'); ?>
