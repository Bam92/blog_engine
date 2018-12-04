<?php
namespace Bam\Blog\Model;

/**
 * database connection
 */
class Manager
{
  /**
  *@var \PDO
  */

  protected function dbConnect()
  {

      $db_conct = new \PDO('mysql:host=localhost; dbname=p3_blog', 'root', '');

      return $db_conct;
  }
}
