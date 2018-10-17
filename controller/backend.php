<?php
session_start();
use \Bam\Blog\Model\UserManager;
use \Bam\Blog\Model\PostManager;
use \Bam\Blog\Model\CommentManager;
use \Bam\Blog\Model\TagManager;

require_once('model/PostManager.php');
require_once('model/UserManager.php');


function loginForm() {

  require('view/backend/loginView.php');
}

function editForm() {

  $postManager = new PostManager();
  $edit = $postManager->getPost($_GET['id']);

  require('view/backend/pstEditView.php');
}

function addPostForm() {

  if(!is_logged_in()){
    //echo "Vous devez vous connecter pour acceder ici!!";
    header('Location: index.php?action=login');
  }

  require('view/backend/pstAddView.php');
}

function callAdmin() {

if(!is_logged_in()){
  //echo "Vous devez vous connecter pour acceder ici!!";
  header('Location: index.php?action=login');
}

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
    throw new \Exception("Nom d'utilisateur ou mot de passe incorrect");
  }
}
//end if submit

function addPost($pstTitle, $pstContent) {

  // be sure the user is connected
  if(!is_logged_in()){
    //echo "Vous devez vous connecter pour acceder ici!!";
    header('Location: index.php?action=login');
  }

  $pstManager = new PostManager();
  $affectedRows = $pstManager->postPost($pstTitle, $pstContent);

  if ($affectedRows === false) {
    throw new \Exception("Impossible d'ajouter l'article!");
  } else {
    echo "L'article a ete ajoute avec succes";
  }
}

// update post
function updatePost($pstTitle, $pstContent, $pstId) {

  // be sure the user is connected
  if(!is_logged_in()){
    //echo "Vous devez vous connecter pour acceder ici!!";
    header('Location: index.php?action=login');
  }

  $pstManager = new PostManager();
  $affectedRows = $pstManager->editPost($pstTitle, $pstContent, $pstId);

  if ($affectedRows === false) {
    throw new \Exception("Impossible de modifier l'article!");
  } else {
    echo "L'article a ete modifie avec succes";
  }
}

function destroySession() {

  // log user out
  $usrManager = new UserManager();
  $user =$usrManager->logout();
  header('Location: index.php');

}
