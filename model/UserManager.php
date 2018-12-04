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
    $sql = 'SELECT * FROM t_auth WHERE auth_name = ?';

    $stmt = $db_conct->prepare($sql);

      // perform query
    $stmt->execute(array($usrnm));
    $user = $stmt->fetch();

    //$isValid = password_verify($psswd, $user[0]);

   if ($user['auth_password'] == $psswd) {

     $_SESSION['loggedin'] = true;
     $_SESSION['usrId'] = $user['auth_id'];
     $_SESSION['username'] = $user['auth_name'];

      return true;
     }
  }
   
  public function getUser()
  {
     $db_conct = $this->dbConnect();

    // query for user
    $stmt = $db_conct->query('SELECT * FROM t_auth');
    $user = $stmt->fetchAll();
     
    return $user;
  }

  public function logout() {
    session_destroy();
  }
}
