<?php $title = 'Billet simple pour l\'Alaska. Episode '.$post['pst_id']. ' - ' .$post['pst_title'] ?>

<?php ob_start(); ?>

<h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
<h2>Articles recents</h2>

<div class="table-responsive">
  <table class="table table-hover table-condensed">
    <thead>
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
        <a href="{{ path('admin_article_edit', { 'id': article.id }) }}" class="btn btn-info btn-xs" title="Edit">
          <i class="fa fa-pencil-square-o"></i>
        </a>
        <button type="button" class="btn btn-danger btn-xs" title="Delete" data-toggle="modal" data-target="#articleDialog{{ article.id }}"><i class="fa fa-window-close"></i>
                        </button>
                        <div class="modal fade" id="articleDialog{{ article.id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Confirmation needed</h4>
                                    </div>
                                    <div class="modal-body">
                                        Do you really want to delete this article ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <a href="{{ path('admin_article_delete', { 'id': article.id }) }}" class="btn btn-danger">Confirm</a>
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
</div>

<a href="index.php?action=addPostForm"><button type="button" name="button" class="btn btn-primary"><i class="fa fa-plus fa-lg"></i> Ajouter</button></a>

<?php $content= ob_get_clean(); ?>

<?php require('template.php'); ?>
