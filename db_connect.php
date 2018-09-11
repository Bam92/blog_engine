<?php
try {
  $db_conct = new PDO('mysql:host=localhost; dbname=p3_blog', 'bam', 'bam92');

} catch (PDOException $e) {
  echo "Impossible de se connecter a la base de donnees";

}
