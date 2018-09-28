<?php
namespace Bam\Blog\Model;

require_once("model/Manager.php");
/**
 * Admin zone
 */
class UserManager extends Manager
{

  public function getUser($usrName)
  {
    $db_conct = $this->dbConnect();

    // query for user
    $sql = 'SELECT * FROM t_user WHERE usr_name = ?';

    $stmt = $db_conct->prepare($sql);

      // perform query
    $stmt->execute(array($usrName));
    $usr = $stmt->fetch();

    if ($usr)
      return $usr;

     else
      throw new \Exception("Erreur: Le nom d'Utilisateur envoye n'est pas correct");

  
    /*if ($usr) {
      return $usr;
    }*/
}
}
