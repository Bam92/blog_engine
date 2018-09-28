<?php
use \Bam\Blog\Model\UserManager;

require_once('model/UserManager.php');

function login() {


  require('view/backend/loginView.php');
}

function callAdmin() {

  $usrManager = new UserManager();

  $usr = $usrManager->getUser($_POST["username"]);

/*  if ($usr)
      require('view/backend/adminView.php');

     else
      throw new \Exception("Erreur: Le nom d'Utilisateur envoye n'est pas correct, " . $usr['usr_name']. " et pwd " .$_POST["password"]);
*/

require('view/backend/adminView.php');


}
