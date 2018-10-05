<?php
namespace Bam\Blog\Model;

require_once("model/Manager.php");
/**
 * Admin zone
 */
class UserManager extends Manager
{

  public function login($usrnm, $psswd)
  {
    $db_conct = $this->dbConnect();

    // query for user
    $sql = 'SELECT * FROM t_user WHERE usr_name = ?';

    $stmt = $db_conct->prepare($sql);

      // perform query
    $stmt->execute(array($usrnm));
    $user = $stmt->fetch();

    //$isValid = password_verify($psswd, $user[0]);

   if ($user['usr_password'] == $psswd) {

     $_SESSION['loggedin'] = true;
     $_SESSION['usrId'] = $user['usr_id'];
     $_SESSION['username'] = $user['usr_name'];

      return true;
  }
}

  public function logout() {
    session_destroy();
  }
}
