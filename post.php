<?php
require('model.php');

if (isset($_GET['id']) && $_GET['id'] > 0) {
  $post = getPost($_GET['id']);
  $comments = getComments($_GET['id']);
  require('postView.php');
}
else {
  echo "Erreur : aucun identifiant de billet envoye ou l'identifiant est incorrect" .$_GET['id'];
}
//print_r($post['pst_title']);
//$db_conct = new PDO('mysql:host=localhost; dbname=p3_blog', 'bam', 'bam92');

/* // Get the post
 $db_connect = dbConnect();
 $sql = 'SELECT *
         FROM t_post
         WHERE pst_id = ?';

 $stmt = $db_conct->prepare($sql);
 $stmt->execute(array($_GET['id']));
 $row = $stmt->fetch();*/

/*$post = getPost($_GET['id']);
$comments = getComments($_GET['id']);
require('postView.php');*/
//echo $row['pst_title'];
