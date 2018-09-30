<?php

use \Bam\Blog\Model\UserManager;
use \Bam\Blog\Model\PostManager;
use \Bam\Blog\Model\CommentManager;
use \Bam\Blog\Model\TagManager;

require_once('model/PostManager.php');
require_once('model/UserManager.php');


function loginForm() {

  require('view/backend/loginView.php');
}

function callAdmin() {

//  if(!is_logged_in()){ header('Location: index.php?action=login'); }

  $postManager = new PostManager();
  $posts = $postManager->getPosts();

require('view/backend/adminView.php');


}

function is_logged_in(){
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        return true;
    }
}

//process login form if submitted
function loginChk() {

  $usrManager = new UserManager();

  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  if($user = $usrManager->login($username, $password)){

      //logged in return to dashbord and say hello to admin
      header('Location: index.php?action=admin');
      exit;
  } else {
    throw new \Exception("Wrong username or password");
  }
}
//end if submit

function addPost($pstTitle, $pstContent) {

  $pstManager = new PostManager();
  $affectedRows = $pstManager->postPost($pstTitle, $pstContent);

  if ($affectedRows === false) {
    throw new \Exception("Impossible d'ajouter l'article!");
  } else {
    header('Location: index.php?action=admin');
  }
}
