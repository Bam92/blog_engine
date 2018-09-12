<?php
function getPosts()
{
  try {
    $db_conct = new PDO('mysql:host=localhost; dbname=p3_blog', 'bam', 'bam92');

  } catch (PDOException $e) {
    echo "Impossible de se connecter a la base de donnees";

  }

  $stmt = $db_conct->query('SELECT pst_id, pst_title, pst_content, pst_date FROM t_post ORDER BY pst_date DESC LIMIT 0, 5');
  return $stmt;

}
