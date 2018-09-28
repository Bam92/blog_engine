<?php //$title = 'Billet simple pour l\'Alaska. Episode '.$post['pst_id']. ' - ' .$post['pst_title'] ?>

<h1>Welcome, <?php echo $usr['usr_name']; ?></h1>
<h2>Articless</h2>
<?php
while ($row = $posts->fetch())
{
?>
<table>
  <tr>
    <th>Titre</th>
    <th>Contenu</th>
    <th></th><!-- Actions column -->
  </tr>

  <tr>
    <td><?php echo $row['pst_title']; ?></td>
    <td><?php echo substr($row['pst_content'], 0, 100). "..."; ?></td>
    <td><?php echo 'a venir'; ?></td>
  </tr>
</table>

<?php
}
?>
<a href="index.php?action=pst_add_form"><button type="button" name="button">ajouter</button></a>
