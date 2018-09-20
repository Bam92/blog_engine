<?php
/**
 * database
 */
class Manager
{

  protected function dbConnect()
  {

      $db_conct = new PDO('mysql:host=localhost; dbname=p3_blog', 'bam', 'bam92');
      return $db_conct;
  }
}
