<?php //$title = 'Billet simple pour l\'Alaska. Episode '.$post['pst_id']. ' - ' .$post['pst_title'] ?>

<form action="index.php?action=addPost" method="post">
<p><label for="title">Titre</label><input type="text" name="title" value=""  /></p>
<p><label for="content">Contenu</label><textarea name="content" rows="8" cols="80"></textarea>
</p>
<p><input type="submit" name="submit" value="Ajouter"  /></p>
</form>